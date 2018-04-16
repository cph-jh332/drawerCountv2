<?php
require_once './assets/Count.php';
session_start();
if($_SESSION['user'] === null){
    header("location: login.php");
    exit();
}
?>
<html>
<head>
    <?php require_once './inc/head.php' ?>
    <title>View Counts</title>
</head>
<header>
    <?php require_once './inc/header.php'?>
</header>
<body>
<div class="grid-x">
    <div class="cell large-4">&nbsp;</div>
    <div class="cell large-4">
        <h1>Counts</h1>
        <p><strong>Latest counts first</strong></p>
        <?php if(count($_SESSION['counts']) > 0):
            foreach ($_SESSION['counts'] as $count):?>
            <div class="box">
                <p><strong>Deposit:</strong> <?= $count->getTotalDeposit();?></p>
                <p><strong>Diff:</strong> <?= $count->getDiff(); ?></p>
            </div>
            <?php endforeach;
        else:?>
            <p>There are no counts yet</p>
        <?php endif;?>
        <form action="index.php">
            <input type="submit" value="Go Back" class="button">
        </form>
    </div>
    <div class="cell large-4">&nbsp;</div>
</div>
</body>
</html>
