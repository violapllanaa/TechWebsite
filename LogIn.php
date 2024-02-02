<?php
require 'includes/class-autoload.inc.php';


include_once __DIR__ . "../admin_panel/config/dbconnect.php";

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
  <title>TechWebsite- LOG IN</title>
  <style>
    h1 {
      font-family: 'Poppins', sans-serif;
      font-weight: 600;
    }
    h2 {
      font-family: 'Poppins', sans-serif;
      font-weight: 500;
    }
    p {
      font-family: 'Poppins', sans-serif;
      font-weight: 400;
    }
    a {
      font-family: 'Poppins', sans-serif;
      font-weight: 400;
    }
    label {
      font-family: 'Poppins', sans-serif;
    }
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
      display: flex;
      flex-direction: column;
      width: 100%;
      height: auto;
      padding: 0px;
      margin: 0px;
      -webkit-font-smoothing: subpixel-antialiased;
      background-color: #f5f5f5;
    }
    .header {
      background-color: #f5f5f5;
      display: flex;
      justify-content: space-between;
      padding: 10px;
    }
    .container {
      display: flex;
      flex-direction: column;
      /* justify-content: center; */
      min-height: 55vh;
      width: 55%;
      height: 450px;
      border-radius: 20px;
      margin: auto;
      margin-top: 75px;
      margin-bottom: 75px;
      padding: 50px;
      background-color: #eceff1;
      -webkit-box-shadow: 0px 0px 40px 5px rgba(0, 0, 0, 0.75);
      -moz-box-shadow: 0px 0px 40px 5px rgba(0, 0, 0, 0.75);
      box-shadow: 0px 0px 40px 5px rgba(0, 0, 0, 0.75);
    }
    .forma {
      margin: auto;
      width: 50%;
    }
    .forma p {
      margin-top: 30px;
    }
    input[type=text] {
      width: 100%;
      padding: 12px 5px;
      margin: 8px 0;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      background-color: #00897b;
      color: white;
    }
    input[type=email] {
      width: 100%;
      padding: 12px 5px;
      margin: 8px 0;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      background-color: #00897b;
      color: white;
    }

    ::placeholder {
      color: white;
      opacity: 1;
    }

    input[type=password] {
      width: 100%;
      padding: 12px 5px;
      margin: 8px 0;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      background-color: #00897b;
      color: white;
    }

    #button {
      background-color: #00897b;
      border: none;
      border-radius: 15px;
      color: white;
      width: 100px;
      height: 40px;
      text-align: center;
      text-decoration: none;
      font-size: 15px;
      margin-top: 5px;
      -webkit-appearance: none;
    }

    #button:hover {
      background-color: #004d40;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="header">
    <a href="index.php"><img src="img/Logo2.png" width="70px" height="70px"></a>
    <?php if (isset($_SESSION['name'])): ?>
      <p>Welcome,
        <?php echo $_SESSION['name']; ?>
        <?php if ($_SESSION['user_type'] == "admin"): ?>
          <a href="admin.php">(Admin Panel)</a>
        <?php endif; ?>
        / <a href="LogOut.php">Logout</a>
      </p>
    <?php else: ?>
      <p><a href="LogIn.php">Login</a> / <a href="SignUp.php">Sign up</a></p>
    <?php endif; ?>
  </div>
  <div class="container">
    <h1 style="text-align: center;">Login</h1>
    <p style="text-align:center;color:red;">
      <?php require 'includes/loginerrors.inc.php'; ?>
  

    </p>
    <div class="forma">
      <form name="loginForm" action="includes/login.inc.php" onsubmit="return validateLogin()" method="post" required>
        <label for="email">Enter your e-mail:</label><br>
        <input type="email" id="email" name="email" placeholder="Enter your email..." required>
        <br>
        <label for="password">Enter your password:</label><br>
        <input type="password" id="password" name="password" placeholder="Enter your password..." required>
        <br>
        <br>
        <input id="button" type="submit" name="submit" value="Login">
      </form>
      <p>If you don't have an account. <a href="SignUp.php">Sign up here</a></p>
    </div>
  </div>
</body>
</html>