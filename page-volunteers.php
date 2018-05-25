<?php 
  get_header(); 
  the_post();
?>
<section class = "community-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 tradition-text">
          <h1>VOLUNTEERS</h1>
          <div class="row"><div class="col-md-5 col-md-offset-4 "><div class="m-img" style="background-image: url(<?php echo get_field('volunteers_image')['url']; ?>);"></div></div></div>
          <?php the_field('volunteers_description'); ?>
        </div>
        <div class="col-md-8 col-md-offset-2 text-center">
          <div class="volunteer-form">
          <h1>Want to Volunteer?</h1>
          <form id="volunteer-form" action = ""  method = "POST">
            <div class="alert alert-success" id="volunteer-success" style="display: none;">
              Your submission has been sent
            </div>
            <input type = "text" placeholder = "Full Name" class = "form-control" name="name">
            <input type = "email" placeholder = "Email" class = "form-control" name="email">
            <input type = "phone" placeholder = "Phone" class = "form-control" name="phone">
            <textarea placeholder = "What you want to do" class ="form-control" rows ="10" name="message"></textarea>
            <button type = "submit" class ="btn btn-default btn-volunteer" id="volunteer-submit">Submit</button>
          </form>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php get_footer(); ?>