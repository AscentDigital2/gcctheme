<footer>
    <div class="silver-bar"></div>
    <div class="metal-hive"></div>
    <div class="gold-bar to-top">
      <img src="<?php echo get_template_directory_uri(); ?>/img/toplogo.png" alt="" class="large-logo">
    </div>
    <div class="purple-hive">
      <div class="container">
         <ul class="footer-links">
        <li><a href="#">About</a></li>
        <li><a href="#">Tradition</a></li>
        <li><a href="#">Tickets</a></li>
        <li><a href="#">Events</a></li>
        <li><a href="#">Travel</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      </div>
    </div>
    <div class="silver-bar"></div>
    <div class="copyright text-center">
      <p>Gulf Cost Challenge. All Rights Reserved  © 2017</p>
      <a href="#">Privacy Policy</a>
    </div>
  </footer>
  <?php wp_footer(); ?>

  <script>
    (function($) {
      $('.menu-button').on('click', function(){
        $('.menu-container').toggleClass('open-menu');  

      });
      $('.close-navigation').on('click', function(){
        $('.menu-container').toggleClass('open-menu'); 
      }); 
      $(document).mouseup(function(e) {
        var container = $(".menu-container"); 
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            $('.menu-container').removeClass('open-menu'); 
        }
      });  

      $('.carousel').carousel();
    })( jQuery );
  </script>
</body>
</html>