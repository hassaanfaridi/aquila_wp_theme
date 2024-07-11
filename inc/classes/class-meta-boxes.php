<?php
/**
 * Register metaboxes
 * 
 * @package Aquila 
 */

namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class Meta_Boxes {
    use Singleton;

    protected function __construct() {
        // load class.
        
        $this->setup_hooks();
    }

    protected function setup_hooks(){
        /**
         * Actions
         */
        add_action( 'add_meta_boxes', [$this, 'add_custom_meta_box'] );
    }
    public function add_meta_box( $post ) {
        $screens = ['post'];
        foreach ($screens as $screen) {
            add_meta_box(
                'hide-page-title',
                __( 'Hide page title', 'aquila' ),
                [$this, 'custom_meta_box_html'],
                $screen

            );
        }

        
    }


}