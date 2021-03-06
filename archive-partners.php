<?php
/*
 * Template Name: archive-Partners
 * The template for displaying project pages.
 *
 * @package mapify_theme
 */

 get_header(); ?>
 <div class="partners-container">
 <h1>Community Partners</h1>
<p class="greyText">Hear how we empower our communities</p>

<?php
if ( get_query_var('paged') ) $paged = get_query_var('paged');
if ( get_query_var('page') ) $paged = get_query_var('page');

$query = new WP_Query( array( 'post_type' => 'mapify_partners', 'paged' => $paged ) ); ?>
<div class="article-containers">
<?php if ( $query->have_posts() ) : ?>
	<?php while ( $query->have_posts() ) : $query->the_post(); ?>
		<div class="partner-article">
			<h2 class="title"><?php the_title(); ?><hr class="hyphen"></h2>
					<?php $LN1 = CFS()->get( 'link_name' ); ?>	
					<?php $LU1 = CFS()->get( 'link_url' ); ?>
					<?php $VU1 = CFS()->get( 'video_url' ); ?>

			<p class="greyText"><?php the_content(); ?></p>
			<div class="row"><a href="<?php echo $LU1 ?>"><?php echo $LN1; ?>"</a><img src="<?php echo get_template_directory_uri();?>/icons/rightRedArrow.png?>" alt=""></div>
			<iframe class="img-fluid" height="300" src="<?php echo $VU1?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

		</div>
	<?php endwhile; wp_reset_postdata(); ?>


	<?php else : ?>


	<?php endif; ?>
	</div>
</div>
<?php get_footer() ?>


