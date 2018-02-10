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
			'footer' => __('Footer Menu')
		));
			//Add featured image support
		add_theme_support('post-thumbnails');
		add_theme_support('post-formats', array('aside', 'gallery', 'link'));
	}
	add_action('after_setup_theme', 'setup');
?>