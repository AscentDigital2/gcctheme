<?php get_header();
the_post();
 ?>
<section class = "community-section">
  
    <!--  -->
      <div class="gold-bar to-top">
      </div>
      <section class="purple-hive">
        <div class="container">
              <h2 class = "sp-title" style ="font-size:30px"><?php the_title(); ?></h2>
        </div>
      </section>
      <div class="gold-bar to-top">
      </div>
      <!--  -->
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row image-box">
            <?php 
              $images = get_field('gallery');
              foreach ($images as $image) {
            ?>
            <div class="col-md-3">
                <a href="<?php echo $image['url']; ?>" data-lightbox="gallery-img" data-title="<?php echo $image['title']; ?>">
                <img src="<?php echo $image['url']; ?>">
                </a>
            </div>
            <?php } ?>
          </div> 
        </div>
      </div>
    </div>
  </section>
<?php get_footer(); ?>