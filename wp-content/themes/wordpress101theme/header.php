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

	<div class="container">
	
		<div class="row">
			
			<div class="col-xs-12">
				
				<div class="navbar navbar-default">
					<div class="container-fluid">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="#">Wordpress 101</a>
						</div>

						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<?php wp_nav_menu( array( 

									'theme_location' => 'primary', 
									'container' 	 => false,
									'menu_class'	 => 'nav navbar-nav navbar-right'

									) 
								); 
							?>
						</div>
					</div>
				</div>

			</div>

		</div>

		<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt=""/>