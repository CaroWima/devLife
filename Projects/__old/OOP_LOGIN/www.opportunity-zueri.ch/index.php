<?php 
    require_once $_SERVER['HOME'].'/core/init.php';





    if(Session::exists('home')) {
        echo '<p>' . Session::flash('home'). '</p>';
    }
    
    $user = new User(); //Current
    
    if($user->isLoggedIn()) {
        require_once $_SERVER['HOME'].'/includes/header.inc.php';
    ?>
    
        <p>Hello, <a href="profile.php?user=<?php echo escape($user->data()->username);?>"><?php echo escape($user->data()->username); ?></p>
    
        <ul>
            <li><a href="update.php">Update Profile</a></li>
            <li><a href="changepassword.php">Change Password</a></li>
            <li><a href="logout.php">Log out</a></li>
        </ul>
    <?php
    
    if($user->hasPermission('admin')) {
        echo '<p>You are a Administrator!</p>';
    }
    
    if($user->hasPermission('moderator')) {
        echo '<p>You are a Moderator!</p>';
    }
    

    //varDump($user);
    
    } else {
        //echo '<p>You need to <a href="login.php">login</a> or <a href="register.php">register.</a></p>';
        require_once $_SERVER['HOME'].'/includes/header.inc.php';
        require_once $_SERVER['HOME'].'/includes/startpage.inc.php';
    }






    //echo Config::get('mysql/host').'<br>';
    //echo Config::get('mysql/db').'<br>';
    //echo Config::get('mysql/username').'<br>';
    //echo Config::get('mysql/password').'<br>';
    //$data = DB::getInstance();
    //var_dump($data);
    


    require_once $_SERVER['HOME'].'/includes/footer.inc.php';
?>