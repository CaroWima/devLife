<?php
//start session and initialize
session_start();

if(!isset($_SERVER['DOCUMENT_ROOT'])) {
    $_SERVER['DOCUMENT_ROOT'] = $_SERVER['CONTEXT_DOCUMENT_ROOT'];
    if(!isset($_SERVER['HOME'])) {
        $_SERVER['HOME'] = $_SERVER['CONTEXT_DOCUMENT_ROOT'];
        
    }
}

if(!isset($_SERVER['CONTEXT_DOCUMENT_ROOT'])) {
    $_SERVER['CONTEXT_DOCUMENT_ROOT'] = $_SERVER['DOCUMENT_ROOT'];
    if(!isset($_SERVER['HOME'])) {
        $_SERVER['HOME'] = $_SERVER['DOCUMENT_ROOT'];
    }
}

//preset paths to standard include folders (concat them with PATH_SEPARATOR)
$incPaths = $_SERVER['CONTEXT_DOCUMENT_ROOT'] . '/php';
$incPaths .= PATH_SEPARATOR;
$incPaths .= $_SERVER['CONTEXT_DOCUMENT_ROOT'] . '/projects/js_nutshell/inc';
set_include_path($incPaths);

//includes required for page templates
require_once 'auth.php';
//include 'db_access.php';

//Tracing
//define('TRACE_DB_ACCESS', false);
