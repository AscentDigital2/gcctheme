<?php 
  get_header(); 
  the_post();
?>
<section class = "community-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 tradition-text">
          <h1><?php the_field('header'); ?></h1>
          <div class="lg-img" style="background-image: url(<?php echo get_field('collage_picture')['url']; ?>);"></div>
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </section>
<?php get_footer(); ?>