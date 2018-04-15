<?php
/**
 * Created by PhpStorm.
 * User: craci
 * Date: 15-04-2018
 * Time: 13:21
 */
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
        if(sha1($password) === $user['password']){
            return $user['user'];
        }else{
            return null;
        }
    }
}