<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style')
);
}

function bourgeon_create_post_type() {
  register_post_type( 'seminar',
    array(
      'labels' => array(
        'name'          => 'セミナー情報',
        'singular_name' => 'セミナー情報',
      ),
      'public' => true,
      'menu_position' => 5,
      'has_archive'   => true,
      'supports' => array(
        'title',
        'editor',
        'excerpt',
        'thumbnail',
        'custom-fields',
      ),
    )
  );

  register_post_type( 'info',
    array(
      'labels' => array(
        'name'          => 'お知らせ',
        'singular_name' => 'お知らせ',
      ),
      'public'        => false,
      'show_ui'       => true,
      'menu_position' => 5,
      'has_archive'   => true,
      'supports' => array(
        'title',
        'editor',
        'excerpt',
      ),
    )
  );
}
add_action( 'init', 'bourgeon_create_post_type', 1 );


function bourgeon_create_taxonomies() {
  $labels = array(
    'name'          => 'セミナー内容',
    'singular_name' => 'セミナー内容',
  );

  register_taxonomy( 'target', array( 'seminar' ),
    array(
      'hierarchical' => false,
      'labels'       => $labels,
      'show_ui'      => true,
    )
  );
}
add_action( 'init', 'bourgeon_create_taxonomies', 0 );
?>
