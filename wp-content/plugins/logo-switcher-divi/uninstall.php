<?php

// Delete stored data when delete the plugin
if(!defined('WP_UNINSTALL_PLUGIN')){
    die('How are you brother is everything okay?');
}

global $wpdb;

$wpdb->query("DELETE FROM {$wpdb->prefix}options WHERE option_name = 'dls_option'");