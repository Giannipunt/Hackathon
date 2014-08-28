<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Music Book Reader</title>
    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link href="css/jquery.booklet.latest.css" type="text/css" rel="stylesheet" media="screen, projection, tv" />
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
</head>
<body>
<body>		
	<header>
		<h1>Music Book Reader</h1>
	</header>
	<div id="Container">
<ul>
<li>
	<span><a  href="#">Horror</a></span>
</li>
<li> 
	<span><a href="#">Misdaad</a></span>
	<ul>
		<li> <a class="menu" data-id="2" href="#">Cobra</a></li>
		<li> <a class="menu" data-id="3" href="#">Verloren onschuld</a></li>
	</ul>
</li>
<li>
	<span><a href="#">Romans</a></span>
</li>
<li>
	<span><a href="#">Criminaliteit</a></span>
</li>
</ul>
</div>
	<section>
	    <div id="mybook">
	        <div id="firstPage" title="first page">
	            <img class="animated fadeIn" title = "first page" src="books/boek1voorkant.jpg" height="100%" width="100%">
	        </div>
	        <div id="secondPage" title="second page">
	            <img class="animated fadeIn" src="books/boek1page1.jpg" height="100%" width="100%">
	        </div>
	        <div id="thirdPage" title="third page">
	            <img class="animated fadeIn" src="books/boek1page2.jpg" height="100%" width="100%">
	        </div>
	        <div id="fourthPage" title="fourth page">
	            <img class="animated fadeIn" src="books/boek1page3.jpg" height="100%" width="100%">
	        </div>
	    </div>
	</section>
	<footer></footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
	<script type="text/javascript">
	var windowHeight = $(window).height();
	windowHeight = windowHeight - 100;
	</script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.booklet.latest.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
    <embed name="Bullet For My Valentine Temper Temper Full Album" src="music/bulletformyvalentinetempertemper.mp3" loop="true" hidden="true" autostart="true">
</body>
</html>