
<footer>
    <div class="silver-bar"></div>
    <div class="metal-hive"></div>
    <div class="gold-bar to-top">
      <img src="<?php echo get_template_directory_uri(); ?>/img/toplogo.png" alt="" class="large-logo">
    </div>
    <div class="purple-hive">
      <div class="container">
        <ul class="footer-links">
          <?php  
            $menuLocations = get_nav_menu_locations();
            $menuID = $menuLocations['footer'];
            $menus = wp_get_nav_menu_items($menuID);
            foreach ($menus as $menu) {
          ?>  
            <li><a href="<?php echo $menu->url ?>"><?php echo $menu->title; ?></a></li>
          <?php } ?>
      </ul>
      </div>
    </div>
    <div class="silver-bar"></div>
    <div class="copyright text-center">
      <p>Gulf Cost Challenge. All Rights Reserved  © <?php echo date('Y'); ?></p>
      
      <?php  
        $menuLocations = get_nav_menu_locations();
        $menuID = $menuLocations['bottom'];
        $menus = wp_get_nav_menu_items($menuID);
        foreach ($menus as $menu) {
      ?>  
        <a href="<?php echo $menu->url ?>"><?php echo $menu->title; ?></a>
      <?php } ?>
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