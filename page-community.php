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
        <div class="col-md-12 tradition-text">
          <h1>VOLUNTEERS</h1>
          <div class="row"><div class="col-md-5 col-md-offset-4 "><div class="m-img" style="background-image: url(<?php echo get_field('volunteers_image')['url']; ?>);"></div></div></div>
          <?php the_field('volunteers_description'); ?>
        </div>
        <div class="col-md-12">
          <h1>ADVISORY BOARD</h1>
          <div class="row">
            <?php  
                    $args = array(
                        'post_type' => 'advisory',
                        'order' => 'DESC',
                        'orderby' => 'post_date'
                    );
                    $query = new WP_Query($args);
                    if($query->have_posts()){
                      $counter = 1;
                      while($query->have_posts()){
                        $query->the_post();
                        $thumb_url = wp_get_attachment_image_src(get_post_thumbnail_id(), '', false);
            ?>
            <div class="col-md-3 col-xs-4 advisor-box"> <img src="<?php echo $thumb_url[0]; ?>" class ="advisor-img"> <p class="a-name"><?php the_title(); ?></p><p class="a-title"><?php get_field('position'); ?></p></div>
          <?php
                  }
                }
                wp_reset_query();
          ?>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php get_footer(); ?>