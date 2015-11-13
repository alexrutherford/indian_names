# Summary

Quick notebook to parse names and genders from [Behind the Names](http://www.behindthename.com/names/usage/indian) using [Beautiful Soup](http://www.crummy.com/software/BeautifulSoup/bs4/doc/)

Passes foreign names into Google translate via TextBlob and adds translation and detected language from Langid.  

Borrows processed names data from UK and US from OpenGenderTracker's [GitHub repo](https://github.com/OpenGenderTracking/globalnamedata)  

Borrows processed names from Argentina/Uruguay from [GitHub repo](https://github.com/malev/gender-detector)  

Many resources from this [blog post](https://civic.mit.edu/blog/natematias/best-practices-for-ethical-gender-research-at-very-large-scales)  

# DB Schema

SQL DB stores name, number of male and female occurrences, flag if name can be unisex, and country, region and language hints where available.

| `name` | `male` | `female` | `unisex` | `country` | `region` | `lang` | `lang_detected` | `name_eng`
|---------|-----|-----|------|----------|-------|---|-------|----|
| احمد      | 99999 |      0 |      0 | PK      | asia   | ur   | ar            | Ahmed    |

# Additional Datasources

1. [Indian Hindi Baby Names](http://www.indianhindunames.com/tamil-tamizh-boy-baby-names.htm)  

# TODO

1. Add in [Wilson binomial correction](https://en.wikipedia.org/wiki/Binomial_proportion_confidence_interval#Wilson_score_interval)  
2. Add in url decomposition from [urlparse](https://docs.python.org/2/library/urlparse.html#module-urlparse)  
3. Create fresh DB connections following [this recipe](https://github.com/coleifer/peewee/issues/464) to prevent timeout  