body {
	background-color:#efefff;
	color:#000000;
	font-family: Optima, Segoe, "Segoe UI", Candara, Calibri, Arial, sans-serif;
	font-size:14px;
	margin:0px;
	margin-top:62px;
	background-image:url('/images/yellow-bg-line.png');
	background-repeat:repeat-y;
	background-attachment:fixed;
	background-position:center;
	line-height:1.4em;
	-webkit-font-smoothing: subpixel-antialiased;
}
table {
	text-align:left;
}
table.image {
	background-color:#e4e4e4;
	border:solid 1px #000000;
}
table.emtable {
	background-color:#dddddd;
	border:solid 1px #555555;
}
table.poptable {
	border-spacing:4px;
}
th {
	background-color:#9c4b54;
	color:white;
	padding:2px 5px 2px 5px;
	font-weight:bold;
}
td.r1 {
	background-color:#e8e8f8;
}
td.r0 {
	background-color:#efefef;
}
tr.r1 td {
	background-color:#e8e8f8;
}
tr.r0 td {
	background-color:#efefef;
}
td.emcell {
	background-color:#eeeeee;
}
td.errorcell {
	background-color:#f49999;
}
div.mailnav {
	display:inline-block;
	padding:2px 10px;
	margin:-2px 0px;
	background-color:#333333;
}
td.navcell {
	padding:3px;
	font-size:13px;
	border:1px solid black;
}
td.normalcell {
	font-size:14px;
}
td.minicell {
	font-size:11px;
}
td.topspacer {
	width:30px;
}
div.response {
	margin-left:50px;
	border:solid 1px #000000;
}
div.toolbar {
	background-color:#606099;
	background-color:rgba(0,0,90,0.5);
	padding:5px;
	text-align:center;
	color: white;
	margin-top:15px;
	margin-bottom:15px;
}
div.toolbar a {
	color: white;
	text-decoration: none;
}
div.titlefloat {
	float:right;
	padding-top:4px;
}

/* 1st - the menu bar */
div.menubar-wrapper {
	position:absolute;
	width:100%;
	top:0px;
	height:54px;
	background-color:#606099;
	background-color:rgba(0,0,90,0.5);
	min-width:767px;
	z-index:9000001;
}
@media screen and (min-width: 767px) {
	div.menubar-wrapper {
		position:fixed;
	}
}
div.menubar {
	max-width:1160px;
	min-width:767px;
	margin:auto;
	height:100%;
	z-index:9000001;
}
div.menubar a {
	color:white;
	text-decoration:none;
}
div.menusearch {
	border:2px inset #888888;
	border-radius:4px;
	margin:0px;
	display:inline-block;
}
table.menubar-table {
	width:100%;
	height:100%;
	margin:0px;
	padding:0px;
	border-collapse:collapse;
	white-space:nowrap;
}
input#nav_search {
	font-size:14px;
	border:0px;
	padding:3px;
	margin:0px;
	height:22px;
	width:175px;
}
input#nav_search_button {
	height:28px;
}
input#nav_search_settings {
	height:28px;
}
td#menucell1 { /* max=295, min=50 */
	vertical-align:middle;
	padding:0px 5px;
	width:60px;
	min-width:40px;
}
td#menucell2 { /* max=355, min=260 */
	text-align:center;
	vertical-align:middle;
	padding:0px;
	width:355px;
	min-width:260px;
}
td#menucell3 {
	vertical-align:middle;
	padding:0px 5px;
}
td#menucell4 {
	text-align:right;
	vertical-align:middle;
	padding:0px;
	white-space:nowrap;
}
img#nav_logo {
	border:0px;
	width:249px;
	display:none;
}
img#nav_logo_small {
	border:0px;
}
@media screen and (min-width: 920px) {
	img#nav_logo {
		display:inline;
	}
	img#nav_logo_small {
		display:none;
	}
	td#menucell1 {
		width:290px;
	}
}
div.pnlicon {
	display:inline-block;
	*display: inline; /* IE7 hack */
	zoom: 1; /* IE7 hack */
	height:28px;
	width:25px;
	position:relative;
	text-align:center;
	vertical-align:middle;
}
div.pnlicon img {
	height:24px;
	border-width:0px;
}
div.pnlnumber {
	position:absolute;
	line-height:24px;
	top:1px;
	left:0px;
	width:100%;
	text-align:center;
	font-size:10px;
	color:red;
	text-shadow:-1px 0 white,0 1px white,1px 0 white,0 -1px white;
}
/* 2nd - the banner ad */
div.bannerad {
	width:730px;
	height:92px;
	margin-left:auto;
	margin-right:auto;
	margin-top:0px;
	margin-bottom:8px;
}
div.banneradoff {
	width:730px;
	height:20px;
	margin-bottom:8px;
}
/* 3rd - the body */
div.body-wrapper {
	padding:1px 15px;
	max-width:1130px;
	min-width:737px;
	margin-left:auto;
	margin-right:auto;
}
div.body {
	position:relative;
	border:1px solid #666666;
	box-shadow:0px 2px 3px 1px #666666, 0px 0px 70px 5px #ebe6cc inset;
	background-color:#fffff1;
	padding:40px;
	padding-bottom:60px;
	min-width:657px;
	min-height:300px;
}
div.bodywide {
	display:inline-block;
	min-width: 657px;
	min-width: -moz-calc(100% - 80px);
	min-width: -webkit-calc(100% - 80px);
	min-width: calc(100% - 80px);
}
/* 4th - the footer */
div.footer {
	max-width:1080px;
	min-width:687px;
	margin-left:auto;
	margin-right:auto;
	padding:5px 15px;
}

