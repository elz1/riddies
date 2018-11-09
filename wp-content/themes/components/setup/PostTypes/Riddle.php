<?php
namespace Setup\PostTypes;

class Riddle
{
    /**
     * Registers Riddle Post Type
     */
    public static function register()
    {
        register_post_type( 'riddle',
            array(
                'labels' => array(
                    'name' => __( 'Riddles', 'components-theme' ),
                    'singular_name' => __( 'Riddle', 'components-theme' ),
                    'all_items' => __( 'All Riddles', 'components-theme' ),
                    'add_new' => __( 'Add New', 'components-theme' ),
                    'add_new_item' => __( 'Add New Riddle', 'components-theme' ),
                    'edit' => __( 'Edit', 'components-theme' ),
                    'edit_item' => __( 'Edit Riddle', 'components-theme' ),
                    'new_item' => __( 'New Riddle', 'components-theme' ),
                    'view_item' => __( 'View Riddle', 'components-theme' ),
                    'search_items' => __( 'Search Riddles', 'components-theme' ),
                    'not_found' =>  __( 'Nothing found in the Database.', 'components-theme' ),
                    'not_found_in_trash' => __( 'Nothing found in Trash', 'components-theme' ),
                    'parent_item_colon' => ''
                ),
                'description' => __( 'Add Riddles', 'components-theme' ),
                'public' => true,
                'publicly_queryable' => true,
                'exclude_from_search' => false,
                'show_ui' => true,
                'query_var' => true,
                'menu_position' => 9,
                'menu_icon' => 'dashicons-format-chat',
                'rewrite'	=> array( 'slug' => 'riddie', 'with_front' => false ),
                'has_archive' => 'all-riddies',
                'capability_type' => 'post',
                'hierarchical' => false,
                'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'revisions')
            )
        );
    }
}
