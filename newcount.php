<?php
/**
 * Created by PhpStorm.
 * User: craci
 * Date: 15-04-2018
 * Time: 13:57
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
    <title>New Count</title>
</head>
<body>
<form action="./frontControllers/countController.php" method="get">
    <input type="number" name="05">
    <input type="submit" name="action" value="addCashdrawer">
    <input type="hidden" name="drawerName" value="<?php if($_SESSION['drawer1'] === null){return "drawer1";}else{return "drawer2";} ?>">
</form>
</body>
</html>
