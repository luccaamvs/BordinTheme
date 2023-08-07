<?php

function bordin_load_scripts(){
    wp_enqueue_style(
        'bordin-style', get_stylesheet_uri(), array(), '1.0', 'all'
    );
    wp_enqueue_style(
        'google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap', array(), null
    );
    wp_enqueue_script('dropdown', get_template_directory_uri().'/js/dropdown.js', array(), '1.0', true);
}

add_action( 'wp_enqueue_scripts', 'bordin_load_scripts');

function bordin_config() {
    register_nav_menus(
        array(
            'bordin_main_menu' => 'Main Menu',
            'bordin_footer_menu' => 'Footer Menu' 
        )
    );

    $args = array(
        'height'    => 225,
        'width'     => 1920
    );
    add_theme_support('custom-header', $args);
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'width' => 200,
        'height' => 110,
        'flex-height' => true,
        'flex-width' => true
    ));
}

add_action('after_setup_theme','bordin_config', 0);

add_action('widgets_init', 'bordin_sidebars');
function bordin_sidebars(){
    register_sidebar(
        array(
            'name'   => 'Blog Sidebar',
            'id'     => 'sidebar-blog',
            'description'   => 'Aqui você vai colocar seus novos Widgets!',
            'before_widget' =>  '<div class="widget-wrapper">',
            'after_widget'  =>  '</div>',
            'before_title'  =>  '<h4 class="widget-title">',
            'after_title'   =>  '</h4>'
        )
    );

    register_sidebar(
        array(
            'name'   => 'Skill 01',
            'id'     => 'skill-01',
            'description'   => 'Primeira Skill Desc.',
            'before_widget' =>  '<div class="widget-wrapper">',
            'after_widget'  =>  '</div>',
            'before_title'  =>  '<h4 class="widget-title">',
            'after_title'   =>  '</h4>'
        )
    );
    register_sidebar(
        array(
            'name'   => 'Skill 02',
            'id'     => 'skill-02',
            'description'   => 'Segunda Skill Desc.',
            'before_widget' =>  '<div class="widget-wrapper">',
            'after_widget'  =>  '</div>',
            'before_title'  =>  '<h4 class="widget-title">',
            'after_title'   =>  '</h4>'
        )
    );
    register_sidebar(
        array(
            'name'   => 'Skill 03',
            'id'     => 'skill-03',
            'description'   => 'Terceira Skill Desc.',
            'before_widget' =>  '<div class="widget-wrapper">',
            'after_widget'  =>  '</div>',
            'before_title'  =>  '<h4 class="widget-title">',
            'after_title'   =>  '</h4>'
        )
    );


    register_sidebar(
        array(
            'name'   => 'Page Sidebar',
            'id'     => 'sidebar-page',
            'description'   => 'Aqui você vai colocar seus novos Widgets!',
            'before_widget' =>  '<div class="widget-wrapper">',
            'after_widget'  =>  '</div>',
            'before_title'  =>  '<h4 class="widget-title">',
            'after_title'   =>  '</h4>'
        )
    );
}