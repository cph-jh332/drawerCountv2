<?php
/**
 * Created by PhpStorm.
 * User: joachim
 * Date: 4/14/18
 * Time: 5:16 PM
 */
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
    <title>Index</title>
</head>
<body>
<form action="newcount.php">
    <input type="submit" value="New Count">
</form>
<form action="register.php">
    <input type="submit" value="Register New User">
</form>
</body>
</html>