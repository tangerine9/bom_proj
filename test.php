<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<style type="text/css">
ul.dropdown,
ul.dropdown li,
ul.dropdown ul {
 list-style: none;
 margin: 0;
 padding: 0;
}

ul.dropdown {
 position: relative;
 z-index: 597;
 float: left;
}

ul.dropdown li {
 float: left;
 line-height: 1.3em;
 vertical-align: middle;
 zoom: 1;
}

ul.dropdown li.hover,
ul.dropdown li:hover {
 position: relative;
 z-index: 599;
 cursor: default;
}

ul.dropdown ul {
 visibility: hidden;
 position: absolute;
 top: 100%;
 left: 0;
 z-index: 598;
 width: 100%;
}

ul.dropdown ul li {
 float: none;
}

ul.dropdown ul ul {
 top: 1px;
 left: 99%;
}

ul.dropdown li:hover > ul {
 visibility: visible;
}
ul.dropdown-linear {
 width: 100%;
}

ul.dropdown-linear ul li {
 float: left;
}

ul.dropdown-linear li.hover,
ul.dropdown-linear li:hover {
 position: static;
}

ul.dropdown-linear ul ul {
 display: none !important;
}
ul.dropdown-columnar ul li {
 position: static;
 width: 150px;
}

ul.dropdown-columnar ul ul {
 display: block !important;
 position: static;
 width: auto !important;
}

ul.dropdown-columnar ul ul li {
 float: none;
}

ul.dropdown-columnar ul ul ul {
 display: none;
}

ul.dropdown-columnar li.hover ul,
ul.dropdown-columnar li:hover ul {
 visibility: visible !important;
}

ul.dropdown {
 font: bold 35px/normal Arial, Helvetica, sans-serif;
 letter-spacing: -2px;
 text-transform: uppercase;
}

ul.dropdown li {
padding: 0 10px;
background-color: transparent;
color: #000;
}

ul.dropdown li.last ul li {
float: right;
}

ul.dropdown li.hover,
ul.dropdown li:hover {
background-color: #b0d730;
color: #000;
}

ul.dropdown a:link,
ul.dropdown a:visited	{ color: #000; text-decoration: none; }
ul.dropdown a:hover		{ color: #000; }
ul.dropdown a:active	{ color: #ffa500; }


/* -- level mark -- */

ul.dropdown ul {
background-color: #b0d730;
font-size: 12px;
letter-spacing: normal;
}

* html ul.dropdown ul {
width: 960px;
}

ul.dropdown ul li {
font-weight: bold;
}

/* -- level mark -- */

ul.dropdown ul ul {
margin-top: 5px;
text-transform: none;
}

ul.dropdown ul ul li {
 font-weight: normal;
}
ul.dropdown *.dir {
 padding-right: 30px;
 background-image: url(nav-arrow-down.png);
 background-position: 100% 50%;
 background-repeat: no-repeat;
}

ul.dropdown ul *.dir {
 background-image: none;
}

ul.dropdown li a {
 display: block;
 padding: 0 10px;
}

ul.dropdown li {
 padding: 0;
}

ul.dropdown li.dir {
 padding: 0 30px 0 10px;
}

ul.dropdown li.dir:hover {

}

ul.dropdown ul li.dir {
 padding: 10px;
}


ul.dropdown ul {
 padding: 0 10px;
}

ul.dropdown ul a {
 width: 140px;
 padding: 3px 5px;
 background: url(pattern2.png) 0 0 repeat-x;
}

ul.dropdown ul a:hover {
 background-color: #ffa500;
 color: #fff;
}

ul.dropdown ul ul {
 padding: 0;
 margin-left: -5px;
}

</style>

</head>
<body>


<ul id="nav" class="dropdown dropdown-linear dropdown-columnar">
<li><a href="./">Home</a></li>
<li class="dir">About
	<ul>
		<li class="dir">About Us
	<div class="ssss" style="background-color:#fff;">

	</div>
		</li>
	</ul>
</li>
<li class="dir">Services
	<ul>
		<li class="dir">Product Development
			<ul>
				<li><a href="./">Menu Subitem #1</a></li>
				<li><a href="./">Menu Subitem #2</a></li>
				<li><a href="./">Menu Subitem #3</a></li>
				<li><a href="./">Menu Subitem #4</a></li>
				<li><a href="./">Menu Subitem #5</a></li>
			</ul>
		</li>
		<li class="dir">Delivery
			<ul>
				<li><a href="./">Menu Subitem #1</a></li>
				<li><a href="./">Menu Subitem #2</a></li>
				<li><a href="./">Menu Subitem #3</a></li>
				<li><a href="./">Menu Subitem #4</a></li>
				<li><a href="./">Menu Subitem #5</a></li>
				<li><a href="./">Menu Subitem #6</a></li>
				<li><a href="./">Menu Subitem #7</a></li>
				<li><a href="./">Menu Subitem #8</a></li>
			</ul>
		</li>
		<li class="dir">Shop Online
			<ul>
				<li><a href="./">Menu Subitem #1</a></li>
				<li><a href="./">Menu Subitem #2</a></li>
				<li><a href="./">Menu Subitem #3</a></li>
				<li><a href="./">Menu Subitem #4</a></li>
				<li><a href="./">Menu Subitem #5</a></li>
			</ul>
		</li>
		<li class="dir">Support
			<ul>
				<li><a href="./">Menu Subitem #1</a></li>
				<li><a href="./">Menu Subitem #2</a></li>
				<li><a href="./">Menu Subitem #3</a></li>
				<li><a href="./">Menu Subitem #4</a></li>
				<li><a href="./">Menu Subitem #5</a></li>
				<li><a href="./">Menu Subitem #6</a></li>
				<li><a href="./">Menu Subitem #7</a></li>
			</ul>
		</li>
		<li class="dir">Training & Consulting
			<ul>
				<li><a href="./">Menu Subitem #1</a></li>
				<li><a href="./">Menu Subitem #2</a></li>
				<li><a href="./">Menu Subitem #3</a></li>
				<li><a href="./">Menu Subitem #4</a></li>
				<li><a href="./">Menu Subitem #5</a></li>
			</ul>
		</li>
	</ul>
</li>

</ul>
