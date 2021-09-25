<?php

add_action( 'wp_enqueue_scripts', 'rodina_style' );
add_action( 'wp_enqueue_scripts', 'rodina_scripts' );


function rodina_style() {
  wp_enqueue_style( 'bootstrap-style', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css');

  wp_enqueue_style( 'fancybox-style', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css');

   wp_enqueue_style( 'aos-style', 'https://unpkg.com/aos@2.3.1/dist/aos.css');

  wp_enqueue_style( 'slick-style', get_template_directory_uri() . '/assets/slick/slick.css' );
  wp_enqueue_style( 'slick-theme-style', get_template_directory_uri() . '/assets/slick/slick-theme.css' );

	wp_enqueue_style( 'main-style', get_stylesheet_uri() );
}



function rodina_scripts() {
  wp_enqueue_script( 'bootstrap-script', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js', array( 'jquery' ));

  wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js');
	wp_enqueue_script( 'jquery' );

  wp_enqueue_script( 'fancybox-script', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js', array(), null, true);

   wp_enqueue_script( 'aos-script', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), null, true);

  wp_enqueue_script( 'slick-script', get_template_directory_uri() .'/assets/slick/slick.min.js', array(), null, true);


	wp_enqueue_script( 'main-script', get_template_directory_uri() .'/assets/js/main.js', array(), null, true);
}


?>
