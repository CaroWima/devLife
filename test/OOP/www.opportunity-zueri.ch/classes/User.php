<?php


Class User {

    // Properties
    // private protected public

    private $password;

    protected $age;

    public $username;


    
    
    // Methods
    // private protected public
    

    public function __construct($user, $age, $pw)
    {
        $this->username = $user;
        $this->password = $pw;
        $this->age = $age;
    }


    
    public function showUsername()
    {
        echo $this->username;
    }

    public static function createUser($user, $age, $pw)
    {
        $user = new User($user, $age, $pw);

        return $user;
    }

}