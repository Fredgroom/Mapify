<?php
/**
 * The main template file.
 *
 * @package QOD_Starter_Theme
 */ ?>

<?php get_header(); ?>

<!-- <?php // get_template_part( 'template-parts/content' ); ?> -->


      <section class="home-hero" style="background: linear-gradient(to bottom,rgba(0, 0, 0, 0.4) 0%,rgba(0, 0, 0, 0.4) 100%), #969696 url('<?php echo get_template_directory_uri(); ?>/images/main-bg.jpg'); background-size: cover, cover;">

      <h1 class="connecting">CONNECTING COMMUNITIES THROUGH</h1>
      <h2 class="communities">HUMAN-CENTERED DATA</h2>

      <h3 class="empower">We empower relationships between people and workplaces</h3>


          <div class="group-div">
      <img class="play-copy" src="<?php echo get_template_directory_uri(); ?>/icons/play.png"/>
          </div>

          <div class="mapify-container">
             <p class="watch-mapify">Watch how Mapify works</p>
          </div>

   <div class="phonox-info">

      <img class="phonox-image" src="<?php echo get_template_directory_uri(); ?>/icons/Phonos.png"/>

          <p class="phonox-quote">"The data sharing Mapify offers is incredibly</br>useful when createing and marketing events."</br><span class="phonox-brixton">Phonox, Brixton</span></p>
   </div>


      </section>

      <?php get_footer(); ?>
