<?php get_header(); ?>
<!-- Hotels section -->
  <section class = "sponsors-section">

      <!--  -->
      <div class="gold-bar to-top">
      </div>
      <section class="purple-hive">
        <div class="container">
              <h2 class = "sp-title"><?php the_title(); ?></h2>
        </div>
      </section>
      <div class="gold-bar to-top">
      </div>
      <!--  -->

      <div class="container">
        <div class="panel panel-default panel-sponsors">
            <div class="panel-heading text-center">
                Presenting
            </div>
            <div class="panel-body">
              <div class="row text-center">
                <?php  
                  $args = array(
                      'post_type' => 'sponsors',
                      'sponsor_type' => 'presenting',
                      'posts_per_page' => -1,
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
                <div class="col-md-2 col-xs-6 col-sm-6 sponsor-box"><a href="<?php the_field('url'); ?>"><img src="<?php echo $thumb_url[0]; ?>" class ="sponsor-img" alt=""></a></div>
                <?php
                    $counter++;
                    }
                  }
                  wp_reset_query();
                ?>
              </div>
            </div>
        </div>

        <div class="panel panel-default panel-sponsors">
            <div class="panel-heading text-center">
                Official
            </div>
            <div class="panel-body">
              <div class="row text-center">
                <?php  
                  $args = array(
                      'post_type' => 'sponsors',
                      'sponsor_type' => 'official',
                      'posts_per_page' => -1,
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
                <div class="col-md-2 col-xs-6 col-sm-6 sponsor-box"><a href="<?php the_field('url'); ?>"><img src="<?php echo $thumb_url[0]; ?>" class ="sponsor-img" alt=""></a></div>
                <?php
                    $counter++;
                    }
                  }
                  wp_reset_query();
                ?>
              </div>
            </div>
        </div>

        <div class="panel panel-default panel-sponsors">
            <div class="panel-heading text-center">
                Supporting
            </div>
            <div class="panel-body">
              <div class="row text-center">
                <?php  
                  $args = array(
                      'post_type' => 'sponsors',
                      'sponsor_type' => 'supporting',
                      'posts_per_page' => -1,
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
                <div class="col-md-2 col-xs-6 col-sm-6 sponsor-box"><a href="<?php the_field('url'); ?>"><img src="<?php echo $thumb_url[0]; ?>" class ="sponsor-img" alt=""></a></div>
                <?php
                    $counter++;
                    }
                  }
                  wp_reset_query();
                ?>
              </div>
            </div>
        </div>
        <div class="panel panel-default panel-sponsors">
            <div class="panel-heading text-center">
                HOST
            </div>
            <div class="panel-body">
              <div class="row text-center">
                <?php  
                  $args = array(
                      'post_type' => 'sponsors',
                      'sponsor_type' => 'host',
                      'posts_per_page' => -1,
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
                <div class="col-md-2 col-xs-6 col-sm-6 sponsor-box"><a href="<?php the_field('url'); ?>"><img src="<?php echo $thumb_url[0]; ?>" class ="sponsor-img" alt=""></a></div>
                <?php
                    $counter++;
                    }
                  }
                  wp_reset_query();
                ?>
              </div>
            </div>
        </div>
      </div>

  </section>
  <!-- End Tradition section -->
<?php get_footer(); ?>