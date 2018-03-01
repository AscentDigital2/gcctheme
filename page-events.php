<?php get_header(); ?>

  <!-- Tradition section -->
  <section class = "events-section">
  	<?php  
	        $args = array(
	            'post_type' => 'events',
		        'paged' => $paged,
		        'posts_per_page' => 12,
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
    <!-- 1 Event -->
    <div class="event">
      <!-- Gold bar with ball -->
      <div class="gold-bar to-top">
      </div>

      <section class="purple-hive">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-6">
              <h2 class = "b-title"><?php the_title(); ?></h2>
            </div>
          </div>
        </div>
      </section>

      <!-- Gold bar with ball -->
      <div class="gold-bar to-top">
      </div>

      <div class="container">
          <div class="row">
            <div class="col-md-6">
              <img class = "m-img" src ="<?php echo $thumb_url[0]; ?>">
            </div>
            <div class="col-md-6 box-pad-events" style ="color:#FFF;">
              <h3 class="m-h3">Time <?php echo get_field('time'); ?></h3>
              <p class="m-p"><?php echo date('F jS', strtotime(get_field('date'))); ?></p>
              <p class="place-p"><?php echo get_field('place'); ?></p>
              <?php the_content(); ?>
              <a href = "<?php echo get_field('link'); ?>" class ="btn btn-default btn-gold">Event Link</a>
            </div>
          </div>
      </div>
    </div>
    <!-- End Event -->
	<?php
        		}
        	}
        	wp_reset_query();
    ?>

    <?php get_template_part('pagination'); ?>
  </section>
  <!-- End Tradition section -->
<?php get_footer(); ?>