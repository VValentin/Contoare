<?php

/* 
 * @author Vale
 * @created on Jun 1, 2015
 * @created at 8:09:27 PM
 */

session_start();

$GLOBALS['config'] = array (
    'mysql' => array(
        'host' => '127.0.0.1',
        'username' => 'root',
        'password' => '',
        'db' => 'contoare'
    ),
    'remember' => array(
        'cookie_name' => 'hash',
        'cookie_expiry' => 604800
    ),
    'session' => array(
        'session_name' => 'user'
    )
);

spl_autoload_register(function($class) {
    require_once 'classes/' . $class . '.php';
});

require_once 'functions/sanitize.php';