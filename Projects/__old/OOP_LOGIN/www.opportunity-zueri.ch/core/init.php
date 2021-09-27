<?php
session_start();
/*
echo '<pre>';
var_dump($_SERVER);
echo '</pre>';
*/
if(!isset($_SERVER["DOCUMENT_ROOT"])) {
    if(!isset($_SERVER['CONTEXT_DOCUMENT_ROOT'])) {
        if(!isset($_SERVER["HOME"])) {
            echo "Sorry, there is a Problem with the including of content.";
        } else {
            $_SERVER["DOCUMENT_ROOT"] = $_SERVER['HOME'];
        }
    } else {
        $_SERVER["DOCUMENT_ROOT"] = $_SERVER['CONTEXT_DOCUMENT_ROOT'];
    }

} 


//preset paths to standard include folders (concat them with PATH_SEPARATOR)


$incPaths = $_SERVER['DOCUMENT_ROOT'] . '/includes';
$incPaths .= PATH_SEPARATOR;
$incPaths .= $_SERVER['DOCUMENT_ROOT'] . '/classes';
$incPaths .= PATH_SEPARATOR;
$incPaths .= $_SERVER['DOCUMENT_ROOT'] . '/projects/myProject/php';
set_include_path($incPaths);


spl_autoload_register(function($class) {
    require_once $class . '.class.php';
});

require_once $_SERVER['HOME'].'/functions/sanitize.php';