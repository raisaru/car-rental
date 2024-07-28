<?php
function create_posttype(){
    register_post_type('news',
       array(
          'labels'=> array(
          'name'=> ('News'),
          'singular_name'=>('New'),
           ) ,
        'public'=> true,
        'has_archive'=> false,
        'rewrite'=> array('slug'=>'news'),
        'menu_icon'=> 'dashicons-admin-site-alt3', 
        'support'=> array('title', 'thumbnail', 'editor'),
        //'show_in_rest'=> true,
        )
    );
    
}
add_action( 'init', 'create_posttype' );
//add_theme_support('post-thumbnails');


// Rent
add_action('init', 'rent_register_post_type');
function rent_register_post_type() {
    register_post_type('rent', array(

        'labels' => array(
        'name' => 'Rent',
        'add_new' => 'Add New Rent',
        'edit_item' => 'Edit Rent',
        'new_item' => 'New item Rent',
        'view_item' => 'View item Rent',
       
        ),
       
        'public' => true,
        'publicly_queryable' => true, 
        'show_ui' => true, 
        'exclude_from_search' => false,
        'supports' => array(

            'title', 'thumbnail', 'editor',  
        ),
        'menu_position' => 5,
        'has_archive' => true,
        'menu_icon' => 'dashicons-menu-alt3',
        'rewrite' => array( 'slug' => 'rent' ),
         'show_in_rest'=> true,
        
    ));
}
add_action('init', 'create_rent_taxonomy');
add_theme_support( 'post-thumbnails' );
function create_rent_taxonomy() {
    // Labels for the custom taxonomy
    $labels = array(
        'name' => _x('Car Types', 'taxonomy general name'),
        'singular_name' => _x('Car Type', 'taxonomy singular name'),
        'search_items' => __('Search Car Types'),
        'all_items' => __('All Car Types'),
        'parent_item' => __('Parent Car Type'),
        'parent_item_colon' => __('Parent Car Type:'),
        'edit_item' => __('Edit Car Type'),
        'update_item' => __('Update Car Type'),
        'add_new_item' => __('Add New Car Type'),
        'new_item_name' => __('New Car Type Name'),
        'menu_name' => __('Car Types'),
    );

    // Arguments for the custom taxonomy
    $args = array(
        'hierarchical' => true, 
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'car-type'),
    );

    // Register the taxonomy
    register_taxonomy('car_type', array('rent'), $args);
}

function create_car_model_taxonomy() {
    // Labels for the custom taxonomy
    $labels = array(
        'name' => _x('Car Models', 'taxonomy general name'),
        'singular_name' => _x('Car Model', 'taxonomy singular name'),
        'search_items' => __('Search Car Models'),
        'all_items' => __('All Car Models'),
        'parent_item' => __('Parent Car Model'),
        'parent_item_colon' => __('Parent Car Model:'),
        'edit_item' => __('Edit Car Model'),
        'update_item' => __('Update Car Model'),
        'add_new_item' => __('Add New Car Model'),
        'new_item_name' => __('New Car Model Name'),
        'menu_name' => __('Car Models'),
    );

    // Arguments for the custom taxonomy
    $args = array(
        'hierarchical' => true, 
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'car-model'),
    );

    // Register the taxonomy
    register_taxonomy('car_model', array('rent'), $args);
}
add_action('init', 'create_car_model_taxonomy');



//feature
add_action('init', 'feature_register_post_type');
function feature_register_post_type() {
    register_post_type('feature', array(
        'labels' => array(
        'name' => 'Feature',
        'add_new' => 'Add New feature',
        'edit_item' => 'Edit feature',
        'new_item' => 'New item feature',
        'view_item' => 'View item feature',
       
        ),
       
        'public' => true,
        'publicly_queryable' => true, 
        'show_ui' => true, 
        'exclude_from_search' => false,
        'supports' => array(
            'title', 'thumbnail', 'editor',   
        ),
        'menu_position' => 5,
        'has_archive' => true,
        'menu_icon' => 'dashicons-category',
        'rewrite' => array( 'slug' => 'feature' ),
    ));
}


//usage
add_action('init', 'usage_register_post_type');
function usage_register_post_type() {
    register_post_type('usage', array(
        'labels' => array(
        'name' => 'Usage',
        'add_new' => 'Add New usage',
        'edit_item' => 'Edit usage',
        'new_item' => 'New item usage',
        'view_item' => 'View item usage',
       
        ),
       
        'public' => true,
        'publicly_queryable' => true, 
        'show_ui' => true, 
        'exclude_from_search' => false,
        'supports' => array(
            'title', 'thumbnail', 'editor',  
        ),
        'menu_position' => 5,
        'has_archive' => true,
        'menu_icon' => 'dashicons-chart-bar',
        'rewrite' => array( 'slug' => 'usage' ),
    ));
}


//information
add_action('init', 'information_register_post_type');
function information_register_post_type() {
    register_post_type('information', array(
        'labels' => array(
        'name' => 'Information',
        'add_new' => 'Add New information',
        'edit_item' => 'Edit information',
        'new_item' => 'New item information',
        'view_item' => 'View item information',
       
        ),
       
        'public' => true,
        'publicly_queryable' => true, 
        'show_ui' => true, 
        'exclude_from_search' => false,
        'supports' => array(
            'title', 'editor', 'thumbnail',    
        ),
        'menu_position' => 5,
        'has_archive' => true,
        'menu_icon' => 'dashicons-phone',
        'rewrite' => array( 'slug' => 'information' ),
        //'show_in_rest'=> true,
    ));
}


//access
add_action('init', 'access_register_post_type');
function access_register_post_type() {
    register_post_type('access', array(
        'labels' => array(
        'name' => 'Acess',
        'add_new' => 'Add New access',
        'edit_item' => 'Edit access',
        'new_item' => 'New item access',
        'view_item' => 'View item access',
       
        ),
       
        'public' => true,
        'publicly_queryable' => true, 
        'show_ui' => true, 
        'exclude_from_search' => false,
        'supports' => array(
            'title',   
        ),
        'menu_position' => 5,
        'has_archive' => true,
        'menu_icon' => 'dashicons-media-code',
        'rewrite' => array( 'slug' => 'access' ),
    ));
}




