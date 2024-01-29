<?php
    require 'includes/class-autoload.inc.php';
    session_start();

    $loginCheck = new LoginCheck();
    if ($loginCheck->isLogin()) {
    	header("Location: /");
    }

?>
<!DOCTYPE html>
<html>
<head>
    <title>TechWebsite- Sign up</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="css/Signup.css">
</head>
<body>

<div class="header">
        <a href="index.php"><img src="img/Logo2.png" width="70px" height="70px"></a>

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
    </div>
    <div class="content">
        <div class="maincontainer">
            <h1 style="text-align: center;">Sign up</h1>
            <p style="text-align:center;color:red;">
                <?php require 'includes/signuperrors.inc.php'; ?>
            </p>
            <div class="forma">
                <form name="signupForm" action="includes/signup.inc.php" onsubmit="return validateSignup()"
                    method="post">
                    <label for="name">Enter your name:</label><br>
                    <input type="text" id="name" name="name" placeholder="Enter your name...">
                    <label for="email">Enter your e-mail:</label><br>
                    <input type="email" id="email" name="email" placeholder="Enter your email...">
                    <br>
                    <label for="password">Enter your password:</label><br>
                    <input type="password" id="password" name="password" placeholder="Enter your password...">
                    <label for="confirmpassword">Confirm your password:</label><br>
                    <input type="password" id="confirmpassword" name="confirmpassword"
                        placeholder="Confirm your password...">
                    <br>
                    <br>
                    <input id="button" type="submit" name="submit" value="Sign Up" >
                </form>
            </div>
        </div>