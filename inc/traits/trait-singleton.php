<?php

namespace AQUILA_THEME\Inc\Traits;

trait Singleton {
    public function __construct() {
        // constructor logic if needed
    }

    public function __clone() {
        // prevent cloning
    }

    final public static function get_instance() {
        static $instance = [];
        
        $called_class = get_called_class();

        if ( !isset( $instance[ $called_class ] ) ) {
            $instance[ $called_class ] = new $called_class();

            do_action(sprintf('aquila_theme_singleton_ini%s', $called_class));
        }
        return $instance[ $called_class ];
    }
}
