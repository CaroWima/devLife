<?php 
    require_once $_SERVER['HOME'].'/core/init.php';
    require_once $_SERVER['HOME'].'/includes/header.inc.php';
    if(!isset($_SESSION['user'])) {
        $_SESSION['user'] = "guest";
        if($_SESSION['user'] !== "guest") {
            require_once 'hidden.inc.php';
        } else {
            require_once 'guest.inc.php';
        }
    }
    require_once $_SERVER['HOME'].'/includes/footer.inc.php';
?>