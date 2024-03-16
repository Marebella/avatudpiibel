<?php

    /**
     * Enqueues scripts and styles.
     */
    add_action(
        'wp_enqueue_scripts',
        function () {
            // Load reset style
            wp_enqueue_style('main-style', get_theme_file_uri('reset.css'), array(), '', 'screen');
        }
    );

    add_action('init', 'my_remove_editor_from_post_type');
    function my_remove_editor_from_post_type() {
        remove_post_type_support( 'page', 'editor' );
    }

?>