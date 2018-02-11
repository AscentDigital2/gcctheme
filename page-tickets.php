<?php get_header(); ?>
<section class="black-metal-brushed divider-2">
    <div class="container">
        <div class="ticket-menu centered-nav">
        	<?php  
		      $menuLocations = get_nav_menu_locations();
		      $menuID = $menuLocations['tickets'];
		      $menus = wp_get_nav_menu_items($menuID);
		      foreach ($menus as $menu) {
		    ?>
          		<a href="<?php echo $menu->url; ?>"><?php echo $menu->title; ?></a>
          	<?php } ?>
        </div>
    </div>
  </section>
  <div class="gold-bar"></div>
  <!-- Ticket Menu -->

  <!-- Tradition section -->
  <section class = "tailgate-section">
    <h1 class="tickets-title">GCC Ticket Guide</h1>


  
    <div class="reference-guide">
      <div class="main-ticket-wrapper">
          
          <div class="overlay">
            <a href="<?php echo get_option('gcctheme_ticket', ''); ?>" class="button-ticket-guide">
              Buy Tickets Click Here Now!
            </a>
            <div class="reference-guide-content">
              <img src="<?php echo get_field('reference_guide')['url']; ?>" class="img-responsive">
            </div>
            <a href="<?php echo get_option('gcctheme_ticket', ''); ?>" class="button-ticket-guide">
              Buy Tickets Click Here Now!
            </a>
          </div>

          <div class="underlay">
            <div class="gold-bar"></div>
            <div class="metal-brushed gray-bar"></div>
            <div class="gold-bar"></div> 0
          </div>

          <div class="underlay-2">
            <div class="u2-box">
              <img src="<?php echo get_template_directory_uri(); ?>/img/toplogo316x253.png" alt="">
            </div>
            <div class="u2-box">
              <img src="<?php echo get_template_directory_uri(); ?>/img/toplogo316x253.png" alt="">
            </div>
          </div>


      </div>
    </div>


    <h1 class="tickets-title">Tailgating</h1>
    <?php  
	    $args = array(
	        'post_type' => 'tailgates',
	        'order' => 'DESC',
	        'orderby' => 'post_date'
	    );
	    $query = new WP_Query($args);
	    if($query->have_posts()){
	    	$counter = 1;
	    	while($query->have_posts()){
	    		$query->the_post();
	 ?>
        <!-- Gold bar with ball -->
        <div class="gold-bar to-top">
          <img src="<?php echo get_template_directory_uri(); ?>/img/ball-u437.png" alt="" class="small-logo">
        </div>
        <div class="row">
          <div class="col-md-12 text-center box-pad">
            <h2 class = "map-h2 text-center"><?php the_title(); ?></h2>
            <h2 class = "map-h3 text-center"><?php echo get_the_content(); ?></h2>
            <h2 class = "map-h3 text-center"><?php the_field('pricing'); ?></h2>
            <p class="tailgate-p"><?php the_field('notes'); ?></p>
          </div>
        </div>
        <?php
            }
          }
          wp_reset_query();
        ?>
        <!-- Gold bar with ball -->
        <div class="gold-bar to-top">
          <img src="./img/ball-u437.png" alt="" class="small-logo">
        </div>
        <div class="container">
        <h2 class = "map-h2 text-center">Ladd-Peebles Stadium</h2>
        <h2 class = "map-h3 text-center">1621 Virginia St,</h2>
        <h2 class = "map-h3 text-center">Mobile, AL 36604</h2>
	      <div class="row">
	        <div class="col-md-10 col-md-offset-1 map-box">
	          <iframe class="actAsDiv" style="width:100%;height:100%;" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;q=Ladd-Peebles%20Stadium%201621%20Virginia%20St%2C%20Mobile%2C%20AL%2036604&amp;aq=0&amp;ie=UTF8&amp;t=m&amp;z=12&amp;iwloc=A&amp;output=embed"></iframe>
	        </div>
	      </div>
        </div>
  </section>
<?php get_footer(); ?>