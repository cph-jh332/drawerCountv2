<?php
/**
 * Created by PhpStorm.
 * User: craci
 * Date: 15-04-2018
 * Time: 14:09
 */
session_start();
require_once '../backend/Register.php';
$register = new Register();

$name = $_GET['name'];
$password1 = $_GET['password1'];
$password2 = $_GET['password2'];
$store = $_GET['store'];

if ($password1 === $password2) {
    $registered = $register->register($name, $store, $password1);

    if ($register) {
        header("location: ../index.php");
        exit();
    } else {
        header("location: ../register.php");
        exit();
    }
} else {
    header("location: ../register.php?error=not the same password");
    exit();
}

