<?php
/**
 * Created by PhpStorm.
 * User: joachim
 * Date: 4/14/18
 * Time: 4:15 PM
 */
require_once '../assets/CashDrawer.php';
session_start();

switch ($_GET['action']) {
    case 'addCashdrawer':
        {
            addCashDrawer();
            break;
        }
    default:
        {
            header("location: ../index.php");
            exit();
        }
}

function addCashDrawer(){
    $drawerName = $_GET['drawerName'];
    $cashDrawer = new CashDrawer($_GET['05'], $_GET['1'], $_GET['2'], $_GET['5'], $_GET['10'], $_GET['20'], $_GET['50'],
        $_GET['100'], $_GET['200'], $_GET['500'], $_GET['1000']);
    if($drawerName == 'drawer1'){
        $_SESSION['drawer1'] = $cashDrawer;
    }else{
        $_SESSION['drawer2'] = $cashDrawer;
    }
    $_SESSION['05'] = $_GET['05'];
    header("location: ../index.php");
    exit();
}

