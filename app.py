from flask import Flask

import sys,os,re,csv,urllib2
sys.path.append('/usr/local/lib/python2.7/dist-packages/')
import pymysql
import pandas as pd
from secrets import * # PW
import logging

conn = pymysql.connect(host='localhost',user='root',passwd=PW, db='gender',charset='utf8')
cur = conn.cursor()

hdlr = logging.FileHandler('log.log')
formatter = logging.Formatter('%(asctime)s %(levelname)s %(message)s')
hdlr.setFormatter(formatter)

app = Flask(__name__)
app.debug=True
app.logger.addHandler(hdlr) 

######################
def clean(s):
######################
    s=s.lower().strip()
    s=re.sub("\A[']+|\W[']+",'',s)
    s=re.sub('["]+|["]+','',s)
    s=re.sub('\A[(]+|\W[)]+','',s)
    s=re.sub('\?|:|\.|\,',' ',s)
    s=re.sub("""'|`""",' ',s)
    s=re.sub("/",'',s)
    
    s=s.partition(' ')[0]
    # Get first part of name i.e. 'Alex Rutherford' => 'Alex'
    
    return s

######################
@app.route('/loc=<string:locationString>&country=<string:countryString>', methods = ['GET'])
def searchInCountry(locationString,countryString):
    '''API call to get places matching @locationString
    located in country given by ISO 2 code @countryString
    '''
    
    if not len(countryString)==2:
        return ('country string not valid: must be ISO 2 letter code',400)
    
    query="""select * from places where clean_name='%s' and country='%s'""" % (locationString,countryString)
    res=pd.read_sql_query(query,conn)
    conn.commit()
    
    return (res.to_json(orient='records'),200)

######################
@app.route('/name=<string:nameString>&country=<string:countryString>', methods = ['GET'])
def searchInCountries(nameString,countryString):
    '''API call to search for names matching @nameString
        in country @countryString
    '''
    
    try:
        countries=countryString.split(',')
        
        if not all(map(lambda c:len(c)==2,countries)):
            app.logger.warning('Invalid country: %s' % countryString)
            return ('country string not valid: must be ISO 2 letter codes separated by commas %s' % map(len,countryString.split(',')),400)    
    except:
        app.logger.warning('Invalid country: %s' % countryString)
        return ('country string not valid: must be ISO 2 letter codes separated by commas %s' % map(len,countryString.split(',')),400)    
    
    query="""select * from gender where name='%s' and country in (%s)""" % (nameString,','.join("""'"""+c+"""'""" for c in countryString.upper().split(',')))
     
    res=pd.read_sql_query(query,conn)
#    res.sort(columns=['pop'])
    
    conn.commit()

    return (res.to_json(orient='records'),200)

######################
@app.route('/name=<string:nameString>', methods = ['GET'])
def search(nameString):
    '''API call to search for names matching @nameString
    '''
    
    nameString=clean(nameString)
    
    query="""select * from gender where name='%s'""" % nameString
     
    res=pd.read_sql_query(query,conn)
#    res.sort(columns=['pop'])
    
    conn.commit()

    return (res.to_json(orient='records'),200)

######################
if __name__ == "__main__":
    app.run(port=5001,host='0.0.0.0')