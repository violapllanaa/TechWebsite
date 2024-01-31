<?php
require 'class-autoload.inc.php';
session_start();

$adminCheck = new AdminCheck();
if (!$adminCheck->isAdmin()) {
	header('location: ../LogIn.php');
}

$usersClass = new Users();
$usersClass->fetchUsers();
?>
<!DOCTYPE html>
<html>

<head>
<title>TechWebsite- Admin Panel</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="style.css">
  
		<style>table, td {
  border: 1px solid black;
}</style>
</head>

<body>

<div class="content">
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
        <h1 style="text-align: center">Manage Users</h1>
				<p style="text-align:center;"><a href="admin-add_users.php">Add a new user</a></p>

				<div style="margin: 0 auto;">
										<?php $usersClass->echoUsers(); ?>
			</div>


</div>
    </div>
  
