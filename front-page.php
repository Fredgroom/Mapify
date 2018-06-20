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


    <!-- <div class="how-works-banner">
        <img class="read-icon" src="<?php // echo get_template_directory_uri(); ?>/icons/read-icon.png"/>
        <img class="search-icon" src="<?php // echo get_template_directory_uri(); ?>/icons/Search.png"/>
        <img class="sign-up-icon" src="<?php // echo get_template_directory_uri(); ?>/icons/sign-up.png"/>
        <img class="insights-icon" src="<?php // echo get_template_directory_uri(); ?>/icons/insights-icon.png"/>
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
    </div> -->



    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active">
          <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/icons/read-icon.png" alt="First slide">
        </div>
        <div class="item">
          <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/icons/Search.png" alt="Second slide">
        </div>
        <div class="item">
          <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/icons/sign-up.png" alt="Third slide">
        </div>
        <div class="item">
          <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/icons/insights-icon.png" alt="Fourth slide">
        </div>
      </div>

      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>



  </section>

  <div class="container">
    <div class="row multi-slider">
      <div class="col-md-12 col-lg-10 col-lg-offset-1">
        <div class="carousel carousel-showmanymoveone slide multi-item-carousel" id="theCarousel" data-interval="false">
          <div class="carousel-inner">
            <div class="item active">
              <div class="col-xs-12 col-sm-6 col-md-3"><a href="#1"><img src="http://placehold.it/300/f44336/000000" class="img-responsive"></a></div>
            </div>
            <div class="item">
              <div class="col-xs-12 col-sm-6 col-md-3"><a href="#1"><img src="http://placehold.it/300/e91e63/000000" class="img-responsive"></a></div>
            </div>
            <div class="item">
              <div class="col-xs-12 col-sm-6 col-md-3"><a href="#1"><img src="http://placehold.it/300/9c27b0/000000" class="img-responsive"></a></div>
            </div>
            <div class="item">
              <div class="col-xs-12 col-sm-6 col-md-3"><a href="#1"><img src="http://placehold.it/300/673ab7/000000" class="img-responsive"></a></div>
            </div>
          </div>
          <a class="left carousel-control" href="#theCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
          <a class="right carousel-control" href="#theCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
        </div>
      </div>
    </div>
  </div>

  <script>
      (function(){
		  jQuery('#theCarousel').carousel();

			}());

			(function(){
			  jQuery('.carousel-showmanymoveone .item').each(function(){
			    var itemToClone = jQuery(this);

			    for (var i=1;i<4;i++) {
			      itemToClone = itemToClone.next();

			      // wrap around if at end of item collection
			      if (!itemToClone.length) {
			        itemToClone = jQuery(this).siblings(':first');
			      }

			      // grab item, clone, add marker class, add to collection
			      itemToClone.children(':first-child').clone()
			        .addClass("cloneditem-"+(i))
			        .appendTo(jQuery(this));
			    }
			  });
  		}());

      (function() {
      	jQuery('.carousel-showmanymoveone').carousel({
          pause: true,
            interval: false
      	});
      }());
    </script>
  <?php get_footer(); ?>
