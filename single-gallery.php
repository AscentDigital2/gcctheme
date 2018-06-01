<?php get_header();
the_post();
 ?>
<section class = "community-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1><?php the_title(); ?></h1>
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