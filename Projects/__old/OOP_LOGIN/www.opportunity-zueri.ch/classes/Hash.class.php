<?php

class Hash {
    public static function make($string, $salt = '') {
        $salt = self::salt(32);    
        /*
        echo 'Password:' . $string . '<br>';
        echo 'Salt: ' . $salt . '<br>';
        echo 'Salted pw: ' . $string.$salt . '<br>';
        echo 'Shashed pw: ' . password_hash($string.$salt, PASSWORD_DEFAULT) . '<br><br>';
        */
        return password_hash($string . $salt, PASSWORD_DEFAULT);
        // return hash('sha256', $string . $salt); old code
    }

    public static function salt($length) {
        return bin2hex(random_bytes($length));
    }

    public static function unique() {
        return self::make(uniqid());
    }
}