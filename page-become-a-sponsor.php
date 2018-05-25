<?php get_header();the_post();
$image = get_field('bas_image');
 ?>
<section class = "community-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Become a Sponsor</h1>
          <div class="row"><div class="col-md-10 col-md-offset-1 "><img src="<?php echo $image['url']; ?>" style ='width:100%;height:auto;' ></div></div>
              <div style = "color:#FFF;font-size:16px;padding-top:40px;text-align:center;padding-bottom:80px;">
                  <?php the_content(); ?> <!-- Page Content -->
              </div><!-- .entry-content-page -->
        </div>
      </div>
    </div>
  </section>
<?php get_footer(); ?>