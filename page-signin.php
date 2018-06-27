<?php
/**
 * template name: page-signin
 * The template for displaying all pages.
 *
 * @package mapify_theme
 */

get_header(); ?>

	<div id="primary" class="signUp-content-area">
		<main id="main" class="site-main" role="main">
            
			<?php while ( have_posts() ) : the_post(); ?>
           <section class="signInBackground">
               
                	<div class="formBackground">
		   				<img class="groupIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/icons/group-icon.png" alt="">
						<h1>Mapify</h1>
						<p class="grey-text">Empowering communities through data.</p>
						<?php echo do_shortcode( '[contact-form-7 id="115" title="Sign In" pwd="password"]' ); ?>
					</div>
             
                
			</section>	
			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
 
