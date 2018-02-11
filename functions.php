<?php  
	function resources(){
		wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
		wp_enqueue_style('style-name', get_stylesheet_uri());
		wp_enqueue_style('main', get_template_directory_uri() . '/css/styles.css');
		wp_enqueue_style('extended', get_template_directory_uri() . '/css/styles-extended.css');
		wp_enqueue_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), '1.0.0', true );
	}

	add_action('wp_enqueue_scripts', 'resources');

	function setup(){
		//Navigation Menus
		register_nav_menus(array(
			'primary' => __('Primary Menu'),
			'footer' => __('Footer Menu'),
			'bottom' => __('Bottom Menu')
		));
			//Add featured image support
		add_theme_support('post-thumbnails');
		add_theme_support('post-formats', array('aside', 'gallery', 'link'));
	}
	add_action('after_setup_theme', 'setup');

	add_action( 'init', 'sponsor_cpt' );

	function sponsor_cpt() {

		register_post_type( 'sponsors', array(
		  'labels' => array(
		    'name' => 'Sponsors',
		    'singular_name' => 'Sponsor',
		   ),
		  'description' => 'Partners',
		  'public' => true,
		  'publicly_queryable' => true,
		  'menu_position' => 20,
		  'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ),
		  'taxonomies' => array('category')
		));
	}
	add_action( 'init', 'event_cpt' );

	function event_cpt() {

		register_post_type( 'events', array(
		  'labels' => array(
		    'name' => 'Events',
		    'singular_name' => 'Event',
		   ),
		  'description' => 'Events',
		  'public' => true,
		  'publicly_queryable' => true,
		  'menu_position' => 20,
		  'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ),
		  'taxonomies' => array('category')
		));
	}
	add_action( 'init', 'hotel_cpt' );

	function hotel_cpt() {

		register_post_type( 'Hotels', array(
		  'labels' => array(
		    'name' => 'Hotels',
		    'singular_name' => 'Hotel',
		   ),
		  'description' => 'Hotels',
		  'public' => true,
		  'publicly_queryable' => true,
		  'menu_position' => 20,
		  'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ),
		  'taxonomies' => array('category')
		));
	}
?>