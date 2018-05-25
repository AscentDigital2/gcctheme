<!doctype html>

<html lang="en">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <title><?php echo bloginfo('name'); ?></title>
  <meta name="description" content="Gulf Coast Challenge">
  <meta name="author" content="DB">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>

  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
</head>

<body>
  

  <!-- Navigation -->
  <header>
    <div class="silver-bar"></div>
    <div class="nav-top-most">
      <div class="container">
        <div class="left-top-menu social-icons">
          <a href="<?php echo get_option('gcctheme_facebook', ''); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/social-icons1.png" alt=""></a>
          <a href="<?php echo get_option('gcctheme_twitter', ''); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/social-icons2.png" alt=""></a>
          <a href="<?php echo get_option('gcctheme_instagram', ''); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/social-icons3.png" alt=""></a>
        </div>
        <div class="right-top-menu">
          <a href="http://thegulfcoastchallenge.com/contact/" class ="contact-button">Contact</a>
          <a href="javascript:void(0)" class ="menu-button">MENU</a>
        </div>
      </div>
    </div>
    <div class="gold-bar"></div>
    <?php  
      $menuLocations = get_nav_menu_locations();
      $menuID = $menuLocations['primary'];
      $menus = wp_get_nav_menu_items($menuID);
      list($array1, $array2) = array_chunk($menus, ceil(count($menus) / 2));
    ?>
    <nav class="nav-menu-gcc">
      <div class="container">
        <div class="left-menu">
          <?php foreach ($array1 as $menu): ?>
            <a href="<?php echo $menu->url ?>"><?php echo $menu->title; ?></a>
          <?php endforeach ?>
        </div>
        <div class="right-menu">
          <div class="btn-group">
            <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Community</a>
            <ul class="dropdown-menu community-dropdown">
              <li><a href="http://thegulfcoastchallenge.com/mardi-the-mascot/">Mardi the Mascot</a></li>
              <li><a href="http://thegulfcoastchallenge.com/advisory-board/">Advisory Board</a></li>
              <li><a href="http://thegulfcoastchallenge.com/pictures/">Pictures</a></li>
              <li><a href="http://thegulfcoastchallenge.com/volunteers/">Volunteers</a></li>
            </ul>
          </div>
          <a href="http://thegulfcoastchallenge.com/events/">Events</a>
          <a href="http://thegulfcoastchallenge.com/hotels/">Hotels</a>
          <div class="btn-group">
            <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sponsorship</a>
            <ul class="dropdown-menu sponsorship-dropdown">
              <li><a href="http://thegulfcoastchallenge.com/partners/">Partners</a></li>
              <li><a href="http://thegulfcoastchallenge.com/sponsors/">Sponsors</a></li>
              <li><a href="http://thegulfcoastchallenge.com/become-a-sponsor/">Become a Sponsor</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <div class="silver-bar"></div>
    <img src="<?php echo get_template_directory_uri(); ?>/img/toplogo.png" alt="" class="gcc-logo">  
  </header>

  <!-- Mobile Menu -->
  <div class="menu-container">
    <section class="black-metal-brushed divider-2"> 
    <a href="javascript:void(0);" class="close-navigation">x</a>
    <div class="container">
        <div class="ticket-menu centered-nav">
          <a href="javacript:void(0);">MENU</a> 
        </div>
    </div>
  </section>
  <div class="gold-bar"></div>
    <div class="link-list">
      <?php foreach ($array1 as $menu): ?>
        <a href="<?php echo $menu->url ?>"><?php echo $menu->title; ?></a>
      <?php endforeach ?>
      <a href="http://thegulfcoastchallenge.com/mardi-the-mascot/">Mardi the Mascot</a>
      <a href="http://thegulfcoastchallenge.com/advisory-board/">Advisory Board</a>
      <a href="http://thegulfcoastchallenge.com/pictures/">Pictures</a>
      <a href="http://thegulfcoastchallenge.com/volunteers/">Volunteers</a>
      <a href="http://thegulfcoastchallenge.com/events/">Events</a>
      <a href="http://thegulfcoastchallenge.com/hotels/">Hotels</a>
      <a href="http://thegulfcoastchallenge.com/partners/">Partners</a>
      <a href="http://thegulfcoastchallenge.com/sponsors/">Sponsors</a>
      <a href="http://thegulfcoastchallenge.com/become-a-sponsor/">Become a Sponsor</a>
      <a href="http://thegulfcoastchallenge.com/contact/">Contact</a>
    </div>
  </div>
  <!-- Mobile Menu -->

  <?php if(is_front_page()){ ?>
  <section class="banner">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <?php  
          $banners = get_field('carousel');
          $count = 1;
          foreach ($banners as $banner) {
        ?>
        <div class="item banner-item <?php if($count == 1){ echo 'active'; } ?>">
          <img src="<?php echo $banner['url']; ?>" style ="height:430px;" class ="cimg" alt="...">
        </div>
        <?php
            $count++; 
          } 
        ?>
      </div>
    </div>
    <div class="gold-bar to-bottom"></div>
    <!-- Graphics --> 
    <div class="metal-brushed gray-bar"></div>
    <div class="graphic-overlay namesholder name-g">
      <img src="<?php echo get_template_directory_uri(); ?>/img/namesholder.png" alt="" class="namesholder">
    </div>
    <div class="graphic-overlay namesholder base-g">
      <img src="<?php echo get_template_directory_uri(); ?>/img/base.png" alt="" class="base-g">
    </div> 
    <div class="graphic-overlay namesholder star-g">
      <img src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt="" class="star-g">
    </div>
    <div class="graphic-overlay namesholder text-g">
      <img src="<?php echo get_field('home')['url']; ?>" alt="" class="text-g">
      <img src="<?php echo get_field('away')['url']; ?>" alt="" class="text-g">
    </div>
    <!--  -->

  </section>
  <?php 
    }else{
      $thumb_url = wp_get_attachment_image_src(get_post_thumbnail_id(), '', false);
  ?>
    <section class = "sub-banner" style="background-image: url(<?php echo $thumb_url[0]; ?>);">
      <div class="container">
      <h3 class = "sub-banner-title"><?php echo get_the_title(); ?></h3>
      </div>
    </section>
  <?php } ?>

  <div class="silver-bar to-top"></div>