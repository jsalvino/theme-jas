<?php get_header(); ?>

<div class="main">
  <div class="container">

    <div class="content">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
       <h2><?php the_title(); ?></h2>
       <?php the_content(); ?>
       <h3>Client: <?php the_field('client_name'); ?></h3>
       <ul>
         <?php
            while(has_sub_fields('technologies')) {
          ?>
            <li><?php the_sub_field('technology'); ?></li>
          <?php
            } //end technologies while loop
          ?>
       </ul>
       <div class="portfolio-items">
          <?php 
            while(has_sub_fields('images')) {
          ?>
          <div class="portfolio-item">
              <?php
              $image = get_sub_field('image');
              ?>
              <img src="<?php echo $image['sizes']['medium'] ?>" alt="">
              <p><?php the_sub_field('caption'); ?></p>
          </div> <!-- portfolio-items -->
          <?php  
            } //end images while loop
           ?>
       </div> <!-- portfolio-items -->
       <!-- Custom Taxonomy-->
       <p><?php the_terms($post->ID, 'technology', 'Tech I used: '); ?></p>
       <p><?php the_terms($post->ID, 'commercial', 'I was in this commercial: ', ', '); ?></p>
      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.content -->

    <?php //get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>