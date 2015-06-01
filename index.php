<?php

/* 
 * @author Vale
 * @created on Jun 1, 2015
 * @created at 7:14:11 PM
 */

require_once 'core/init.php';
$user = DB::getInstance()->get('users', array('username', '=', 'vale'));

if (!$user->count()) {
    echo 'No user';
} else {
    echo 'OK!';
}