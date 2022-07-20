<?php

	function my_theme_css(){
		wp_enqueue_style('main', get_stylesheet_uri());
		wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');
		wp_enqueue_script('main-js', get_template_directory_uri() .'/assets/js/main.js');
		wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js',[]);


		foreach( glob( get_template_directory(). '/assets/css/*.css' ) as $file ) {
			$file = str_replace(get_template_directory(), '', $file);
			wp_enqueue_style( $file.'style', get_template_directory_uri() . $file);
		}
	};

	add_theme_support( 'post-thumbnails' );

	add_action('wp_enqueue_scripts', 'my_theme_css', 0);
	function traitement_formulaire() {

		if (isset($_POST['subject']) && isset($_POST['submit']) && isset($_POST['phone']) && isset($_POST['email']))  {
	
			if (wp_verify_nonce($_POST['contacter'], 'contacter')) {
	
			}
	
		}
	}
	add_action('template_redirect', 'traitement_formulaire');