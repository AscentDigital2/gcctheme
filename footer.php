
<footer>
    <div class="silver-bar"></div>
    <div class="metal-hive"></div>
    <div class="gold-bar to-top">
      <img src="<?php echo get_template_directory_uri(); ?>/img/toplogo.png" alt="" class="large-logo">
    </div>
    <div class="purple-hive">
      <div class="container">
        <div class="text-center">
        </div>
      </div>
    </div>
    <div class="silver-bar"></div>
    <div class="copyright text-center">
      <p>Gulf Coast Challenge. All Rights Reserved  © <?php echo date('Y'); ?></p>
      
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
</body>
</html>