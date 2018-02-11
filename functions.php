<?php  
	function resources(){
		wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
		wp_enqueue_style('style-name', get_stylesheet_uri());
		wp_enqueue_style('main', get_template_directory_uri() . '/css/styles.css');
		wp_enqueue_style('extended', get_template_directory_uri() . '/css/styles-extended.css');
		wp_enqueue_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), '1.0.0', true );
		wp_enqueue_script( 'google-map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyAed5etpja9gt01RlsM6-R6PRjjFCjFqHQ', array(), '3', true );
  		wp_enqueue_script( 'google', get_template_directory_uri() . '/js/acf-google-maps.js', array('google-map', 'jquery'), '0.1', true );
	}

	add_action('wp_enqueue_scripts', 'resources');

	function setup(){
		//Navigation Menus
		register_nav_menus(array(
			'primary' => __('Primary Menu'),
			'footer' => __('Footer Menu'),
			'bottom' => __('Bottom Menu'),
			'tickets' => __('Tickets Menu')
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

		register_post_type( 'hotels', array(
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

	add_action('admin_menu', 'theme_contact_setup_menu');

	function theme_contact_setup_menu(){
	    add_menu_page( 'Theme Options', 'Theme Options', 'manage_options', 'theme-option', 'init_theme_options' );
	}

	function init_theme_options(){
		include get_template_directory() . '/includes/theme-options.php';
	}

	function update_theme_options(){
		$facebook = $_POST['facebook'];
		$twitter = $_POST['twitter'];
		$instagram = $_POST['instagram'];
		$youtube = $_POST['youtube'];
		$ticket = $_POST['ticket'];
		update_option('gcctheme_facebook', $facebook);
		update_option('gcctheme_twitter', $twitter);
		update_option('gcctheme_instagram', $instagram);
		update_option('gcctheme_youtube', $youtube);
		update_option('gcctheme_ticket', $ticket);
		wp_redirect(admin_url('admin.php?page=theme-option&success'));
		exit;
	}

	add_action( 'admin_post_nopriv_gcctheme_update_theme_options', 'update_theme_options' );
	add_action( 'admin_post_gcctheme_update_theme_options', 'update_theme_options' );

	add_action( 'init', 'tailgate_cpt' );

	function tailgate_cpt() {

		register_post_type( 'tailgates', array(
		  'labels' => array(
		    'name' => 'Tailgates',
		    'singular_name' => 'Tailgate',
		   ),
		  'description' => 'Tailgates',
		  'public' => true,
		  'publicly_queryable' => true,
		  'menu_position' => 20,
		  'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ),
		  'taxonomies' => array('category')
		));
	}

	function my_acf_google_map_api( $api ){
		$api['key'] = 'AIzaSyAed5etpja9gt01RlsM6-R6PRjjFCjFqHQ';
		return $api;
	}

	add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
?>