<?php
require_once '../assets/Person.php';
require_once '../db/dbcontroller.php';

class Login
{
    private $dbcontroller;

    public function __construct()
    {
        $this->dbcontroller = new dbcontroller();
    }

    public function login($name, $password){
        $user = $this->dbcontroller->getPerson($name);
        if(password_verify($password, $user['password'])){
            return $user['user'];
        }else{
            return null;
        }
    }
}