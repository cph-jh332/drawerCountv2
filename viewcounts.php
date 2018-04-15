<?php
require_once './assets/Count.php';
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
    <title>View Counts</title>
</head>
<body>
<h1>Counts</h1>
<?php if(count($_SESSION['counts']) > 0):
foreach ($_SESSION['counts'] as $count):?>
<p><strong>Deposit:</strong> <?= $count->getTotalDeposit();?></p>
<p><strong>Diff:</strong> <?= $count->getDiff(); ?></p>
<?php endforeach;
else:?>
<p>There are no counts yet</p>
<?php endif;?>
<form action="index.php">
    <input type="submit" value="Go Back">
</form>
</body>
</html>
