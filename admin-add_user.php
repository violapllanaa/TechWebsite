<?php require 'includes/class-autoload.inc.php';
session_start();

$adminCheck = new AdminCheck();
if (!$adminCheck->isAdmin()) {
	header('location: ../login.php');
}

$usersClass = new Users();
?>
<!DOCTYPE html>
<html>

<head>
    <title>TechWebsite - Admin Panel</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style600.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap">
    <link rel="icon" type="image/png" href="img/logom.png" />
</head>

<body>

<div class="content">

<div class="header">
        <a href="index.php"><img src="img/logom.png" width="50px" height="50px"></a>

        <?php if(isset($_SESSION['name'])): ?>
        <p>Welcome, <?php echo $_SESSION['name'];?>
        <?php if($_SESSION['user_type'] == "admin" ): ?>
            <a href="admin.php">(Admin Panel)</a>
        <?php endif; ?>
        / <a href="logout.php">Logout</a></p>
    <?php else: ?>
        <p><a href="login.php">Login</a> / <a href="signup.php">Sign up</a></p>
    <?php endif; ?>

    </div>
    <div class="maincontainer">
        <h1 style="text-align: center">Add Users</h1>
        <div style="margin: 0 auto;">
          <form action="<?php $usersClass->addUsers();?>" method="post">
              <input type="text" name="name" placeholder="Enter your name"><br>
              <input type="text" name="email" placeholder="Enter your email"><br>
              <input type="password" name="password" placeholder="Enter your password"><br>
              <label>User type:</label><br>
              <input type="radio" id="user_type" name="user_type" value="normal">
              <label for="normal">Normal</label><br>
              <input type="radio" id="user_type" name="user_type" value="admin">
              <label for="admin">Admin</label><br>
              <input id="button" type="submit" name="submit" value="Submit">
          </form>
			</div>


</div>
    </div>
    <?php include 'footer.php'?>
