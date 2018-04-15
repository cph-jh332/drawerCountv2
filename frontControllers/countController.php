<?php
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
            break;
        }
    case 'viewCounts':
        {
            viewCounts();
            break;
        }
    default:
        {
            header("location: ../index.php");
            exit();
        }
}

function addCashDrawer()
{
    $calculator = new Calculator();
    $drawerName = $_GET['drawerName'];
    $_SESSION['drawerName'] = $drawerName;
    $cashDrawer = new CashDrawer($_GET['05'], $_GET['1'], $_GET['2'], $_GET['5'], $_GET['10'], $_GET['20'], $_GET['50'],
        $_GET['100'], $_GET['200'], $_GET['500'], $_GET['1000'], $_GET['extra']);
    if ($drawerName == 'drawer1') {
        $_SESSION['drawer1'] = $cashDrawer;
        $_SESSION['deposit'] = $calculator->calculateDeposit(2500, $cashDrawer);
        $_SESSION['diff'] = $calculator->calculateDiff($cashDrawer, $_GET['toDeposit'], 2500);
    } else {
        $_SESSION['drawer2'] = $cashDrawer;
        $_SESSION['deposit'] = $calculator->calculateDeposit(2500, $cashDrawer);
        $_SESSION['diff'] = $calculator->calculateDiff($cashDrawer, $_GET['toDeposit'], 2500);
    }
    header("location: ../todeposit.php");
    exit();
}

function submitCount()
{
    $dbcontroller = new dbcontroller();
    $dbcontroller->addCount(new Count(0, 2500, 2500, $_SESSION['deposit'], $_SESSION['diff'], $_SESSION['user']->getId()));
    unset($_SESSION['drawer1']);
    unset($_SESSION['drawer2']);
    unset($_SESSION['deposit']);
    unset($_SESSION['diff']);
    header("location: ../index.php");
    exit();
}

function viewCounts()
{
    $dbcontroller = new dbcontroller();
    $counts = $dbcontroller->getCounts();
    //reversing the array to get the latest first
    $_SESSION['counts'] = array_reverse($counts);
    header("location: ../viewcounts.php");
    exit();
}
