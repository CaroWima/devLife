<?php 

/* !!!  THIS FILE NEEDS TO MUST BE MOVED OUTSIDE OF THE ROOT FOLDER !!! */

/* !!! CHANGE THE PATH IN THE Config.class.php ACCORDINGLY !!! */
return array (
    'mysql' => array(
        'host' => 'mysql',
        'username' => 'root',
        'password' => 'root',
        'db' => 'ipiluwig',
    ),
    'remember' => array(
        'cookie_name' => 'hash',
        'cookie_expiry' => 604800,
    ),
    'sessions' => array(
        'session_name' => 'user',
        'token_name' => 'token',
    ),    
);
