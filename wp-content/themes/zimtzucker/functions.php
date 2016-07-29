<?php 

// This is the propper way to enqueue both scripts and additional CSS.

// For a full list of scripts included with WP visit:
// https://developer.wordpress.org/reference/functions/wp_enqueue_script/#Default_scripts_included_with_WordPress

// If you would like to learn why, how and mechanics - you can visit:
// Usage: http://code.tutsplus.com/articles/how-to-include-javascript-and-css-in-your-wordpress-themes-and-plugins--wp-24321


function custom_styles() {
    // Register the style first so that WP knows what we are working with:
    wp_register_style( 'core-css', get_template_directory_uri() . '/css/zimt.css' );
 
    // Then we need to enqueue them one by one to the theme:
    wp_enqueue_style( 'core-css' );
}
add_action( 'wp_enqueue_scripts', 'custom_styles' );

function custom_scripts() {
    // Register the scripts first so that WP knows what we are working with:
    // Parameters: Slug, url, dependencies, version, in_footer
    wp_register_script( 'contentReplacer', get_template_directory_uri() . '/scripts/contentReplacer.js', ['jquery'], 1.2, true );
    wp_register_script( 'cart', get_template_directory_uri() . '/scripts/cart.js', ['jquery'], 1.2, true );
    wp_register_script( 'cookie', get_template_directory_uri() . '/scripts/cookie.js', ['jquery'], 1.2, true );
    wp_register_script( 'form-validator', get_template_directory_uri() . '/scripts/jquery.validate.min.js', ['jquery'], '2.3.26', true );
    wp_register_script( 'form-creator', get_template_directory_uri() . '/scripts/formCreator.js', ['jquery'], '2.3.26', true );
    wp_register_script( 'delegate', get_template_directory_uri() . '/scripts/delegate.js', ['jquery'], 1.2, true );



    
 
    // Then we need to enqueue them one by one to the theme:
    wp_enqueue_script( 'form-validator' );
    wp_enqueue_script( 'form-creator' );
    wp_enqueue_script( 'contentReplacer' );
    wp_enqueue_script( 'cart' );
    wp_enqueue_script( 'cookie' );
    wp_enqueue_script( 'delegate' );
}
add_action( 'wp_enqueue_scripts', 'custom_scripts' );


// Sometimes it is mandatory to have a special version of jQuery. This should be avoided. And allowed only outside admin panel.
if (!is_admin()) {
        wp_deregister_script('jquery');
        wp_register_script('jquery', ( get_template_directory_uri() . "/scripts/jquery-2.2.4.min.js"), false, '2.2.4');
        wp_enqueue_script('jquery');
}



// This function is used to register navigation positions within the theme.
// Usage: https://codex.wordpress.org/Function_Reference/register_nav_menus

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );



// We can add predefined image sizes that wordpress will automatically create while uploading.
// Usage: https://developer.wordpress.org/reference/functions/add_image_size/

add_image_size( 'Big', 500, 500, false ); // $name, $min-width, $min-height, $crop
add_image_size( 'footer', 64, 64, true ); 


// There are a few unneeded tags within our <head>. It looks messy. We can disable/unmount them here/

remove_action('wp_head', 'rsd_link'); // Weblog client legacy support (editing via custom-made Apps)
remove_action('wp_head', 'wlwmanifest_link'); // Windows Live Writer Manifest
remove_action('wp_head', 'wp_generator'); // Built-in Meta generator (if we want to use custom meta tags)


?>
