<?php
namespace Setup\Taxonomies;
class RiddleType
{
    /**
     * Registers Event Post Type
     */
    public static function register()
    {
        $labels = array(
            'name' => _x( 'Riddle Types', 'taxonomy general name' ),
            'singular_name' => _x( 'Riddle Type', 'taxonomy singular name' ),
            'search_items' =>  __( 'Search Riddle Types' ),
            'all_items' => __( 'All Riddle Types' ),
            'parent_item' => __( 'Parent Riddle Type' ),
            'parent_item_colon' => __( 'Parent Riddle Type:' ),
            'edit_item' => __( 'Edit Riddle Type' ),
            'update_item' => __( 'Update Riddle Type' ),
            'add_new_item' => __( 'Add New Riddle Type' ),
            'new_item_name' => __( 'New Riddle Type Name' ),
        );
        register_taxonomy('riddle_types',array('riddle'),array(
            'hierarchical' => true,
            'labels' => $labels,
            'show_in_rest' => true,
            'show_admin_column' => true,
            //'rest_base' => 'member_types',
            //'rest_controller_class' => 'WP_REST_Terms_Controller',
            'rewrite' => array(  'hierarchical' => true ),
        ));
    }
}