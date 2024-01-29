<?php
require 'class-autoload.inc.php';
session_start();

$adminCheck = new AdminCheck();
if (!$adminCheck->isAdmin()) {
	header('location: ../LogIn.php');
}

$contactClass = new ContactAdmin();
$contactClass->fetchContacts();
?>
<!DOCTYPE html>
<html>

<head>
<title>ContactUs- Admin Panel</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
<div class="content">

<div class="header">
<a href="index.php"><img src="img/Logo2.png" width="70px" height="70px"></a>
        <a href="index.php">Home</a>
        <?php if(isset($_SESSION['name'])): ?>
        <p>Welcome, <?php echo $_SESSION['name'];?>
        <?php if($_SESSION['user_type'] == "admin" ): ?>
            <a href="admin.php">(Admin Panel)</a>
        <?php endif; ?>
        / <a href="LogOut.php">Logout</a></p>
    <?php else: ?>
        <p><a href="LogIn.php">Login</a> / <a href="SignUp.php">Sign up</a></p>
    <?php endif; ?>

    </div>
    <div class="maincontainer">
        <h1 style="text-align: center">Manage Contact Us</h1>
				<div style="margin: 0 auto;">
										<?php $contactClass->echoContacts(); ?>
			</div>


</div>
    </div>
    <?php include 'includes/footer.php'?>