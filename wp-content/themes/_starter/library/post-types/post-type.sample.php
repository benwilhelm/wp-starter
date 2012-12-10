<?php 

add_action('init','add_pattern_type') ;
function add_pattern_type() {
  register_post_type(
    'production' ,
    array(
      'labels' => array(
        'name' => 'Productions', 'post type general name' ,
        'singular_name' => 'Production', 'post type singular name' ,
        'add_new' => 'Add New Production' ,
        'add_new_item' => 'Add New Production' ,
        'edit_item' => 'Edit Production' ,
        'new_item' => 'New Production' ,
        'all_items' => 'All Productions' ,
        'view_item' => 'View Production' ,
        'search_items' => 'Search Productions' ,
        'not_found' =>  'No productions found' ,
        'not_found_in_trash' => 'No productions found in Trash' , 
        'parent_item_colon' => '',
        'menu_name' => 'Productions'      
      ) ,
      'public' => true ,
      'has_archive' => true ,
      'menu_position' => 5 ,
      'hierarchical' => true ,
      
      'supports' => array(
        'title',
        'editor',
        //'comments',
        //'revisions',
        'author',
        //'excerpt',
        'thumbnail',
        'page-attributes'
       ),
      
    )
  ) ;
}


