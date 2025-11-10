<?php
add_action( 'wp_enqueue_scripts', 'puma_theme_enqueue_styles' );

function puma_theme_enqueue_styles() {
    
    wp_enqueue_style( 'puma-main-style', get_stylesheet_uri(), array(), filemtime( get_stylesheet_directory() . '/style.css' ) );

    
    
    wp_enqueue_style( 'puma-theme-style', get_template_directory_uri() . '/css/style.css', array('puma-main-style'), filemtime( get_template_directory() . '/css/style.css' ) );

		wp_enqueue_style( 'heder', get_template_directory_uri() . '/css/heder.css', array('puma-main-style'), filemtime( get_template_directory() . '/css/style.css' ) );
        
		wp_enqueue_style( 'banner', get_template_directory_uri() . '/css/banner.css', array('puma-main-style'), filemtime( get_template_directory() . '/css/style.css' ) );
        
        wp_enqueue_style( 'pro-klub', get_template_directory_uri() . '/css/pro-klub.css', array('puma-main-style'), filemtime( get_template_directory() . '/css/style.css' ) );

        wp_enqueue_style( 'services', get_template_directory_uri() . '/css/services.css', array('puma-main-style'), filemtime( get_template_directory() . '/css/style.css' ) );

        wp_enqueue_style( 'zapis', get_template_directory_uri() . '/css/zapis.css', array('puma-main-style'), filemtime( get_template_directory() . '/css/style.css' ) );

        wp_enqueue_style( 'footer', get_template_directory_uri() . '/css/footer.css', array('puma-main-style'), filemtime( get_template_directory() . '/css/style.css' ) );

        wp_enqueue_style( 'page-prices', get_template_directory_uri() . '/css/page-prices.css', array('puma-main-style'), filemtime( get_template_directory() . '/css/style.css' ) );

         wp_enqueue_style( 'page-schedule', get_template_directory_uri() . '/css/page-schedule.css', array('puma-main-style'), filemtime( get_template_directory() . '/css/style.css' ) );

           wp_enqueue_style( 'page-news', get_template_directory_uri() . '/css/page-news.css', array('puma-main-style'), filemtime( get_template_directory() . '/css/style.css' ) );

           wp_enqueue_style( 'gallery-hero-grid', get_template_directory_uri() . '/css/gallery-hero-grid.css', array('puma-main-style'), filemtime( get_template_directory() . '/css/style.css' ) );

           wp_enqueue_style( 'main-gallery-section', get_template_directory_uri() . '/css/main-gallery-section.css', array('puma-main-style'), filemtime( get_template_directory() . '/css/style.css' ) );
}

function theme_enqueue_scripts() {
   
    wp_enqueue_style( 'main-style', get_stylesheet_uri() );

    
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array('jquery'), null, true );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );

function puma_theme_setup() {
    
    add_theme_support( 'custom-logo' );
    
  
}
add_action( 'after_setup_theme', 'puma_theme_setup' )
?>