<?php get_header(); ?>
<!-- Hotels section -->
  <section class = "travel-section">
  	<?php  
	        $args = array(
	            'post_type' => 'hotels',
		        'paged' => $paged,
		        'posts_per_page' => 6,
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
    <!-- 1 Hotel -->
    <div class="travel">
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
            <div class="col-md-6 box-pad-travel">
              <h3 class="gold-name" style = "font-size:16px;"><?php echo get_field('university'); ?></h3>
              <p class="m-p"><?php echo get_field('street_address'); ?></p>
              <p class="m-p"><?php echo get_field('city_state'); ?></p>
              <p class="place-p"><?php echo get_field('contact'); ?></p>
              <?php if(get_field('link')!=''){ ?>
              <a href = "<?php echo get_field('link'); ?>" class ="btn btn-default btn-travel">Website</a>
              <?php } ?>
            </div>
          </div>
      </div>
    </div>
    <?php
        		}
        	}
        	wp_reset_query();
    ?>
    <!-- End Hotel -->
  </section>
  <!-- End Tradition section -->
<?php get_footer(); ?>