/* search on main page */
div#main_search_box {
	border:2px inset #888888;
	border-radius:4px;
	margin:0px;
	display:inline-block;
}
input#main_search {
	font-size:20px;
	border:0px;
	padding:4px;
	margin:0px;
	height:28px;
	width:560px;
}
input#main_search_button {
	height:36px;
}
input#main_search_settings {
	margin-left:1px;
	height:36px;
}
#searchsettings_menu {
	display:none;
	position:absolute;
}
#searchsettings_menu a {
	color:black;
}

div#logo {
	display:inline-block;
	position:relative;
}
div#logo > div {
	font-size:24px;
	letter-spacing:3px;
	white-space:nowrap;
	width:550px;
	position:absolute;
	bottom:10px;
	left:125px;
	text-align:left;
}
div.normal {
	font-size:14px;
}
div.comment {
	padding:5px;
	margin:10px;
	margin-left:40px;
	border-radius: 5px;
}
div.namepagename {
	font-size:28px;
	font-weight:bold;
	margin-bottom:10px;
}
div.ipadnamepagename {
	font-size:14px;
	font-weight:bold;
}
div.ipadnamepagedesc {
	font-size:13px;
}
div.nameinfo {
	font-size:14px;
	padding:3px;
	padding-left:20px;
	text-indent:-10px;
}
div.nametools {
	font-size:11px;
	background-color:#ffffff;
	padding:2px;
	border:1px solid black;
	margin-left:5px;
	line-height:14px;
}
div.namesub {
	margin-bottom:1px;
	margin-top:1px;
}
div.nameheading {
	font-size:14px;
	font-weight:bold;
	margin-bottom:10px;
	margin-top:15px;
	clear:both;
	color:#4f2211;
}
div.letterlinks {
	font-size:18px;
	font-weight:bold;
	padding:10px 0px;
}
div.genderlinks {
	font-size:18px;
	padding:10px 0px;
}
div.usagelinks {
	font-size:18px;
	padding:5px;
}
div.usagelinks table td {
	padding:5px;
}
div.menugroup {
	margin-top:2px;
	margin-bottom:10px;
}
div.browsename {
	padding:2px;
	padding-top:3px;
	padding-bottom:3px;
	margin:1px;
	margin-top:4px;
	margin-bottom:4px;
}
div.browsenamebrief {
	padding:2px;
	padding-top:3px;
	padding-bottom:3px;
	margin:1px;
	border-bottom:1px solid white;
}
div.spacesaver {
	margin-left:-10px;
	margin-right:-10px;
}
div.searchfilter {
	float:right;
}
div.sheknows {
	font-size:11px;
	padding-top:3px;
}
div.social_home {
	position:absolute;
	right:5px;
	top:5px;
	display:inline-block;
}
div.social_home img {
	height:30px;
	border:0px;
}
div.social_block {
	display:inline-block;
	vertical-align:middle;
}
div.social_block img {
	height:30px;
	border:0px;
}
div.social_item {
	display:inline-block;
	margin:3px 0px;
}
div.social_name {
}
div.social_name_item {
	margin:3px 0px;
}
div.info_message {
	color:#cc0000;
	text-align:center;
	margin:20px;
}
div.heading-wrapper {
	margin-left:-55px;
	margin-right:-40px;
	background-image:url("/images/header-edge.png");
	background-repeat:no-repeat;
	background-position:1px 6px;
}
div.usage_group {
	line-height:150%;
	padding:0px 0px 10px 5px;
}
h3.pageheading {
	font-size:15px;
	font-weight:bold;
	background:#9c4b54;
	color:#ffffff;
	padding:3px 10px;
	margin:0px;
}
h2.heading {
	font-size:20px;
	display:inline-block;
	background-color:#444444;
	background-color:rgba(0,0,0,0.65);
	color:#ffffff;
	padding:5px 75px 5px 55px;
	line-height:25px;
	clear:both;
	height:25px;
	margin:16px 1px;
}
h1.bigheading {
	font-size:20px;
	box-shadow:0px 0px 10px 3px #8c3b44 inset;
	background-color:#9c4b54;
	color:#ffffff;
	padding:5px;
	padding-left:20px;
	font-weight:bold;
	margin-top:4px;
	margin-bottom:4px;
	line-height:1.2em;
}
h1.title {
	font-size:28px;
	font-weight:bold;
	margin:0px;
	margin-bottom:30px;
	line-height:1.2em;
}
p.error {
	padding:30px;
	text-align:center;
	font-weight:bold;
}
span.tiny {
	font-size:11px;
	line-height:1.4em;
}
span.small {
	font-size:11px;
	line-height:1.4em;
}
span.heavy {
	font-size:14px;
	font-weight:bold;
}
span.heavymedium {
	font-size:16px;
	font-weight:bold;
	line-height:1.2em;
}
span.heavybig {
	font-size:24px;
	font-weight:bold;
	line-height:1.2em;
}
span.heavyhuge {
	font-size:48px;
	font-weight:bold;
	line-height:1.2em;
}
span.sup {
	font-size:9px;
	vertical-align:top;
}
span.info {
	font-size:14px;
	color:#444444;
}
span.masc {
	font-size:14px;
	color:#111177;
}
span.fem {
	font-size:14px;
	color:#771111;
}
span.emtext {
	background-color:#ffff66;
}
span.emtext2 {
	background-color:#ffffff;
	padding:1px;
	border:1px solid;
}
span.bbtitle {
	font-size:14px;
	color:#552211;
	font-weight:bold;
}
span.bbsubject {
	font-size:16px;
	font-weight:bold;
}
span.namesub {
	font-weight:bold;
	color:#4f2211;
	font-size:11px;
}
span.foreign {
	font-family: sans-serif;
}
span.blurbrank {
	font-size:15px;
	vertical-align:text-top;
	font-weight:bold;
}
select {
	font-size:13px;
}
textarea.bbpost {
	width:500px;
	height:200px;
}
@media screen and (min-width: 920px) {
	textarea.bbpost {
		width:700px;
		height:250px;
	}
}
hr {
	background-color:#ddddd3;
	color:#ddddd3;
	height:1px;
	border:0;
}
td.profilepic {
	width:200px;
	padding-left:30px;
}
@media screen and (min-width: 820px) {
	td.profilepic {
		width:250px;
	}
}
@media screen and (min-width: 920px) {
	td.profilepic {
		width:300px;
	}
}
td.profilepic img {
	width:100%;
}
ul.threads {
	line-height:1.5em;
}


