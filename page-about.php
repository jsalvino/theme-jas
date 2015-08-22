<?php
/*
  Template Name: About
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

<div class="main main-about">
  <div class="container">
    <div class="content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <div class="about-title">
          <h2><?php the_title(); ?></h2>
        </div>
        <div class="about-image">
          <img src="<?php bloginfo('template_directory'); ?>/images/John Salvino.jpg"alt="">
        </div> <!-- </div> -->
        <div class="about-text">
          <?php the_content(); ?>
        </div> <!-- about-text -->

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

    <?php //get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>