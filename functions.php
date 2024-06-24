<?php
function twentytwenty_nyc_chess_enqueue_styles() {
    // Enqueue parent theme styles
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

    // Enqueue child theme styles
    wp_enqueue_style('child-style', get_stylesheet_uri(), array('parent-style'));

    // Enqueue Adobe Fonts
    wp_enqueue_style('twentytwenty-nyc-chess-adobe-fonts', 'https://use.typekit.net/hzt4wtm.css', array(), null);
}

// Hook the function to wp_enqueue_scripts action
add_action('wp_enqueue_scripts', 'twentytwenty_nyc_chess_enqueue_styles');

// Function to add preconnect links for Adobe Fonts
function add_adobe_fonts_preconnect() {
    echo '<link rel="preconnect" href="https://use.typekit.net">';
    echo '<link rel="preconnect" href="https://use.typekit.net" crossorigin>';
}

// Hook the function to wp_head action
add_action('wp_head', 'add_adobe_fonts_preconnect');
?>
