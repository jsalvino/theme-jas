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
       @media all and (max-width: 940px) {
        body {
          height: auto;
        }
      }
     </style>
   <?php
 }  //end if statement
} //end vr_set_featured_background() function
//get_header();  ?>

<?php get_header();  ?>

<div class="main main-about animated fadeIn">
  <div class="container">
    <div class="content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <div class="about-title">
          <h2><?php the_title(); ?></h2>
        </div>
        <div class="about-image">
          <img src="<?php bloginfo('template_directory'); ?>/images/John Salvino.jpg" alt="">
        </div> <!-- </div> -->
        <div class="about-text">
          <?php the_content(); ?>
          <!-- <img src="<?php bloginfo('template_directory'); ?>/images/html5.svg" alt="">
          <img src="<?php bloginfo('template_directory'); ?>/images/css3.svg" alt="">
          <img src="<?php bloginfo('template_directory'); ?>/images/js_badge.svg" alt="">
          <img src="<?php bloginfo('template_directory'); ?>/images/jquery_logo.svg" alt="">
          <img src="<?php bloginfo('template_directory'); ?>/images/wordpress.svg" alt="">
          <img src="<?php bloginfo('template_directory'); ?>/images/github.svg" alt=""> -->
        </div> <!-- about-text -->


        <div class="footer-social footer-social-bottom">
          <ul>
            <li><a href="https://twitter.com/jsalvino" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://www.linkedin.com/pub/john-salvino/0/3b3/6b9" target="_blank"><i class="fa fa-linkedin" target="_blank"></i></a></li>
            <li><a href="https://github.com/jsalvino" target="_blank"><i class="fa fa-github" target="_blank"></i></a></li>
            <li><a href="https://www.flickr.com/photos/jsalvino/" target="_blank"><i class="fa fa-flickr"></i></a></li>
            <li><a href="https://www.instagram.com/jsalvino/" target="_blank"><i class="fa fa-instagram"></i></a></li>
          </ul>
        </div> <!-- footer-social-bottom-->
      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

    <?php //get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>