<?php
    session_start();
    if($_SESSION['user'] === null){
        header("location: login.php");
        exit();
    }
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <h1>Register New User</h1>
    <?php
        if(isset($_GET['error'])){
            echo "<p>{$_GET['error']}</p>";
        }
    ?>
    <form action="./frontControllers/registerController.php">
        <input type="text" name="name" placeholder="Input new users initials">
        <input type="number" name="store" placeholder="Input store number">
        <input type="password" name="password1" placeholder="Input password">
        <input type="password" name="password2" placeholder="Repeat password">
        <input type="submit">
    </form>
</body>
</html>