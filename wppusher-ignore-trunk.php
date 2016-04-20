<?php

/**
 * Plugin Name: WP Pusher Ignore Trunk
 */

// If this file is called directly, abort.
use Pusher\Pusher;

if ( ! defined('WPINC')) {
    die;
}

require __DIR__ . '/autoload.php';

add_action('wppusher_register_dependency', function(Pusher $pusher) {
    $pusher->bind('Pusher\Plugin', 'PusherIgnoreTrunk\Plugin');
});
