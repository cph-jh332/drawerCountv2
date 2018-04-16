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
    <title>Index</title>
</head>
<body>
<div class="grid-x">
    <div class="cell large-3">&nbsp;</div>
    <div class="cell large-6">
        <h1>Choose your destiny!</h1>
        <div class="grid-x">
            <div class="cell large-3">&nbsp;</div>
            <div class="cell large-6">
                <form action="newcount.php">
                    <input class="button expanded" type="submit" value="New Count">
                </form>
                <form action="./frontControllers/countController.php">
                    <input type="hidden" name="action" value="viewCounts">
                    <input class="button expanded" type="submit" value="View Counts">
                </form>
                <form action="register.php">
                    <input class="button expanded" type="submit" value="Register New User">
                </form>
            </div>
            <div class="cell large-3">&nbsp;</div>
        </div>
    </div>
    <div class="cell large-3">&nbsp;</div>
</div>
</body>
</html>