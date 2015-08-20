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
    <img src="<?php echo $image['sizes']['medium'] ?>" alt="">

   



                     <p><?php the_content(); ?></p>
                     <ul>
                       <?php 
                       //to loop through a repeater field
                       //we need to use a while loop and has sub_field() function
                       //this will be true for as long as we have an item in our
                       //repeater
                           while(has_sub_field('technologies')) {
                       ?>
                         <?php
                         //we then just use the sub_field() function
                         //to get the sub field
                         ?>
                           <li><?php the_sub_field('technology') ?></li>
                       <?php
                         }
                        ?>
                     </ul>
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

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>