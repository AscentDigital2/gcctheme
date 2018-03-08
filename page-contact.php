<?php get_header(); ?>
<section class = "contact-section">

  <!-- Gold bar with ball -->
  <div class="gold-bar to-top">
  </div>

  <section class="info-box">
     <div class="backdrop text-center">
       <p class ="contact-p"><?php echo get_option('gcctheme_email', ''); ?></p>
       <p class ="contact-p" style ="margin-top:10px;"><?php echo get_option('gcctheme_contact', ''); ?></p>
     </div>
  </section>

  <!-- Gold bar with ball -->
  <div class="gold-bar to-top">
    <img src="<?php echo get_template_directory_uri(); ?>/img/ball-u437.png" alt="" class="small-logo">
  </div>

  <section class="contact-form">
    <h1>Get in touch</h1>
    <form class = "request-form" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
		<input type="hidden" name="action" value="gcctheme_contact_form">
		<input type="hidden" name="pageid" value="<?php echo get_the_ID(); ?>">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
          	<?php if(isset($_GET['sent']) && $_GET['sent'] == 'true'){ ?>
          	<div class="alert alert-success">
		    	Your inquiry has been successfully sent.
		    </div>
		    <?php } ?>
           <input type = "text" class = "form-control contact-input" placeholder= "Enter Name" name="name">
           <input type = "text" class = "form-control contact-input" placeholder= "Enter Email" name="email">
           <textarea class = "form-control contact-textarea" placeholder= "Enter Your Message" name="message"></textarea>
         </div>
         <div class="col-md-4 col-md-offset-4">
              <button class ="btn btn-default btn-submit btn-block">Submit </button>
          </div>
        </div>
      </div>
    </form>
  </section>
  <div class="silver-bar to-top">
  </div>
  <!-- Sponsors -->
  <section class="sponsors black-striped">
    <h1 class="off-title">SPONSORS </h1>
    <div class="container">
      <div class="row">
        <?php  
                $args = array(
                    'post_type' => 'officer',
                    'order' => 'DESC',
                    'orderby' => 'post_date'
                );
                $query = new WP_Query($args);
                if($query->have_posts()){
                  $counter = 1;
                  while($query->have_posts()){
        ?>
        <div class="col-md-4 col-xs-4 advisor-box"><p class="o-name"><?php the_title(); ?></p><p class="o-title"><?php echo get_field('position'); ?></p><p class="o-email"><?php echo get_field('email'); ?></p></div>
      <?php
              }
            }
            wp_reset_query();
      ?>
      </div>
    </div>
  </section>
  <!-- Gold bar with ball -->
  <div class="gold-bar to-top">
    <img src="<?php echo get_template_directory_uri(); ?>/img/ball-u437.png" alt="" class="small-logo">
  </div>

  <section class="purple-hive">
    <br><br><br>
  </section>

  </section>
<?php get_footer(); ?>