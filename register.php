<?php
    session_start();
    if($_SESSION['user'] === null){
        header("location: login.php");
        exit();
    }
?>
<html>
<head>
    <?php require_once './inc/header.php' ?>
    <title>Register</title>
</head>
<body>
<div class="grid-x">
    <div class="cell large-3">&nbsp;</div>
    <div class="cell large-6 box">
        <h1>Register New User</h1>
        <?php
        if(isset($_GET['error'])){
            echo "<p>{$_GET['error']}</p>";
        }
        ?>
        <div class="grid-x">
            <div class="cell large-3">&nbsp;</div>
            <div class="cell large-6">
                <form action="./frontControllers/registerController.php">
                    <input type="text" name="name" placeholder="Input new users initials">
                    <input type="number" name="store" placeholder="Input store number">
                    <input type="password" name="password1" placeholder="Input password">
                    <input type="password" name="password2" placeholder="Repeat password">
                    <input type="submit" value="submit" class="button">
                </form>
            </div>
            <div class="cell large-3">&nbsp;</div>
        </div>
        <form action="./index.php">
            <input type="submit" value="back" class="button">
        </form>
    </div>
    <div class="cell large-3">&nbsp;</div>
</div>
</body>
</html>