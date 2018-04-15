<?php
/**
 * Created by PhpStorm.
 * User: craci
 * Date: 15-04-2018
 * Time: 13:20
 */

session_start();
require_once '../backend/Login.php';
$login = new Login();

$name = $_GET['name'];
$password = $_GET['password'];

$user = $login->login($name, $password);

if($user !== null){
    $_SESSION['user'] = $user;
    header("location: ../index.php");
    exit();
}else{
    header("location: ../login.php");
    exit();
}