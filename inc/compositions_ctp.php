<?php
// Our custom post type function
/*
* Creating a function to create our CPT
*/


/* register custom taxonomy */
function tolka_new_taxonomy() {

    register_taxonomy(
        'genres',
        'compositions',
        array(
            'label' => __( 'Genre' ),
            'rewrite' => array( 'slug' => 'genre' ),
            'hierarchical' => true,
        )
    );
}
add_action( 'init', 'tolka_new_taxonomy' );

 /*Associate Custom Tax with Custom Post Type, Compositions */
register_taxonomy_for_object_type( 'genres' , 'compositions');

 /*Register Custom Post Type for Compositions */
function custom_post_type_compositions() {

// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Compositions', 'Post Type General Name', 'understrap' ),
        'singular_name'       => _x( 'Composition', 'Post Type Singular Name', 'understrap' ),
        'menu_name'           => __( 'Compositions', 'understrap' ),
        'parent_item_colon'   => __( 'Parent Compositions', 'understrap' ),
        'all_items'           => __( 'All Compositions', 'understrap' ),
        'view_item'           => __( 'View Compositions', 'understrap' ),
        'add_new_item'        => __( 'Add New Compositions', 'understrap' ),
        'add_new'             => __( 'Add New', 'understrap' ),
        'edit_item'           => __( 'Edit Compositions', 'understrap' ),
        'update_item'         => __( 'Update Compositions', 'understrap' ),
        'search_items'        => __( 'Search Compositions', 'understrap' ),
        'not_found'           => __( 'Not Found', 'understrap' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'understrap' ),
    );

// Set other options for Custom Post Type

    $args = array(
        'label'               => __( 'Compositions', 'understrap' ),
        'description'         => __( 'Compositions', 'understrap' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
    );

    // Registering your Custom Post Type
    register_post_type( 'compositions', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not
* unnecessarily executed.
*/

add_action( 'init', 'custom_post_type_compositions', 0 );


//  /*Register Custom Post Type for Recordings */
// function custom_post_type_recordings() {

// // Set UI labels for Custom Post Type
//     $labels = array(
//         'name'                => _x( 'Recordings', 'Post Type General Name', 'understrap' ),
//         'singular_name'       => _x( 'Recordings', 'Post Type Singular Name', 'understrap' ),
//         'menu_name'           => __( 'Recordings', 'understrap' ),
//         'parent_item_colon'   => __( 'Parent Recordings', 'understrap' ),
//         'all_items'           => __( 'All Recordings', 'understrap' ),
//         'view_item'           => __( 'View Recordings', 'understrap' ),
//         'add_new_item'        => __( 'Add New Recordings', 'understrap' ),
//         'add_new'             => __( 'Add New', 'understrap' ),
//         'edit_item'           => __( 'Edit Recordings', 'understrap' ),
//         'update_item'         => __( 'Update Recordings', 'understrap' ),
//         'search_items'        => __( 'Search Recordings', 'understrap' ),
//         'not_found'           => __( 'Not Found', 'understrap' ),
//         'not_found_in_trash'  => __( 'Not found in Trash', 'understrap' ),
//     );

// // Set other options for Custom Post Type

//     $args = array(
//         'label'               => __( 'Recordings', 'understrap' ),
//         'description'         => __( 'Recordings', 'understrap' ),
//         'labels'              => $labels,
//         // Features this CPT supports in Post Editor
//         'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
//         // You can associate this CPT with a taxonomy or custom taxonomy.
//         /*'taxonomies'          => array( 'genres' ),*/
//         /* A hierarchical CPT is like Pages and can have
//         * Parent and child items. A non-hierarchical CPT
//         * is like Posts.
//         */
//         'hierarchical'        => false,
//         'public'              => true,
//         'show_ui'             => true,
//         'show_in_menu'        => true,
//         'show_in_nav_menus'   => true,
//         'show_in_admin_bar'   => true,
//         'menu_position'       => 6,
//         'can_export'          => true,
//         'has_archive'         => true,
//         'exclude_from_search' => false,
//         'publicly_queryable'  => true,
//         'capability_type'     => 'post',
//     );

//     // Registering your Custom Post Type
//     register_post_type( 'Recordings', $args );

// }

// /* Hook into the 'init' action so that the function
// * Containing our post type registration is not
// * unnecessarily executed.
// */

// add_action( 'init', 'custom_post_type_recordings', 0 );