A:link {
	color:#0000ee;
	text-decoration:none;
}
A:visited, A:active {
	color:#6633b4;
	text-decoration:none;
}
A:hover {
	color:#8888ff;
	text-decoration:underline;
}

A:link.nl {
	color:#444488;
	font-weight:bold;
	text-decoration:underline;
}
A:visited.nl, A:active.nl {
	color:#222244;
	font-weight:bold;
	text-decoration:underline;
}
A:hover.nl {
	font-weight:bold;
	text-decoration:none;
}

A:link.nf {
	color:#aa2222;
}
A:visited.nf, A:active.nf {
	color:#aa6666;
}
A:hover.nf {
	color:#747474;
}

A:link.usg {
	color:#444444;
}
A:visited.usg {
	color:#444444;
}
A:hover.usg, A:active.usg {
	color:#747474;
}

A:link.ngl {
	color:#444488;
}
A:visited.ngl {
	color:#222244;
}
A:hover.ngl, A:active.ngl {
	color:#747474;
}

A:link.trn {
	color:#444488;
	font-style:normal;
}
A:visited.trn {
	color:#222244;
	font-style:normal;
}
A:hover.trn, A:active.trn {
	color:#747474;
	font-style:normal;
}

A:link.plain, A:visited.plain {
	color:#000000;
}
A:hover.plain, A:active.plain {
	color:#545454;
}

