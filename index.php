<?php get_header();?>
<!-- Content -->


<?php
if (have_posts()) {

	while (have_posts()) {
		the_post();
		?>

      <div class="flexslider project-img">
         <?php the_post_thumbnail(); ?>
      </div>

  <h2 class="post-title"><?php the_title();?></h2>

  <p>by <a href="#"></a> <small>Web Designer</small></p>

  <p><span class="icon ion-ios7-clock"></span> Posted on August 28, 2013 at 10:00 PM</p>

  <p><?php the_content();?></p>
  <a class="btn btn-primary" href="blog-single.html">Conntinuar lendo</a>


  <?php
}
}
?>
<!-- Content -->

<?php get_footer();?>