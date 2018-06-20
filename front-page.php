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

    <section class="how-it-works">

        <h1 class="how-it-works-title">How it works</h1>


    <div class="how-works-banner">
        <img class="read-icon" src="<?php echo get_template_directory_uri(); ?>/icons/read-icon.png"/>
        <img class="search-icon" src="<?php echo get_template_directory_uri(); ?>/icons/Search.png"/>
        <img class="sign-up-icon" src="<?php echo get_template_directory_uri(); ?>/icons/sign-up.png"/>
        <img class="insights-icon" src="<?php echo get_template_directory_uri(); ?>/icons/insights-icon.png"/>
   </div>


   <div class="icons-title">
        <h2 class="icon-title1">Read</h2>
        <h2 class="icon-title2">Search</h2>
        <h2 class="icon-title3">Sign Up</h2>
        <h2 class="icon-title3">Insights</h2>
   </div>

    <div class="icon-content">
         <p class="icon-content">Read and learn more about Mapify and how it can help you</p>
         <p class="icon-content">Search any area or community around the UK to get in depth analytics of that area</p>
         <p class="icon-content">Read and learn more about Mapify and how it can help you</p>
         <p class="icon-content">Read and learn more about Mapify and how it can help you</p>
    </div>





  </section>

      <?php get_footer(); ?>
