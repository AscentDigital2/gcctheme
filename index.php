<?php 
	get_header();
	the_post();
?>

  <!-- Divider 1 -->
  <section class="purple-hive divider-1">
    <h1 class ="e-month e-year"><?php echo get_the_content(); ?></h1>
  </section>
  
  <!-- Gold bar with ball -->
  <div class="gold-bar to-top">
    <img src="<?php echo get_template_directory_uri(); ?>/img/ball-u437.png" alt="" class="small-logo">
  </div>

  <!-- Divider 2 -->
  <section class="black-metal-brushed divider-2">
    <p><?php the_field('location'); ?></p>
  </section>
  <div class="gold-bar"></div>

  <!-- Get Tickets -->
  <section class="get-tickets">
     <div class="backdrop text-center">
       <p>GET YOUR TICKETS NOW</p>
       <a href="<?php echo get_option('gcctheme_ticket', ''); ?>"><span class="click-here">Click Here</span></a>
     </div>
  </section>

  <!-- Silver Bar with small logo -->
  <div class="silver-bar to-top">
    <img src="<?php echo get_template_directory_uri(); ?>/img/toplogo316x253.png" alt="" class="small-logo">
  </div>


  <!-- Sponsors -->
  <section class="sponsors black-striped">
    <h1 class="opaque">SPONSORS </h1>
    <div class="container">
      <div class="row">
      	<?php  
	        $args = array(
	            'post_type' => 'sponsors',
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
        		}
        	}
        	wp_reset_query();
        ?>
      </div>
    </div>
  </section>

<div class="gold-bar"></div>
  
<!-- Newsletter -->
  <section class="purple-hive newsletter">
      <div class="social-container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="opaque">GET SOCIAL </h1>
        </div>  
        <div class="col-md-4 social-box">
          <div class="panel panel-default panel-social">
              <div class="panel-heading">Facebook</div>
              <div class="panel-body">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Name of Widgetized Area") ) : ?>
                <?php endif;?>
              </div>
          </div>
        </div>
        <div class="col-md-4 social-box">
          <div class="panel panel-default panel-social">
              <div class="panel-heading">Twitter</div>
              <div class="panel-body"><?php echo do_shortcode( '[TWTR]' ); ?></div>
          </div>
        </div>
        <div class="col-md-4 social-box">
          <div class="panel panel-default panel-social">
              <div class="panel-heading">Instagram</div>
              <div class="panel-body">&nbsp;</div>
          </div>
        </div>
      </div>
      </div>
  </section>

  <div class="gold-bar to-top">
    <img src="<?php echo get_template_directory_uri(); ?>/img/ball-u437.png" alt="" class="small-logo">
  </div>

  <!-- Divider 2 -->
  <section class="black-metal-brushed divider-2">
    <p>Challenge of the Day</p>
  </section>
  <div class="gold-bar"></div>

  <!-- Videos-challenge -->
  <section class="video-challenge">
     <div class="backdrop text-center">
        <div class="video-box">
                <iframe class="actAsDiv" style="width:100%;height:100%;" src="<?php the_field('challenge_of_the_day'); ?>" frameborder="0" allowfullscreen=""></iframe>
        </div>      
     </div>
  </section>

  <div class="gold-bar"></div>
 <!-- Divider 2 -->
  <section class="black-metal-brushed divider-2">
    <h4 class ="vc-text">VISIT OUR YOUTUBE CHANNEL TO WATCH MORE OF OUR VIDEOS&nbsp;</h4><Br><br>
    <a href="<?php echo get_option('gcctheme_youtube', ''); ?>"><span class="ch-text">Click Here</span></a>
  </section>
  <div class="gold-bar"></div>
<?php get_footer(); ?>