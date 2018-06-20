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




  <div class="how-to-icons">
    <div class="row multi-slider">
      <div class="col-md-12 col-lg-10 col-lg-offset-1">
        <div class="carousel carousel-showmanymoveone slide multi-item-carousel" id="theCarousel" data-interval="false">
          <div class="carousel-inner">
            <div class="item active">
              <div class="col-xs-12 col-sm-6 col-md-3"><a href="#1"><img src="<?php echo get_template_directory_uri(); ?>/icons/read-icon.png" class="img-responsive"></a><span class="icon-title">Read</span><p class="paragraph-text">Read and learn more about Mapify and how it can help you.</p></div>
            </div>
            <div class="item">
              <div class="col-xs-12 col-sm-6 col-md-3"><a href="#1"><img src="<?php echo get_template_directory_uri(); ?>/icons/Search.png" class="img-responsive"></a><span class="icon-title">Search</span><p class="paragraph-text">fasiofdsfnsjfdsf</p></div>
            </div>
            <div class="item">
              <div class="col-xs-12 col-sm-6 col-md-3"><a href="#1"><img src="<?php echo get_template_directory_uri(); ?>/icons/sign-up.png" class="img-responsive"></a><span class="icon-title">Sign up</span><p class="paragraph-text">fasiofdsfnsjfdsf</p></div>
            </div>
            <div class="item">
              <div class="col-xs-12 col-sm-6 col-md-3"><a href="#1"><img src="<?php echo get_template_directory_uri(); ?>/icons/insights-icon.png" class="img-responsive"></a><span class="icon-title">Insights</span><p class="paragraph-text">fasiofdsfnsjfdsf</p></div>
            </div>
          </div>
          <a class="left carousel-control" href="#theCarousel" data-slide="prev"><i class="	fa fa-angle-left"></i></a>
          <a class="right carousel-control" href="#theCarousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
        </div>
      </div>
    </div>
  </div>


  </section>


      <section class="video-iframe">

  <iframe width="100%" height="720" src="https://www.youtube.com/embed/nfQHF87vY0s" frameborder="0" allowfullscreen></iframe>


      </section>


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
