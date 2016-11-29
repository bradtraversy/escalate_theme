<!DOCTYPE html">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title><?php bloginfo('title'); ?></title>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600' rel='stylesheet' type='text/css'>
<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" media="screen" />
<?php wp_head(); ?>
</head>
<body>
<div id="wrapper">
	<div id="header-wrapper">
		<div id="header">
			<div id="logo">
				<h1><a href="#"><?php bloginfo('name'); ?></a></h1>
				<p><?php bloginfo('description'); ?></p>
			</div>
		</div>
	</div>
	<!-- end #header -->
	<div id="menu">
		<?php wp_nav_menu(); ?>
	</div>
	<!-- end #menu -->
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">