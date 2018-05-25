<?php 
  get_header(); 
  the_post();
?>
<section class = "community-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>ADVISORY BOARD</h1>
          <div class="row">
            <?php  
                    $args = array(
                        'post_type' => 'advisory',
                        'posts_per_page' => -1,
                        'order' => 'ASC',
                        'orderby' => 'title'
                    );
                    $query = new WP_Query($args);
                    if($query->have_posts()){
                      $counter = 1;
                      while($query->have_posts()){
                        $query->the_post();
                        $thumb_url = wp_get_attachment_image_src(get_post_thumbnail_id(), '', false);
            ?>
            <div class="col-md-3 col-xs-4 advisor-box"> <img src="<?php echo $thumb_url[0]; ?>" class ="advisor-img"> <p class="a-name"><?php the_title(); ?></p><p class="a-title"><?php echo get_field('position'); ?></p></div>
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