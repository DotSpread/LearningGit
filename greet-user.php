<?php
/**
 * Plugin Name: Greet User
 * Author: Peter Suhm
 * Version: 0.0.1
 */
$checkForGreetingFilter = function() {
    if (isset($_GET['hello'])) {
        echo "<h1>Hello {$_GET['hello']}!</h1>";
        die();
    }
};
add_filter('wp_loaded', $checkForGreetingFilter);