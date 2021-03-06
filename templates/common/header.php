<!DOCTYPE html>
<html>
<head>
	<!-- Standard header tags -->
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta name="author" content="Francis del Mundo" />
	<title>Templates</title>
	<link rel="icon" type="image/png" href="/images/p2-icon.png">

	<!-- Open Graph -->
	<meta property="og:image" content="/images/p2-icon.png" />
	<meta property="og:title" content="Prototype.to" />
	<meta property="og:description" content="Web development and prototypes for everyone" />
	<meta property="og:site_name" content="Prototype 2" />
	<meta property="og:url" content="http://prototype.to" />
	
	<!-- Stylesheets -->
	<link rel="stylesheet" type="text/css" href="css/$.css" />
	<?php 
		if (isset($styles) && is_array($styles)) {
			foreach ($styles as $style) {
				echo '<link rel="stylesheet" type="text/css" href="css/' . $style . '" />';
			}	
			unset($style);
			unset($styles);
		}
	?>
	
	
	<!-- Scripts -->
	<!--[if lt IE 9]>
	<script type="text/javascript" src="js/html5shiv.js"></script>
	<![endif]-->
	<script type="text/javascript" src="js/jquery-2.0.0.min.js"></script>
	<script type="text/javascript" src="js/$.js"></script>

</head>
<body>