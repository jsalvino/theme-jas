<?php
/*
  Template Name: Portfolio
*/

add_action( 'wp_head', 'vr_set_featured_background', 99);
  function vr_set_featured_background() {
  $image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), full, false );
 if ($image_url[0]) {
   ?>
     <style>
     
       html,body {
       height:100%;
       margin:0!important;
       }
       body {
       /*.main-home .container {*/
       background: url(<?php echo $image_url[0]; ?>) #000 center top;
       background-size: contain;
       height: 100vh;
       }
     </style>
   <?php
 }  //end if statement
} //end vr_set_featured_background() function
//get_header();  ?>




<?php get_header();  ?>

<div class="main main-portfolio">
  <div class="container">

    <div class="content">
      <?php // Start the loop ?>
      <div class="portfolio-container">
        <div class="portfolio-item">
              <img src="<?php bloginfo('template_directory'); ?>/images/samuel-bay.png"alt="">
              <h4>PSD to HTML Reponsive Project</h4>
              <p>Build a fully responsive website based on a PSD design</p>
        </div> <!-- portfolio-item -->

        <div class="portfolio-item">
              <img src="<?php bloginfo('template_directory'); ?>/images/samuel-bay.png"alt="">
              <h4>API Project</h4>
              <p>Build a project based on the Flickr API</p>
        </div> <!-- portfolio-item -->

        <div class="portfolio-item">
              <img src="<?php bloginfo('template_directory'); ?>/images/samuel-bay.png"alt="">
              <h4>Wordpress Theme Project</h4>
              <p>Build a Wordpress site for a restaurant</p>
        </div> <!-- portfolio-item -->

              <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

                <h2><?php //the_title(); ?></h2>
                <!-- <div class="about-image">
                  <img src="<?php bloginfo('template_directory'); ?>/images/John Salvino.jpg"alt="">

                </div> <!-- </div> -->
                <!-- <div class="about-text">
                  <?php the_content(); ?>
                </div> --> <!-- about-text -->

              <?php endwhile; // end the loop?>


      
     </div> <!-- portfolio-container -->
    </div> <!-- /,content -->

    <?php //get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>