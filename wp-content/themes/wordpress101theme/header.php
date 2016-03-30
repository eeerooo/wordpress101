<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Wordpress 101</title>
	<?php wp_head(); ?>
</head>

<?php

	if( is_front_page() ) :
		$wordpress101_classes = array( 'wordpress101-class', 'my-class' );
	else :
		$wordpress101_classes = array( 'no-wordpress101-class' );
	endif;

?>

<body <?php body_class( $wordpress101_classes ); ?>>
	
	<!-- Main Header Navigation -->
	<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>