A:link.quick, A:active.quick, A:visited.quick {
	color:#000000;
	display:inline-block;
	font-size:14px;
	text-decoration:none;
	text-align:center;
	background-color:#ffffff;
	padding:2px 5px;
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
	-khtml-border-radius: 3px;
	border-radius: 3px;
	border:2px solid #999999;
	white-space:nowrap;
	margin:5px;
	width:80%;
}
A:hover.quick {
	color:#747474;
}

A:link.button, A:active.button, A:visited.button {
	color:#ffffff;
	font-size:14px;
	text-decoration:none;
	text-align:center;
	background-color:#9c4b54;
	border:2px outset #888888;
	padding:0px 5px 0px 5px;
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
	-khtml-border-radius: 3px;
	border-radius: 3px;
	display:inline-block;
	margin:1px;
	line-height:18px;
}
A:hover.button {
	border:2px inset #888888;
}

A:link.bigbutton, A:active.bigbutton, A:visited.bigbutton, .bigbutton {
	color:#ffffff;
	font-size:14px;
	font-weight:bold;
	text-decoration:none;
	text-align:center;
	background-color:#9c4b54;
	border:2px outset #888888;
	padding:0px 5px 0px 5px;
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
	-khtml-border-radius: 3px;
	border-radius: 3px;
	white-space:nowrap;
	display:inline-block;
	margin:1px;
	line-height:18px;
}
A:hover.bigbutton, .bigbutton:hover {
	border:2px inset #888888;
}

A:link.namebutton, A:active.namebutton, A:visited.namebutton {
	color:#ffffff;
	font-size:14px;
	font-weight:bold;
	text-decoration:none;
	text-align:center;
	background-color:#9c4b54;
	border:2px outset #888888;
	padding:0px 5px 0px 5px;
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
	-khtml-border-radius: 3px;
	border-radius: 3px;
	white-space:nowrap;
	display:inline-block;
	margin:1px;
	line-height:18px;
}
A:hover.namebutton {
	border:2px inset #888888;
}

/* #anchor targets */
A.hashanchor {
	position:relative;
	top:-54px;
}

/* tab system */
/* 1. tab content - two different blocks */
div.tabpaneclear { /* used in profile, PNL, namesakes/popularity search forms and methodology description */
	background:#fffffc;
	border:solid 1px #888888;
	padding:10px;
}
table.subtab { /* used in popularity graph and submitted names */
	background:#fffffc;
	border:1px solid #888888;
}
/* 2. tabs */
#tabnav {
	border-bottom:0px;
	margin:0px;
	padding-bottom:0px;
	padding-left:10px;
	padding-top:0px;
	position:relative;
}
#tabnav li {
	margin:0px;
	padding:0px;
	display:inline;
	list-style-type:none;
}
#tabnav a:link, #tabnav a:visited {
	float:left;
	background:#dddddc;
	border:1px solid #888888;
	border-bottom:0px;
	padding:2px 10px 2px 10px;
	margin-right:4px;
	text-decoration:none;
	color:#000000;
	line-height:14px;
}
#tabnav a:link.active, #tabnav a:visited.active {
	background:#fffffc;
	z-index:2;
	line-height:15px;
	margin-bottom:-1px;
	position:relative;
}
#tabnav a:link.hilight, #tabnav a:visited.hilight {
	background:#dda4a4;
}
#tabnav a:hover {
	background:#fffffc;
}
/* end tab system */

/* verical tab system */
/* 1. tab content */
.vtabpane {
	background-color:#fffffc;
	border:1px solid #888888;
}
/* 2. tabs */
.vtabnav {
	float:left;
	list-style:none;
	margin:0px;
	padding:0px;
}
.vtabnav li {
	margin:5px 0px;
	background-color:#dddddc;
	border:1px solid #888888;
	overflow:hidden;
	white-space: nowrap;
}
.vtabnav li.selected {
	background-color:#fffffc;
	border-right: none;
	overflow:visible;
}
.vtabnav a, .vtabnav a:visited {
	display:block;
	text-decoration:none;
	padding:2px;
}
.vtabnav a:hover {
	background-color:#fffffc;
}
/* end tab system */

