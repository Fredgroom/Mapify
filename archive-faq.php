<?php
/**
 * template name: archive-faq
 * The template for displaying faq pages.
 *
 * @package mapify_theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1>FAQs</h1>
			</header><!-- .page-header -->

		<div class="accordion" id="accordionExample">
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				
			<?php $post_slug = get_post_field( 'post_name', get_post() ); ?>
				<div class="card">
    				<div class="card-header" id="headingOne">
						<h5 class="mb-0">
							<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#<?php echo $post_slug;?>" aria-expanded="true" aria-controls="collapseOne">
							<?php echo the_title('<h2 class="entry-title">', '</h2>'); ?>
							</button>
						</h5>
					</div>

					<div id="<?php echo $post_slug;?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      					<div class="card-body">
						  	//custom field suite
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, quos sint dolores molestiae temporibus voluptate consequatur voluptatem eligendi, aliquid distinctio magnam ea tenetur quasi omnis! Aliquid repellendus eum dignissimos nam!</p>
						</div>
					</div>
				</div>
				

			<?php endwhile; ?>
		</div>
			

		<?php else : ?>

			
		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
