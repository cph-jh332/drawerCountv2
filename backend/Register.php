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
        if($this->dbcontroller->addPerson($person, sha1($password))){
            return true;
        }else{
            return false;
        }
    }
}