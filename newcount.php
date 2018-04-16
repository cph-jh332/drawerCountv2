<?php
session_start();
if ($_SESSION['user'] === null) {
    header("location: login.php");
    exit();
}
?>
<html>
<head>
    <?php require_once './inc/head.php' ?>
    <title>New Count</title>
</head>
<header>
    <?php require_once './inc/header.php'?>
</header>
<body>
<div class="grid-x">
    <div class="cell large-3">&nbsp;</div>
    <div class="cell large-6 box">
        <h1><?php
            if (!isset($_SESSION['drawer1'])) {
                echo 'First Drawer';
            } else {
                echo 'Second Drawer';
            }
            ?></h1>
        <div class="grid-x">
            <div class="cel large-3">&nbsp;</div>
            <form class="cell large-6 center" action="./frontControllers/countController.php" method="get">
                <input type="number" name="05" placeholder="Input amount of 50 øre">
                <input type="number" name="1" placeholder="Input amount of 1 kroner">
                <input type="number" name="2" placeholder="Input amount of 2 kroner">
                <input type="number" name="5" placeholder="Input amount of 5 kroner">
                <input type="number" name="10" placeholder="Input amount of 10 kroner">
                <input type="number" name="20" placeholder="Input amount of 20 kroner">
                <input type="number" name="50" placeholder="Input amount of 50 kroner">
                <input type="number" name="100" placeholder="Input amount of 100 kroner">
                <input type="number" name="200" placeholder="Input amount of 200 kroner">
                <input type="number" name="500" placeholder="Input amount of 500 kroner">
                <input type="number" name="1000" placeholder="Input amount of 1000 kroner">
                <input type="number" name="extra" placeholder="Input amount of extra cash">
                <input type="number" name="toDeposit" placeholder="Input the amount to deposit">
                <input type="submit" value="submit" class="button">
                <input type="hidden" name="action" value="addCashdrawer">
                <input type="hidden" name="drawerName" value="<?php if (!isset($_SESSION['drawer1'])) {
                    echo "drawer1";
                } else {
                    echo "drawer2";
                } ?>">
            </form>
            <div class="cel large-3">&nbsp;</div>
        </div>
    </div>
    <div class="cell large-3">&nbsp;</div>
</div>
</body>
</html>
