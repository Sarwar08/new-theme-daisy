<?php
function my_custom_blog_scripts()
{
    // Enqueue Tailwind CSS
    wp_enqueue_style('my-custom-blog-style', get_theme_file_uri('./output.css'));
}
add_action('wp_enqueue_scripts', 'my_custom_blog_scripts');

function my_custom_blog_widgets_init()
{
    register_sidebar(array(
        'name'          => __('Sidebar', 'my-custom-blog'),
        'id'            => 'sidebar-1',
        'description'   => __('Add widgets here to appear in your sidebar.', 'my-custom-blog'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'my_custom_blog_widgets_init');
