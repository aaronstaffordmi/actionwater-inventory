<?php 

add_action( 'wp_enqueue_scripts', 'salient_child_enqueue_styles', 100);

function salient_child_enqueue_styles() {
		
		$nectar_theme_version = nectar_get_theme_version();
		wp_enqueue_style( 'salient-child-style', get_stylesheet_directory_uri() . '/style.css', '', $nectar_theme_version );
		
		wp_enqueue_style( 'salient-child-inventory-style', get_stylesheet_directory_uri() . '/inventory-style.css', '', $nectar_theme_version );
		
    if ( is_rtl() ) {
   		wp_enqueue_style(  'salient-rtl',  get_template_directory_uri(). '/rtl.css', array(), '1', 'screen' );
		}
}

function stafford_js_scripts() {
    wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/staffordInventory.js', array( 'jquery' ),'',true );
}
add_action( 'wp_enqueue_scripts', 'stafford_js_scripts' );

?>