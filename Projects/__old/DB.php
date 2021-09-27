<?php

// Orginal 
/*
define('DB_NAME', getenv('DB_NAME'));
define('DB_USER', getenv('DB_USER'));
define('DB_PASSWORD', getenv('DB_PASSWORD'));
define('DB_HOST', getenv('DB_HOST'));
*/

// $dbname = 'demo';
// $dbuser = 'root';
// $dbpass = 'root';
// $dbhost = 'mysql';
// $connection = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASSWORD);        


// NEW VERSION TO FROM LOCAL TO LIVESERVER
if (strpos($_SERVER['HTTP_HOST'], 'localhost:') !== false || strpos($_SERVER['HTTP_HOST'], '10.211.54.95:') !== false) {
    //DB runs in local Docker container: localhost
    $intDB['DB_HOST'] = "mysql";
    $intDB['DB_NAME'] = "demo";
    $intDB['DB_USER'] = 'root';
    $intDB['DB_PASSWORD'] = 'root';
} else {
    $intDB['DB_HOST'] = "ipiluwig.mysql.db.internal";
    $intDB['DB_NAME'] = "ipiluwig_js"; // ?
    $intDB['DB_USER'] = 'ipiluwig_?';  // ?
    $intDB['DB_PASSWORD'] = '??';      // ? Mit Chris anschauen(benötigt evtl noch das .sql file um die Datanbank zuerstellen)
}






$connection = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASSWORD);        
