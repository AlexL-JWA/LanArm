<?php

function la_scripts() {

	// Enqueue the main Stylesheet.

	wp_enqueue_style( 'main-stylesheet', get_template_directory_uri() . '/assets/css/main.css', array(), 'all' );

    wp_enqueue_style( 'main-css', get_template_directory_uri() . '/assets/css/edits.css', array(), 'all' );

	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/bild.js', array('jquery'), true );

    wp_enqueue_script( 'edits-js', get_template_directory_uri() . '/assets/js/edits.js', array('main-js'), true );

    wp_enqueue_script( 'map-js', get_template_directory_uri() . '/assets/js/map.js', array('jquery'), true );

}
add_action( 'wp_enqueue_scripts', 'la_scripts' );

function theme_register_nav_menu() {
	register_nav_menu( 'primary', 'Primary Menu' );
}
add_action( 'after_setup_theme', 'theme_register_nav_menu' );

// ACF Pro Options Page
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}

add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );

show_admin_bar( false );

/*********************** PUT YOU FUNCTIONS BELOW ********************************/

// add_image_size( 'name', width, height, array('center','center'));

add_image_size( 'catalog-img', 243, 183, array('center','center'));

add_image_size( 'blog-img', 440, 331, array('center','center'));

// добавить svg
add_filter( 'upload_mimes', 'upload_allow_types' );
function upload_allow_types( $mimes ) {
	// разрешаем новые типы
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}

// смена класа для custom logo
add_filter( 'get_custom_logo', 'change_logo_class' );
function change_logo_class( $html ) {

    $html = str_replace( 'custom-logo', 'logo', $html );

    return $html;
}

// меню смена класса submenu
class lanarm_menu extends Walker_Nav_Menu {

    public function start_lvl( &$output, $depth = 0, $args = array() ) {
        if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $indent = str_repeat( $t, $depth );

        // Default class.
        $classes = array( 'submenu' );

        $class_names = join( ' ', apply_filters( 'nav_menu_submenu_css_class', $classes, $args, $depth ) );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

        $output .= "{$n}{$indent}<ul$class_names>{$n}";
    }    
}

// добавить класс к активному пункту меню
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}

// ACF Google map
function my_acf_init() {    
    acf_update_setting('google_api_key', 'AIzaSyABobK7bUAVN9h278wGKW9bEYz1p1xdwIU');
}
add_action('acf/init', 'my_acf_init');