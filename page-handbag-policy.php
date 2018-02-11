<?php get_header(); ?>
<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
<section class = "community-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Handbag Policy</h1>
          <div class="row"><div class="col-md-10 col-md-offset-1 "><img src="<?php echo $image[0]; ?>" style ='width:100%;height:auto;' ></div></div>
          <?php
          // TO SHOW THE PAGE CONTENTS
          while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
              <div style = "color:#FFF;font-size:16px;padding-top:40px;text-align:center;padding-bottom:80px;">
                  <?php the_content(); ?> <!-- Page Content -->
              </div><!-- .entry-content-page -->

          <?php
          endwhile; //resetting the page loop
          wp_reset_query(); //resetting the page query
          ?>
        </div>
      </div>
    </div>
  </section>
<?php get_footer(); ?>