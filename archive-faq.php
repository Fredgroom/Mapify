<?php
/**
 * template name: archive-faq
 * The template for displaying faq pages.
 *
 * @package mapify_theme
 */

get_header(); ?>

	<div id="primary" class="faq-content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1>FAQs</h1>
			</header><!-- .page-header -->

			<section class="questionCategories">
				<h2>Question Categories</h2>
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

								<div class="tab-container">
									<ul class="nav nav-tabs">
										<li class="active"><a data-toggle="tab" href="#answer1"><?php echo CFS()->get( 'ac1-ques1' ); ?></a></li>
										<li><a data-toggle="tab" href="#answer2"><?php echo CFS()->get( 'ac1-ques2' ); ?></a></li>
										<li><a data-toggle="tab" href="#answer3"><?php echo CFS()->get( 'ac1-ques3' ); ?></a></li>
										<li><a data-toggle="tab" href="#answer4"><?php echo CFS()->get( 'ac1-ques4' ); ?></a></li>
										<li><a data-toggle="tab" href="#answer5"><?php echo CFS()->get( 'ac1-ques5' ); ?></a></li>
										<li><a data-toggle="tab" href="#answer6"><?php echo CFS()->get( 'ac1-ques6' ); ?></a></li>
										<li><a data-toggle="tab" href="#answer7"><?php echo CFS()->get( 'ac1-ques7' ); ?></a></li>
										

									</ul>

									<div class="tab-content">
										<div id="answer1" class="tab-pane fade in active">
										<p><?php echo CFS()->get( 'ac1-ans1' ); ?></p>
										</div>
										<div id="answer2" class="tab-pane fade">
										<p><?php echo CFS()->get( 'ac1-ans2' ); ?></p>
										</div>
										<div id="answer3" class="tab-pane fade">
										<p><?php echo CFS()->get( 'ac1-ans3' ); ?></p>
										</div>
										<div id="answer4" class="tab-pane fade">
										<p><?php echo CFS()->get( 'ac1-ans4' ); ?></p>
										</div>
										<div id="answer5" class="tab-pane fade">
										<p><?php echo CFS()->get( 'ac1-ans5' ); ?></p>
										</div>
										<div id="answer6" class="tab-pane fade">
										<p><?php echo CFS()->get( 'ac1-ans6' ); ?></p>
										</div>
										<div id="answer7" class="tab-pane fade">
										<p><?php echo CFS()->get( 'ac1-ans7' ); ?></p>
										</div>
									</div>
									</div>
								</div>
							</div>
						</div>
						

					<?php endwhile; ?>
				</div>
			</section>

		<?php else : ?>

			
		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<script>$(document).click(function() { $("nav").hide(); }); $("#menu").click(function(e) { e.stopPropagation(); return false; });</script>

<?php get_footer(); ?>

