<?php
/**
 * Custom Taxonomies
 * @package  Nella Core 1.0
 */

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

if (!function_exists('ihosting_core_create_taxonomy_testimonial')) {
    
    function ihosting_core_create_taxonomy_testimonial() {
        // Taxonomy 
        $labels = array(
        	'name'                       => _x( 'Testimonial Categories', 'Testimonial Categories', 'ihosting-core' ),
        	'singular_name'              => _x( 'Testimonial Category', 'Testimonial Category', 'ihosting-core' ),
        	'menu_name'                  => __( 'Testimonial Categories', 'ihosting-core' ),
        	'all_items'                  => __( 'All Testimonial Categoties', 'ihosting-core' ),
        	'parent_item'                => '',
        	'parent_item_colon'          => '',
        	'new_item_name'              => __( 'New Testimonial Category', 'ihosting-core' ),
        	'add_new_item'               => __( 'Add New Testimonial Category', 'ihosting-core' ),
        	'edit_item'                  => __( 'Edit Testimonial Category', 'ihosting-core' ),
        	'update_item'                => __( 'Update Testimonial Category', 'ihosting-core' ), 
        	'search_items'               => __( 'Search Testimonial Category', 'ihosting-core' ),
        	'add_or_remove_items'        => __( 'Add New or Delete Testimonial Category', 'ihosting-core' ),
        	'choose_from_most_used'      => __( 'Choose from most used', 'ihosting-core' ),
        	'not_found'                  => __( 'Testimonial category not found', 'ihosting-core' ),
        ); 
        $args = array(
        	'labels'                     => $labels,
        	'hierarchical'               => true,
        	'public'                     => true,
        	'show_ui'                    => true,
        	'show_admin_column'          => true,
        	'show_in_nav_menus'          => true,
        	'show_tagcloud'              => false, 
            'hierarchical'               => true
        );
        register_taxonomy( 'testimonial_cat', array( 'testimonial' ), $args );  
        //flush_rewrite_rules();
    }
    add_action('init', 'ihosting_core_create_taxonomy_testimonial');
} 
