<?php
/*
 * Template Name: archive-projects
 * The template for displaying project pages.
 *
 * @package mapify_theme
 */

get_header(); ?>







<!-- // Projects for real -->


	<div id="primary" class="content-area">
		<main id="main" class="projects-site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				
					<h1>Our Projects</h1>
					<p class="greyText">Take a look at where we've made an impact.</p>
					

			</header><!-- .page-header -->
			
			<div class="article-container">
			<?php /* Start the Loop */ ?>

			
			
			<?php while ( have_posts() ) : the_post(); ?>
				
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<section class="project-container">
					<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail( 'large' ); ?>

				

					<?php endif; ?>
						<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
					</section><!-- .entry-header -->

					<div class="entry-content">
						<?php the_excerpt(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-## -->

			<?php endwhile; ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>