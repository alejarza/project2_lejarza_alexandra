<style type="text/css">
* {
	margin: 0;
	padding: 0;
	border: 0;
}

article, aside, details, figcaption, figure, footer, header, main, nav, section, summary {
    display:block;
}
body{
  font-family: 'Quicksand', sans-serif;
	margin:0;
	width:100%;
	height:100vh;
  background:#ffffff;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
}
header{
	width:100%;
	background: #a8314b;
	height:60px;
	line-height:60px;
	border-bottom:1px solid #dddddd;
}
.hamburger{
  background:none;
  position:absolute;
  top:0;
  left:0;
  line-height:45px;
  padding:5px 15px 0px 15px;
  color: white;
  border:0;
  font-size:1.4em;
  font-weight:bold;
  cursor:pointer;
  outline:none;
  z-index:10000000000000;
}
.cross{
  background:none;
  position:absolute;
  top:0px;
  left: 0;
  padding:7px 15px 0px 15px;
  color: white;
  border:0;
  font-size:3em;
  line-height:65px;
  font-weight:bold;
  cursor:pointer;
  outline:none;
  z-index:10000000000000;
}
.menu{z-index:1000000; font-weight:bold; font-size:0.8em; width:20%; background:#a8314b;  position:absolute; text-align: center; font-size:14px;}
.menu ul {margin: 0; padding: 0; list-style-type: none; list-style-image: none;}
.menu li {display: block;   padding:15px 0 15px 0; border-bottom:#dddddd 1px solid;}
.menu li:hover{display: block; background:#568492; padding:15px 0 15px 0; border-bottom:#dddddd 1px solid;}
.menu ul li a { text-decoration:none;  margin: 0px; color: white;}
.menu ul li a:hover {  color: #102d33; text-decoration:none;}
.menu a{text-decoration:none; color:#666;}
.menu a:hover{text-decoration:none; color:#666;}

body {
	font-family: 'Quicksand', sans-serif;
	color: #102d33;
}

h1, h2 {
	font-family: 'Bree Serif', cursive;
  padding: 2%;
	color: #102d33;
}

h1 {
	font-size: 1.6em;
}

h2 {
	font-size: 1.2em;
}

h3, h4, h5, h6 {
	color: #568492;
	font-size: .9em;
}

p {
  padding: 2%;
}

footer {
  background: #cb8699;
  color: white;
  text-align: center;
  width: 100%;
  padding: 1%;
}

.aboutme,
.education-left,
.education-right,
.experience,
.design-experience {
  background-color: #ffffff;
  border: 1px solid black;
  opacity: 0.8;
  line-height: 150%;
  padding: 2%;
  margin: 4%;
}

</style>

<body class="home">
	<header>
<button class="hamburger">&#9776;</button>
<button class="cross">&#735;</button>
</header>

<nav class="menu">
<ul>
	<li><a href="index.html">Home</a></li>
	<li><a href="education.html">Education</a></li>
	<li><a href="career.html">Career</a></li>
	<li><a href="portfolio.html">Portfolio</a></li>
	<li><a href="contact.html">Contact Me</a></li>
</ul>
</nav>

<div class="inquiry">
	<h1>Missing fields</h1>
	<p>Sorry, you have not completed all of the required fields.</p>
	<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

	<ul>
	<?php
		for($i=0; $i<count($this->missing_required_fields); $i++){
			echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
		}
	?>
	</ul>

	<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
</div>

<footer>Alexandra Lejarza 2021</footer>
