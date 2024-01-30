<?php
require 'includes/class-autoload.inc.php';
session_start();

$loginCheck = new LoginCheck();
if ($loginCheck->isLogin()) {
	header("Location: /");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="./css/LogIn.css">
  
  <title>TechWebsite- LOG IN</title>
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
<div class="container">
    <h1 style="text-align: center;">Login:</h1>
    <p style="text-align:center;color:red;">
      <?php require 'includes/loginerrors.inc.php'; ?>
    </p>
    <div class="forma">
    <form name="loginForm" action="includes/login.inc.php" onsubmit="return validateLogin()" method="post" required>
        <label for="email">Enter your e-mail:</label><br>
        <input type="email" id="email" name="email" placeholder="Enter your email..." >
        <br>
        <label for="password">Enter your password:</label><br>
        <input type="password" id="password" name="password" placeholder="Enter your password..."  required>
        <br>
        <br>
        <input id="button" type="submit" name="submit" value="Login">
    </form>
    <p>If you don't have an account. <a href="signup.php">Sign up here</a></p>
    </div>
    </div>



</div>
</body>
</html>