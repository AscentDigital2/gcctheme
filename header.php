<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title><?php echo bloginfo('name'); ?></title>
  <meta name="description" content="Gulf Coast Challenge">
  <meta name="author" content="DB">

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
          <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/social-icons1.png" alt=""></a>
          <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/social-icons2.png" alt=""></a>
          <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/social-icons3.png" alt=""></a>
        </div>
        <div class="right-top-menu">
          <a href="javascript:void(0)" class ="menu-button">MENU</a>
        </div>
      </div>
    </div>
    <div class="gold-bar"></div>
    <nav class="nav-menu-gcc">
      <div class="container">
        <div class="left-menu">
          <a href="./index.html">Home</a>
          <a href="./tradition.html">Tradition</a>
          <a href="./tickets.html">Tickets</a>
        </div>
        <div class="right-menu">
          <a href="./community.html">Community</a>
          <a href="./events.html">Events</a>
          <a href="./contact.html">Contact</a>
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
      <a href="./index.html">Home</a>
      <a href="./tradition.html">Tradition</a>
      <a href="./tickets.html">Tickets</a>
      <a href="./community.html">Community</a>
          <a href="./events.html">Events</a>
          <a href="./contact.html">Contact</a>
    </div>
  </div>
  <!-- Mobile Menu -->

  <!-- Banner -->
  <section class="banner">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item banner-item active">
          <img src="<?php echo get_template_directory_uri(); ?>/img/pics.jpg" style ="height:430px;" class ="cimg" alt="...">
        </div>
        <div class="item banner-item">
          <img src="<?php echo get_template_directory_uri(); ?>/img/pics.jpg" style ="height:430px;" class ="cimg" cka alt="...">
        </div>
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
      <img src="<?php echo get_template_directory_uri(); ?>/img/southern-u401.png" alt="" class="text-g">
      <img src="<?php echo get_template_directory_uri(); ?>/img/alabama-u413.png" alt="" class="text-g">
    </div>
    <!--  -->

  </section>