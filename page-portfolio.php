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

<div class="main main-portfolio animated fadeIn">
  <div class="container">
    <div class="portfolio-title">
      <h2><?php the_title(); ?></h2>
    </div> <!-- portfolio-title -->
    <div class="portfolio-items">     
    <!-- <div class="content"> -->
      <?php // Start the loop ?>
      <!-- Start of custom loop -->
         <?php
           // array to store our arguments for WP_Query
           // We use the key => value syntax to store these
           $portfolioArgs = array(
             'post_type' => 'portfolio-item',
             'posts_per_page' => 3,
             'orderby' => 'title',
             'order' => 'ASC'
             );
           // create a new WP_Query and pass in the arguments from above
           // the 'new' keyword is used here to create a new object or query
           // we store it in the variable portfolioQuery
           $portfolioQuery = new WP_Query($portfolioArgs);
           // we go through and start our loop
           // first we check if there are posts
           if($portfolioQuery->have_posts()) {
             //then while we have posts we want to keep looping
               while($portfolioQuery->have_posts()) {
                 //for each time we have a post we want to setup the post
                 //this allows us to use stuff like the_title() for that post
                 $portfolioQuery->the_post();
           ?>
        <div class="portfolio-item">
             <h3><?php the_title(); ?></h3>
             <p><?php the_field('client_name'); ?></p>
            <?php
            $image = get_field('image');
            ?>
            <img src="<?php echo $image['sizes']['large'] ?>" alt="">
             <p><?php the_content(); ?></p>

             <a href="<?php echo the_field('project_url'); ?>" target="_blank">View Live Site</a>
             <p><?php //the_field('project_url'); ?></p>
        </div> <!-- portfolio-item -->
               <?php
                   }
               }
               //add this to the end of your custom query
               //so that the original loop can reset itself
               wp_reset_postdata();
             ?>

           <!-- End of custom loop -->
    <!-- </div> --> <!-- /,content -->

    <?php //get_sidebar(); ?>
    </div> <!-- portfolio-items -->
    <div class="footer-social footer-social-bottom">
      <ul>
        <li><a href="https://twitter.com/jsalvino" target="_blank"><i class="fa fa-twitter"></i></a></li>
        <li><a href="https://www.linkedin.com/pub/john-salvino/0/3b3/6b9" target="_blank"><i class="fa fa-linkedin" target="_blank"></i></a></li>
        <li><a href="https://github.com/jsalvino" target="_blank"><i class="fa fa-github" target="_blank"></i></a></li>
        <li><a href="https://www.flickr.com/photos/jsalvino/" target="_blank"><i class="fa fa-flickr"></i></a></li>
        <li><a href="https://www.instagram.com/jsalvino/" target="_blank"><i class="fa fa-instagram"></i></a></li>
      </ul>
    </div> <!-- footer-social-bottom-->
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>