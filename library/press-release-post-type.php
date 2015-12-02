<?php

add_action( 'after_switch_theme', 'bones_flush_rewrite_rules' );

function bones_flush_rewrite_rules() {
  flush_rewrite_rules();
}


function press_release() {
  register_post_type( 'press_release',
    array( 'labels' => array(
      'name' => __( 'Press Releases', 'bonestheme' ),
      'singular_name' => __( 'Press Release', 'bonestheme' ),
      'all_items' => __( 'All Press Releases', 'bonestheme' ),
      'add_new' => __( 'Add New', 'bonestheme' ),
      'add_new_item' => __( 'Add New Press Release', 'bonestheme' ),
      'edit' => __( 'Edit', 'bonestheme' ),
      'edit_item' => __( 'Edit Press Release', 'bonestheme' ),
      'new_item' => __( 'New Press Release', 'bonestheme' ),
      'view_item' => __( 'View Press Release', 'bonestheme' ),
      'search_items' => __( 'Search Press Releases', 'bonestheme' ),
      'not_found' =>  __( 'Nothing found in the Database.', 'bonestheme' ),
      'not_found_in_trash' => __( 'Nothing found in Trash', 'bonestheme' ),
      'parent_item_colon' => ''
      ),
      'description' => __( 'This is the Press Release post type', 'bonestheme' ),
      'public' => true,
      'publicly_queryable' => true,
      'exclude_from_search' => false,
      'show_ui' => true,
      'query_var' => true,
      'menu_position' => 4,
      'rewrite' => array( 'slug' => 'press-releases', 'with_front' => false ),
      'has_archive' => true,
      'capability_type' => 'post',
      'hierarchical' => false,
      'supports' => array( 'title', 'editor')
    )
  );
}

  add_action( 'init', 'press_release');

?>
