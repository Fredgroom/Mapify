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
				<img src="<?php echo get_template_directory_uri();?>/icons/search-icon.png" />
				<div class="accordion" id="accordionExample">
					<?php /* Start the Loop */ ?>
					<?php $counter = 0;?>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php $counter++; ?>
					<?php $post_slug = get_post_field( 'post_name', get_post() ); ?>
						<div class="card">
							<div class="card-header" id="headingOne">
								<h5 class="mb-0">
									<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#<?php echo $post_slug;?>" aria-expanded="true" aria-controls="collapseOne" data-parent="#accordion">
									<?php echo the_title('<h4 class="entry-title">', '</h4>'); ?>
									<img src="<?php echo get_template_directory_uri();?>/icons/grey-triangle.png" />
									</button>
								</h5>
							</div>

							<div id="<?php echo $post_slug;?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
								<div class="card-body">
								
								<div class="tab-container" >
									<ul class="nav nav-tabs">
										<?php $Q1 = CFS()->get( 'ac1-ques1' ); ?>
										<?php $Q2 = CFS()->get( 'ac1-ques2' ); ?>
										<?php $Q3 = CFS()->get( 'ac1-ques3' ); ?>
										<?php $Q4 = CFS()->get( 'ac1-ques4' ); ?>
										<?php $Q5 = CFS()->get( 'ac1-ques5' ); ?>
										<?php $Q6 = CFS()->get( 'ac1-ques6' ); ?>
										<?php $Q7 = CFS()->get( 'ac1-ques7' ); ?>
										
										<li class="active <?php if ($Q1 == '') { echo 'hidden';} ;?>"><a data-toggle="tab" href="#answer1<?php echo $counter; ?>"><?php echo $Q1?></a></li>

										<li class="<?php if ($Q2 == '') { echo 'hidden';} ;?>"><a data-toggle="tab" href="#answer2<?php echo $counter?>"><?php echo CFS()->get( 'ac1-ques2' ); ?></a></li>

										<li class="<?php if ($Q3 == '') { echo 'hidden';} ;?>"><a data-toggle="tab" href="#answer3<?php echo $counter?>"><?php echo CFS()->get( 'ac1-ques3' ); ?></a></li>

										<li class="<?php if ($Q4 == '') { echo 'hidden';} ;?>"><a data-toggle="tab" href="#answer4<?php echo $counter?>"><?php echo CFS()->get( 'ac1-ques4' ); ?></a></li>

										<li class="<?php if ($Q5 == '') { echo 'hidden';} ;?>"><a data-toggle="tab" href="#answer5<?php echo $counter?>"><?php echo CFS()->get( 'ac1-ques5' ); ?></a></li>

										<li class="<?php if ($Q6 == '') { echo 'hidden';} ;?>"><a data-toggle="tab" href="#answer6<?php echo $counter?>"><?php echo CFS()->get( 'ac1-ques6' ); ?></a></li>

										<li class="<?php if ($Q7 == '') { echo 'hidden';} ;?>"><a data-toggle="tab" href="#answer7<?php echo $counter?>"><?php echo CFS()->get( 'ac1-ques7' ); ?></a></li>

									</ul>

									<div class="tab-content">
											

										<div id="answer1<?php echo $counter?>" class="tab-pane fade in active">
										<p><?php echo CFS()->get( 'ac1-ans1' ); ?></p>
										</div>
										<div id="answer2<?php echo $counter?>" class="tab-pane fade">
										<p><?php echo CFS()->get( 'ac1-ans2' ); ?></p>
										</div>
										<div id="answer3<?php echo $counter?>" class="tab-pane fade">
										<p><?php echo CFS()->get( 'ac1-ans3' ); ?></p>
										</div>
										<div id="answer4<?php echo $counter?>" class="tab-pane fade">
										<p><?php echo CFS()->get( 'ac1-ans4' ); ?></p>
										</div>
										<div id="answer5<?php echo $counter?>" class="tab-pane fade">
										<p><?php echo CFS()->get( 'ac1-ans5' ); ?></p>
										</div>
										<div id="answer6<?php echo $counter?>" class="tab-pane fade">
										<p><?php echo CFS()->get( 'ac1-ans6' ); ?></p>
										</div>
										<div id="answer7<?php echo $counter?>" class="tab-pane fade">
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

		<h2>Get in touch!</h2>
		<h4>We love to help!</h4>
		

		</main><!-- #main -->
	</div><!-- #primary -->

<script>//$(document).click(function() { $("nav").hide(); }); $("#menu").click(function(e) { e.stopPropagation(); return false; });</script>

<?php get_footer(); ?>

<script>
// if (!$(this)).hasClass('in') {
// 	$(.in).removeClass('in');
// });

$(!'.in').click(function() {
        $('in').removeClass('in');       
});

$(document).click(function() {
    if ($!(this).hasClass("in")) {
        $("div").removeClass('in');
    } 
});

</script>