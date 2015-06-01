<?php

/* 
 * @author Vale
 * @created on Jun 1, 2015
 * @created at 8:09:46 PM
 */

function escape($string) {
    return htmlentities($string, ENT_QUOTES, 'UTF-8');
}