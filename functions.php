<?php


function load_stylesheets()
{



    wp_register_style('fontawesome', get_template_directory_uri() . '/fontawesome/css/all.min.css', array(), 1, 'all');
    wp_enqueue_style('fontawesome');

    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), 1, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('blog', get_template_directory_uri() . '/css/templatemo-xtra-blog.css', array(), 1, 'all');
    wp_enqueue_style('blog');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');


//load scripts

function addjs()
{


    wp_deregister_script('jquery');

    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), 1, 1, 1);
    wp_enqueue_script('jquery');

    wp_register_script('templatemo', get_template_directory_uri() . '/js/templatemo-script.js', array(), 1, 1, 1);
    wp_enqueue_script('templatemo');
}
add_action('wp_enqueue_scripts', 'addjs');


// menu support
add_theme_support('menus');


// register menus
register_nav_menus(

    array(

        'top-menu' => __('Top Menu', 'theme'),
    )
);

function add_class_li($classes, $item, $args)
{
    if (isset($args->li_class)) {
        $classes[] = $args->li_class;
    }
    if (isset($args->active_class) && in_array('current-menu-item', $classes)) {
        $classes[] = $args->active_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_class_li', '10', 3);

function add_anchor_class($attr, $item, $args)
{
    if (isset($args->a_class)) {
        $attr['class'] = $args->a_class;
    }
    return $attr;
}
add_filter('nav_menu_link_attributes', 'add_anchor_class', 10, 3);

// gallery block
if (function_exists('acf_register_block_type')) {

    add_action('acf/init', 'register_acf_block_types');
}

function register_acf_block_types()
{

    acf_register_block_type(

        array(

            'name' =>'gallery',
            'title' => __('Gallery'),
            'description' => __('A custom gallery block'),
            'render_template' => 'gallery.php',
            'icon' => 'editor-paste-text',
            'keywords' => array('gallery', 'image'),
        )
    );
}

//blockquote block

function mab_register_acf_block_types() {
    acf_register_block_type( [
        'name'            => 'blockquote',
        'title'           => __( 'Blockquote' ),
        'description'     => __( 'My blockquote block.' ),
        'render_template' => 'blockquote.php',
        'icon'            => 'format-quote',
    ] );
}

if ( function_exists( 'acf_register_block_type' ) ) {
    add_action( 'acf/init', 'mab_register_acf_block_types' );
}