<?php  
	function resources(){
		wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
		wp_enqueue_style('style-name', get_stylesheet_uri());
		wp_enqueue_style('main', get_template_directory_uri() . '/css/styles.css');
		wp_enqueue_style('extended', get_template_directory_uri() . '/css/styles-extended.css');
		wp_enqueue_style('extended2', get_template_directory_uri() . '/css/styles-extended-2.css');
		wp_enqueue_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), '1.0.0', true );
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
	add_action( 'init', 'register_my_menus' );
	if ( function_exists('register_sidebar') ) {
	   register_sidebar(array(
	   'name' => 'Facbook Feed',
	   'id'            => 'facebook_feed',
	   'before_widget' => '<div id="%1$s" class="widget %2$s">',
	   'after_widget' => '</div>',
	   'before_title' => '<h2>',
	   'after_title' => '</h2>'
	    ));
	   register_sidebar(array(
	   'name' => 'Twitter Feed',
	   'id'            => 'twitter_feed',
	   'before_widget' => '<div id="%1$s" class="widget %2$s">',
	   'after_widget' => '</div>',
	   'before_title' => '<h2>',
	   'after_title' => '</h2>'
	   ));   
	   
	   register_sidebar(array(
	   'name' => 'Instagram Feed',
	   'id'            => 'instagram_feed',
	   'before_widget' => '<div id="%1$s" class="widget %2$s">',
	   'after_widget' => '</div>',
	   'before_title' => '<h2>',
	   'after_title' => '</h2>'
	   ));
	   
	}

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
	add_action( 'init', 'advisory_cpt' );

	function advisory_cpt() {

		register_post_type( 'advisory', array(
		  'labels' => array(
		    'name' => 'Advisory',
		    'singular_name' => 'Advisory',
		   ),
		  'description' => 'Advisory',
		  'public' => true,
		  'publicly_queryable' => true,
		  'menu_position' => 20,
		  'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ),
		  'taxonomies' => array('category')
		));
	}
	add_action( 'init', 'officer_cpt' );

	function officer_cpt() {

		register_post_type( 'officer', array(
		  'labels' => array(
		    'name' => 'Officers',
		    'singular_name' => 'Officer',
		   ),
		  'description' => 'Officers',
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
		$email = $_POST['email'];
		$contact = $_POST['contact'];
		$recipients = $_POST['recipients'];
		update_option('gcctheme_facebook', $facebook);
		update_option('gcctheme_twitter', $twitter);
		update_option('gcctheme_instagram', $instagram);
		update_option('gcctheme_youtube', $youtube);
		update_option('gcctheme_ticket', $ticket);
		update_option('gcctheme_email', $email);
		update_option('gcctheme_contact', $contact);
		update_option('gcctheme_recipients', $recipients);
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

	function send_contact_form(){
		$pageid = $_POST['pageid'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];

		$body = 'Full Name: ' . $name . "\r\n";
		$body .= 'Email Address: ' . $email . "\r\n";
		$body .= 'Message: ' . $message;

		$success = 'false';
		if(wp_mail(get_option('gcctheme_recipients', ''), 'Contact Form GCC', $body)){
			$success = 'true';
		}

		wp_redirect(get_the_permalink($pageid) . '?sent=' . $success);
		exit;
	}

	add_action( 'admin_post_nopriv_gcctheme_contact_form', 'send_contact_form' );
	add_action( 'admin_post_gcctheme_contact_form', 'send_contact_form' );
?>