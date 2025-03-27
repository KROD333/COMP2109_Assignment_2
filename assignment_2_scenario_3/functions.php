<?php 
function restaurant_enqueue_styles(){
    wp_enqueue_style('restaurant-style', get_stylesheet_uri());
    wp_enqueue_style('woocommerce-style', get_template_directory_uri() . '/woocommerce.css');
}
add_action('wp_enqueue_scripts', 'restaurant_enqueue_styles');
?>