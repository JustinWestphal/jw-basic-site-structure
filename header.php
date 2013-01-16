<!DOCTYPE html>
<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="description" content="<?php echo($description);?>"/>
<meta name="keywords" content="<?php echo($keywords);?>"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
<link href="favicon.ico" rel="SHORTCUT ICON" />

<link href="css/style.css" media="screen" rel="stylesheet" type="text/css"/>
<link href="css/blocks.css" media="screen" rel="stylesheet" type="text/css"/>
<!--[if IE lt 9]>
<link href="css/ie.css" media="screen" rel="stylesheet" type="text/css"/>
<![endif]-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="js/script.js" type="text/javascript"></script>
<script src="js/libs/modernizr-2.0.6.min.js" type="text/javascript"></script>

<title><?php echo($title);?></title>

</head>
<div class="wrapper">
<nav>
<ul>
	<li><a href="#">Home</a></li>
	<li><a href="#">Work</a></li>
	<li><a href="#">About</a></li>
	<li><a href="#">Contact</a></li>
</ul>
</nav>
<section class="<?php echo(basename($_SERVER['PHP_SELF'],'.php'));?> contents">