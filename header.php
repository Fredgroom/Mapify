<?php
/**
 * The header for our theme.
 *
 * @package mapify_theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

      <!-- Ryan: alternate classes based on page -->
      <?php $reverse = is_front_page(); ?>

			<header id="masthead" class="site-header <?php echo $reverse ? ' reverse-header' : ''; ?>" role="banner">
        <nav class="navbar">
  				<div class="site-branding navbar-brand">
  					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>


  				</div>

				<div class="icon-padding">
					 <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri() ?>/icons/group-icon.png"></a>
				</div>


						<img class="hamburger-menu" src="<?php echo get_template_directory_uri(); ?>/icons/hamburger-menu.png"/>


					       <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>


 <!-- search icon image -->
			<div id="search-id">
					<img class="search-icon" src="<?php echo get_template_directory_uri(); ?>/icons/search-icon.png"/>
			</div>



    <!-- input search field -->
			<input type="text" name="firstname" value="" id="input-field">


                 <?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_id' => 'secondary-menu' ) ); ?>

			</header><!-- #masthead -->

			<div id="content" class="site-content">



			
				 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
				<script>
				 $('#search-id').click(function(){
      $('#input-field').toggle('slow');
  });
	</script>
