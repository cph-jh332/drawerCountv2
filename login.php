<?php
session_start();
?>
<html>
<head>
    <?php require_once './inc/header.php'?>
    <title>Login</title>
</head>
<body>
<div class="grid-x">
    <div class="cell large-3">&nbsp;</div>
    <div class="cell large-6 box">
        <h1>Login</h1>
        <div class="grid-x">
            <div class="cell large-3">&nbsp;</div>
            <div class="cell large-6">
                <form action="./frontControllers/loginController.php">
                    <input type="text" name="name" placeholder="Your Username">
                    <input type="password" name="password" placeholder="Your Password">
                    <input type="submit" class="button">
                </form>
            </div>
            <div class="cell large-3">&nbsp;</div>
        </div>
    </div>
    <div class="cell large-3">&nbsp;</div>
</div>
</body>
</html>