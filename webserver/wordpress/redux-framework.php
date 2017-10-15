<?php

// Prevent Redux Framework HTTP requests
$GLOBALS['redux_update_check'] = 1;
add_filter( 'redux/ascend/aURL_filter', '__return_empty_string' );
add_filter( 'get_user_option_' . 'r_tru_u_x', function () {
    return array(
        'expires' => PHP_INT_MAX,
        'id'      => '',
    );
} );
add_action( 'after_setup_theme', function () {
    remove_all_actions( 'wp_ajax_nopriv_redux_p' );
    remove_all_actions( 'wp_ajax_redux_p' );
} );

// Search for 'opt_name' in the code
