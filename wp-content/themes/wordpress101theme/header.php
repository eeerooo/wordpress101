<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Wordpress 101</title>
	<?php wp_head(); ?>
</head>
<body>
	
	<!-- Main Header Navigation -->
	<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>