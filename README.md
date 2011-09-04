## Process and minify LESS on the fly

*Built to play nice with [Symphony CMS](http://symphony-cms.com/)*

It's so easy..

1. Write with [LESS](http://lesscss.org/)

2. Call like normal  *Example:* `<link rel="stylesheet" type="text/css" href="workspace/php/lessc.php?a=../less/common.less" />`

## Install

Simply download and drop on a web server running PHP.  
`report.php` will show a good description, while `index.html` is a functional example.

### `report.php` contents

**LESS in**

	@base: 30px;

	.group {
	    .entry {
	        border: solid 1px;        
	        width: @base * 5;
	        text-align: center;
	    }
	}

**CSS out**

	.group .entry {
	  border:solid 1px;
	  width:150px;
	  text-align:center;
	}

**CSS minified**

	.group
	.entry{border:solid 1px;width:150px;text-align:center}