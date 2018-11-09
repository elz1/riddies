<?php
namespace Setup\Taxonomies;
class Episode
{
    /**
     * Registers Event Post Type
     */
    public static function register()
    {
        $labels = array(
            'name' => _x( 'Episodes', 'taxonomy general name' ),
            'singular_name' => _x( 'Episode', 'taxonomy singular name' ),
            'search_items' =>  __( 'Search Episodes' ),
            'all_items' => __( 'All Episodes' ),
            'parent_item' => __( 'Parent Episode' ),
            'parent_item_colon' => __( 'Parent Episode:' ),
            'edit_item' => __( 'Edit Episode' ),
            'update_item' => __( 'Update Episode' ),
            'add_new_item' => __( 'Add New Episode' ),
            'new_item_name' => __( 'New Episode Name' ),
        );
        register_taxonomy('episodes',array('riddle'),array(
            'hierarchical' => false,
            'labels' => $labels,
            'show_in_rest' => true,
            'show_admin_column' => true,
            //'rest_base' => 'member_types',
            //'rest_controller_class' => 'WP_REST_Terms_Controller',
            'rewrite' => array(  'hierarchical' => true ),
        ));
    }
}