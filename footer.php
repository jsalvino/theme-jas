<footer>
  <div class="container">
  	<div class="footer-logo">
  		<h3><?php bloginfo( 'name' ); ?></h3>
  		<h4><?php bloginfo( 'description' ); ?></h4>
  	</div> <!-- footer-logo -->
  	<div class="footer-nav">
	    <?php wp_nav_menu( array(
	      'container' => false,
	      'theme_locations' => 'primary'
	    )); ?>
    </div> <!-- footer-nav -->
    <div class="footer-social">
	    <ul>
			<li><a href="https://twitter.com/jsalvino" target="_blank"><i class="fa fa-twitter"></i></a></li>
			<li><a href="https://ca.linkedin.com/in/salvinojohn" target="_blank"><i class="fa fa-linkedin" target="_blank"></i></a></li>
			<li><a href="https://github.com/jsalvino" target="_blank"><i class="fa fa-github" target="_blank"></i></a></li>
			<li><a href="https://www.flickr.com/photos/jsalvino/" target="_blank"><i class="fa fa-flickr"></i></a></li>
			<li><a href="https://www.instagram.com/jsalvino/" target="_blank"><i class="fa fa-instagram"></i></a></li>
		</ul>
  	</div> <!-- footer-social -->
  </div>
</footer>

<script>
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-65960146-1"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>