br.clear {
	clear:both;
	line-height:0px;
	display:block;
}

table.formtable {
	border:solid 1px #555555;
	background-color:#dddddd;
	border-spacing:3px;
}
table.formtable > tbody > tr > td {
	padding:5px;
	background-color:#eeeeee;
}
table.formtable > tbody > tr > td.formplaincell {
	background-color:#dddddd;
}
table.formtable > tbody > tr > td.formerrorcell {
	background-color:#f49999;
}

img.toolbaricon {
	border-width:0px;
	height:15px;
	vertical-align:text-top;
}

img.buttonicon {
	border-width:0px;
	height:14px;
	text-align:top;
	margin:-2px;
	padding-right:4px;
}

img.inlineicon {
	border-width:0px;
	height:14px;
	text-align:top;
}

.ui-menu-item {
	font-size:12px;
}

.search-suggestions {
	overflow-y: auto;
	overflow-x: hidden;
}
.usage-suggestions {
	max-height: 300px;
	overflow-y: auto;
	overflow-x: hidden;
}

ul.btnmenu {
	/* the menu */
	list-style: none;
	padding: 0px;	
	margin: 0px;
	float: left;
	white-space: nowrap;
	width: 270px;
}
ul.btnmenu li {
	/* ALL <li> in the menu */
	float: left;
	margin: 0px;	
	position: relative;
}
ul.btnmenu li.btnsubhover {
	/* ALL <li> in the menu when hovering */
	background-color: #cccccc;
}
ul.btnmenu li.btnsubhover a {
	/* ALL <a> in the menu when hovering */
	color: black;
}
ul.btnmenu li a {
	/* ALL <a> in the menu */
	line-height: 30px;
	padding: 5px 12px;
	display: block;
	color: white;
	font-size: 20px;
	text-decoration: none;
	float: left;
}
ul.btnmenu li ul.btnsubmenu {
	/* submenus */
	list-style: none;
	margin: 5px 0px;
	padding: 0px;
	position: absolute;
	left: 0px;
	top: 32px;
	background-color:#888888;
	background-color:rgba(0,0,0,0.75);
	display: none;
	float: left;
	z-index:9000001;
}
ul.btnmenu li ul.btnsubmenu li {
	/* all <li> in submenus */
	margin: 0px;
	clear: both;
}
ul.btnmenu li ul.btnsubmenu li a {
	/* all <a> in submenus */
	line-height:normal;
	padding: 8px 12px;
	float: left;
	width: 180px;
	color: white;
	font-size: 18px;
}
ul.btnmenu li ul.btnsubmenu li.btnsubhover {
	/* all <li> in submenus when hovering */
	background-color:black;
}

div#memberopts {
	display:inline-block;
	*display:inline; /* IE7 hack */
	zoom: 1; /* IE7 hack */
	position:relative;
}
div#memberoptsheading a {
	line-height: 30px;
	padding: 5px 10px;
	display: block;
	font-size: 15px;
	text-decoration: none;
}
div.btnsubhover {
	/* ALL <li> in the menu when hovering */
	background-color: #cccccc;
}
div.btnsubhover div#memberoptsheading a {
	/* ALL <a> in the menu when hovering */
	color: black;
}
ul#membermenu {
	/* submenus */
	list-style: none;
	margin: 5px 0px;
	padding: 0px;
	position: absolute;
	top: 32px;
	right: 0px;
	background-color:#888888;
	background-color:rgba(0,0,0,0.75);
	display: none;
	z-index:9000001;
	text-align:right;
}
ul#membermenu li {
	/* all <li> in submenus */
	margin: 0px;
	clear: both;
}
ul#membermenu li a {
	/* all <a> in submenus */
	padding: 4px 10px;
	float: left;
	width: 130px;
	color: white;
}
ul#membermenu li a:hover {
	/* all <a> in submenus */
	background-color:black;
}

a.searchsettings_a_on {
	display:inline-block;
	padding-left:20px;
}
a.searchsettings_a_off {
	display:inline-block;
	padding-left:20px;
}

