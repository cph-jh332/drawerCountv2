<?php
session_start();
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
<h1>Login</h1>
<form action="./frontControllers/loginController.php">
    <input type="text" name="name" placeholder="Your Username">
    <input type="password" name="password" placeholder="Your Password">
    <input type="submit">
</form>
</body>
</html>