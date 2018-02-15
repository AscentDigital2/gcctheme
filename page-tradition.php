<?php 
	get_header(); 
	the_post();
?>
<section class = "tradition-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 tradition-text">
          <h1>ABOUT</h1>
          <?php the_content(); ?>
        </div>
        <div class="col-md-6">
          <div class="gold-bar"></div>
          <div class="tradition-box" style = "background-color:<?php the_field('school_1_name_background_color'); ?>;"><h1><?php the_field('school_1_name'); ?></h1></div>
          <div class="gold-bar"></div>
          <div class="fw">
          <img src="<?php echo get_field('school_1_logo')['url']; ?>" class ="tradition-img">
          </div>
          <div class="tradition-text">
          	<?php the_field('school_1_description'); ?>
          </div>
        </div>
        <div class="col-md-6">
          <div class="gold-bar"></div>
          <div class="tradition-box" style = "background-color:<?php the_field('school_2_name_background_color'); ?>;"><h1><?php the_field('school_2_name'); ?></h1></div>
          <div class="gold-bar"></div>
          <div class="fw">
          <img src="<?php echo get_field('school_2_logo')['url']; ?>" class ="tradition-img">
          </div>
          <div class="tradition-text">
          	<?php the_field('school_2_description'); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php get_footer(); ?>