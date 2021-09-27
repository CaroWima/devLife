<?php


if(Input::exists()) {
    if(Token::check(Input::get('token'))) {

        $validate = new Validate();
        $validate->check($_POST, array(
            'username' => array('required' => true),
            'password' => array('required' => true)
        ));

        if($validate->passed()) {
            $user = new User();

            $remember = (Input::get('remember') === 'on') ? true : false;
            $login = $user->login(Input::get('username'), Input::get('password'), $remember);

            if($login) {
                Redirect::to('index.php');
            } else {
                echo '<p>Incorrect username or password</p>';
            }
        } else {
            foreach($validate->errors() as $error) {
                echo $error, '<br>';
            }
        }
    }
}
?>
<main>
    <div class="container">
    <form action="" method="POST">
        <label for="username">Username/E-Mail:</label>
        <br>
        <input type="text" name="username" id="username" autocomplete="off">
        <br>
        <label for="password">Password:</label>
        <br>
        <input type="password" name="password" id="password">
        <br>
        <button>Log in</button>
        <br>
        <a href="top-secret.php">Guest Entrance</a>
    </form>
    </div>
</main>