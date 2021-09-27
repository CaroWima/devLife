<?php

class Config {
    public static function get($path = null, $config = null) {
        if ($path){
            $config = require 'db_config.php';
            $path = explode('/', $path);
            foreach($path as $bit) {
                if(isset($config[$bit])) {
                    $config = $config[$bit];
                }
            }
            return $config;
        }
        return false;
    }
}
