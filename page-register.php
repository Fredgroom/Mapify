<?php
/**
 * template name: page-register
 * The template for displaying all pages.
 *
 * @package mapify_theme
 */

get_header(); ?>

	<div id="primary" class="signUp-content-area">
		<main id="main" class="site-main" role="main">
            
			<?php while ( have_posts() ) : the_post(); ?>
           <section class="signUpBackground">
               <div class="signUpContainer signUpContainer1">
                <div class="headerSignUp">
                    
                         
                    <div class="signUpIcons">
                        <div class="circle redCircle circle1"></div>
                        <hr align="center" width="100%">
                        <div class="circle greyCircle circle2"></div>
                        <hr align="center" width="100%">
                        <div class="circle greyCircle circle3"></div>
                    </div>
                
                    <div class="signUpTitles">
                        <h1>Details</h1>
                        <h1 class="greyText">Verify</h1>
                        <h1 class="greyText">Complete</h1>
                    </div>
                </div> 
                <section class="signUp">
                <?php echo do_shortcode( '[cfp id="54" title="Sign Up" pwd="password"]' ); ?>
                </section>
                </div>
                

                <div class="signUpContainer signUpContainer2">
                <div class="headerSignUp">
                    
                         
                    <div class="signUpIcons">
                        <div class="circle redTick circle1"><img class="redTick" src="<?php echo get_stylesheet_directory_uri(); ?>/icons/redtick.png" alt=""></div>
                        <hr align="center" width="100%">
                        <div class="circle redCircle circle2"></div>
                        <hr align="center" width="100%">
                        <div class="circle greyCircle circle3"></div>
                    </div>
                
                    <div class="signUpTitles">
                        <h1>Details</h1>
                        <h1 class="greyText">Verify</h1>
                        <h1 class="greyText">Complete</h1>
                    </div>

                    <section class="email-sent">
                        <img class="mail" src="<?php echo get_stylesheet_directory_uri(); ?>/icons/emailicon.png" alt="">
                        <h2>Verification email sent!</h2>
                        <h3>Veryify your email to continue.</h3>
                    </section>

                    <section class="signUp">
                        <input type="submit" value="Done" class="wpcf7-form-control wpcf7-submit"></input>
                    </section>
                    </div> 
               
                </div>



                <div class="signUpContainer signUpContainer3">
                <div class="headerSignUp">
                    
                         
                    <div class="signUpIcons">
                        <div class="circle redTick circle1"><img class="redTick" src="<?php echo get_stylesheet_directory_uri(); ?>/icons/redtick.png" alt=""></div>
                        <hr align="center" width="100%">
                        <div class="circle redTick circle2"><img class="redTick" src="<?php echo get_stylesheet_directory_uri(); ?>/icons/redtick.png" alt=""></div>
                        <hr align="center" width="100%">
                        <div class="circle redCircle circle3"></div>
                    </div>
                
                    <div class="signUpTitles">
                        <h1>Details</h1>
                        <h1 class="greyText">Verify</h1>
                        <h1 class="greyText">Complete</h1>
                    </div>
                </div> 
                <section class="allDone">
                    <img class="largetick" src="<?php echo get_stylesheet_directory_uri(); ?>/icons/largeredtick.png" alt="">
                    <h2>All Done!</h2>
                </section>
                <section class="signUp">
                    <input type="submit" value="Done" class="wpcf7-form-control wpcf7-submit"></input>
                </section>
                </div>
                
            </section>
			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
 