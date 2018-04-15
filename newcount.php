<?php
session_start();
if ($_SESSION['user'] === null) {
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
<h1><?php
    if (!isset($_SESSION['drawer1'])) {
        echo 'First Drawer';
    } else {
        echo 'Second Drawer';
    }
    ?></h1>
<form action="./frontControllers/countController.php" method="get">
    <input type="number" name="05" placeholder="Input amount of 50 øre">
    <input type="number" name="1" placeholder="Input amount of 1 kroner">
    <input type="number" name="2" placeholder="Input amount of 2 kroner">
    <input type="number" name="5" placeholder="Input amount of 5 kroner">
    <input type="number" name="10" placeholder="Input amount of 10 kroner">
    <input type="number" name="20" placeholder="Input amount of 20 kroner">
    <input type="number" name="50" placeholder="Input amount of 50 kroner">
    <input type="number" name="100" placeholder="Input amount of 100 kroner">
    <input type="number" name="200" placeholder="Input amount of 200 kroner">
    <input type="number" name="500" placeholder="Input amount of 500 kroner">
    <input type="number" name="1000" placeholder="Input amount of 1000 kroner">
    <input type="number" name="extra" placeholder="Input amount of extra cash">
    <input type="number" name="toDeposit" placeholder="Input the amount to deposit">
    <input type="submit" value="submit">
    <input type="hidden" name="action" value="addCashdrawer">
    <input type="hidden" name="drawerName" value="<?php if (!isset($_SESSION['drawer1'])) {
        echo "drawer1";
    } else {
        echo "drawer2";
    } ?>">
</form>
</body>
</html>
