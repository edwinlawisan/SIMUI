<!-- Edwin Lawisan 1606876790 -->

<!DOCTYPE html>
<html>
<head>
    <title>SIMUI</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
</head>

<body>
    
<?php
session_start();
include 'navigationBar.php';
?>

<div class="container" style="margin-top: 40px;">
    <div class="jumbotron">
        <h1 class="display-4" style="color: dimgrey">Welcome to SIMUI<span
                    style="color: #21D4FD"><?php if (isset($_SESSION["username"])) {
                    echo '<span style="color: dimgrey;">, </span>';
                    echo $_SESSION["username"];
                } ?></span> !</h1>
        <p class="lead" style="color: cornflowerblue">Access All the News in a Click!</p>
        <hr class="my-4">
        <p style="color: #979A9A">Login to Access!</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="login.php" role="button">Login</a>
        </p>
    </div>
</div>
</body>