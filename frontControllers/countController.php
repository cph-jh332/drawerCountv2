<?php
/**
 * Created by PhpStorm.
 * User: joachim
 * Date: 4/14/18
 * Time: 4:15 PM
 */
require_once '../assets/CashDrawer.php';
require_once '../assets/Person.php';
require_once '../db/dbcontroller.php';
require_once '../backend/Calculator.php';
session_start();

switch ($_GET['action']) {
    case 'addCashdrawer':
        {
            addCashDrawer();
            break;
        }
    case 'submitCount':
        {
            submitCount();
        }
    default:
        {
            header("location: ../index.php");
            exit();
        }
}

function addCashDrawer()
{
    $drawerName = $_GET['drawerName'];
    $cashDrawer = new CashDrawer($_GET['05'], $_GET['1'], $_GET['2'], $_GET['5'], $_GET['10'], $_GET['20'], $_GET['50'],
        $_GET['100'], $_GET['200'], $_GET['500'], $_GET['1000']);
    if ($drawerName == 'drawer1') {
        $_SESSION['drawer1'] = $cashDrawer;
    } else {
        $_SESSION['drawer2'] = $cashDrawer;
    }
    header("location: ../index.php");
    exit();
}

function submitCount(){
    $dbcontroller = new dbcontroller();
    $calculator = new Calculator();
    $dbcontroller->addCount(new Count(0, 2500, 2500, $calculator->calculateDeposit(2500, $_SESSION['drawer2']), $_SESSION['user']->getId()));
}
