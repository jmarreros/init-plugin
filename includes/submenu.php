<?php

namespace dcms\xxxx\includes;

/**
 * Class for creating a dashboard submenu
 */
class Submenu{
    // Constructor
    public function __construct(){
        add_action('admin_menu', [$this, 'register_submenu']);
    }

    // Register submenu
    public function register_submenu(){
        add_submenu_page(
            DCMS_SUBMENU,
            __('xxxx','dcms-xxxx-yyyy'),
            __('xxxx','dcms-xxxx-yyyy'),
            'manage_options',
            'xxxx-yyyy',
            [$this, 'submenu_page_callback']
        );
    }

    // Callback, show view
    public function submenu_page_callback(){
        include_once (DCMS_xxxx_PATH. '/views/main-screen.php');
    }
}