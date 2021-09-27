<?php

require_once 'classes/User.php';
require_once 'varDump.func.php';


//$user = new User('UC', '39', 'password');

//var_dump($urs);

//varDump($urs);

$user = User::createUser('UC', '39', 'password');

varDump($user);

