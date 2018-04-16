<?php
session_start();
if($_SESSION['user'] === null){
    header("location: login.php");
    exit();
}
?>

<html>
<head>
    <?php require_once './inc/header.php'?>
    <title>To Deposit</title>
</head>
<body>
<div class="grid-x">
    <div class="cell large-3">&nbsp;</div>
    <div class="cell large-6 box">
        <h1>To Deposit</h1>
        <p><strong>Deposit:</strong> <?= $_SESSION['deposit'] ?></p>
        <p><strong>Diff:</strong> <?= $_SESSION['diff'] ?></p>
        <?php if(!isset($_SESSION['drawer2'])):?>
            <form action="newcount.php">
                <input type="submit" value="next" class="button">
            </form>
        <?php else:?>
            <form action="./frontControllers/countController.php">
                <input type="hidden" name="action" value="submitCount">
                <input type="submit" value="submit count" class="button">
            </form>
        <?php endif?>
    </div>
    <div class="cell large-3">&nbsp;</div>
</div>
</body>
</html>
