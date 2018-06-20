<?php
/**
 * template name: page-register
 * The template for displaying all pages.
 *
 * @package mapify_theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <div>
                <div class="redCircle"></div>
                <div class="greyCircle"></div>
                <div class="greyCircle"></div>
            </div>
            <div>
                <h1>Details</h1>
                <h1 class="greyText">Verify</h1>
                <h1 class="greyText">Complete</h1>
            </div>
			<?php while ( have_posts() ) : the_post(); ?>
            <section class="signUp">
                <?php echo do_shortcode( '[cfp id="54" title="Sign Up" pwd="password"]' ); ?>
                </section>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
 