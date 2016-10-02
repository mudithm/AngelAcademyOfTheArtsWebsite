<?php
function head()
{
echo"
<?php include 'req.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset='UTF-8' />
	<title>Angel Academy of the Arts</title>
	<link rel='stylesheet' type='text/css' href='/css/AngelStyle.css'>
	<!--[if lt IE 9]>
	<script src='/js/html5shiv.js'></script>
	<![endif]--> 
	<script src='http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js'></script>
	<script src='/js/indexslide.js'></script>
	<link rel='stylesheet' type='text/css' href='css/style.css' />
	<script type='text/javascript' src='js/modernizr.custom.53451.js'></script>
</head>
<body>
	<header>
		<img src='/Pictures/AngelArtsLogo.svg'> 
		<h1>
			<span>a</span>
			<span>n</span>
			<span>g</span>
			<span>e</span>
			<span>l</span>
		</h1>
		<p>academy of the arts</p>
	</header>
	<nav>
		<ul>
			<li><a href='/'>Home</a></li>
			<li><a href='/about.php'>About</a></li>
			<li><a href='/instructors/'>Instructors</a></li>
			<li><a href='/class.php'>Art Classes</a></li>
			<li><a href='/music.php'>Music Classes</a></li>
			<li><a href='/sgallery.php'>Student Gallery</a></li>
			<li><a href='/igallery.php'>Instructor Gallery</a></li>
		</ul>
	</nav>";
}

function foot()
{
echo"
	<footer>
		<p>Please call us at (510) 364-6757 for more information &nbsp
			2092 Omega Road, Suite D San Ramon, CA 94583 &nbsp
			Copyright @ 2013 Angel Academy of the Arts. All rights reserved
		</p>
	</footer>
</body>
</html>
";
}
?>