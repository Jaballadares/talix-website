<?php

function news() {
  register_post_type( 'news',
    array( 'labels' => array(
      'name' => __( 'News', 'bonestheme' ),
      'singular_name' => __( 'News', 'bonestheme' ),
      'all_items' => __( 'All News', 'bonestheme' ),
      'add_new' => __( 'Add New', 'bonestheme' ),
      'add_new_item' => __( 'Add New News', 'bonestheme' ),
      'edit' => __( 'Edit', 'bonestheme' ),
      'edit_item' => __( 'Edit News', 'bonestheme' ),
      'new_item' => __( 'New News Article', 'bonestheme' ),
      'view_item' => __( 'View News', 'bonestheme' ),
      'search_items' => __( 'Search News', 'bonestheme' ),
      'not_found' =>  __( 'Nothing found in the Database.', 'bonestheme' ),
      'not_found_in_trash' => __( 'Nothing found in Trash', 'bonestheme' ),
      'parent_item_colon' => ''
      ),
      'description' => __( 'This is the News post type', 'bonestheme' ),
      'public' => true,
      'publicly_queryable' => true,
      'exclude_from_search' => false,
      'show_ui' => true,
      'query_var' => true,
      'menu_position' => 4,
      'has_archive' => true,
      'capability_type' => 'post',
      'hierarchical' => false,
      'supports' => array( 'title', 'editor'),
      'rewrite' => array( 'slug' => 'news', 'with_front' => false ),
    )
  );
}

  add_action( 'init', 'news');

?>
