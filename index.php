<?php
/**
 * Created by PhpStorm.
 * User: joachim
 * Date: 4/14/18
 * Time: 5:16 PM
 */
session_start();
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
<form action="./frontControllers/countController.php" method="get">
    <input type="number" name="05">
    <input type="submit" name="action" value="addCashdrawer">
    <input type="hidden" name="drawerName" value="drawer1">
</form>
</body>
</html>