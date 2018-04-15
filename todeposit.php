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
    <title>To Deposit</title>
</head>
<body>
<h1>To Deposit</h1>
<p><strong>Deposit:</strong><?= $_SESSION['deposit'] ?></p>
<p><strong>Diff:</strong><?= $_SESSION['diff'] ?></p>
<?php if(!isset($_SESSION['drawer2'])):?>
<form action="newcount.php">
    <input type="submit" value="next">
</form>
<?php else:?>
<form action="./frontControllers/countController.php">
    <input type="hidden" name="action" value="submitCount">
    <input type="submit" value="submit count">
</form>
<?php endif?>
</body>
</html>
