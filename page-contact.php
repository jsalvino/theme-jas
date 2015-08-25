<?php
/*
  Template Name: Contact
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

<div class="main main-contact animated fadeIn">
  <div class="container">
    <!-- <div class="content"> -->
      <div class="contact-title">
        <h2><?php the_title(); ?></h2>
      </div> <!-- contact-title --> 
      <div class="contact-form">
        <?php // Start the loop ?>
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      </div> <!-- contact-form -->
      <div class="contact-text">
        <p><?php the_field('contact_tagline'); ?></p>
        <p><?php the_field('contact_summary'); ?></p>
        <p>Fill out the form or email me at <a href="mailto:john@johnsalvino.com"><span class="email">john@johnsalvino.com</span></a></p>
      </div> <!-- contact-text -->
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
    <!-- </div> /,content -->

    <?php //get_sidebar(); ?>

      



  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>