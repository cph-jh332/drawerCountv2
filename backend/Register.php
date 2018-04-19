<?php
require_once '../assets/Person.php';
require_once '../db/dbcontroller.php';

class Register
{
    private $dbcontroller;

    public function __construct()
    {
        $this->dbcontroller = new dbcontroller();
    }

    public function register($name, $store, $password){
        $person = new Person(0, $name, $store);
        if($this->dbcontroller->addPerson($person, password_hash($password, PASSWORD_BCRYPT))){
            return true;
        }else{
            return false;
        }
    }
}