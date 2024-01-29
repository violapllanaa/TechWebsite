<?php
require 'class-autoload.inc.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>TechWebsite- Contact Us</title>
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="stylesheet" href="css/Contact.css">

</head>
<body>
  <div class="content">

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
    </div >
  
  <div class="maincontainer">
    <h1 style="text-align: center;">Contact Us</h1>
    <p style="text-align:center;color:red;">
      <?php require 'includes/contacterrors.inc.php'; ?>
    </p>
    <div class="forma">
      <form name="contactForm" action="includes/contact.inc.php" onsubmit="return validateContact()" method="post">
        <label for="name">Enter your name:</label><br>
        <input type="text" id="name" name="name" placeholder="Enter your name..." required>
        <br>
        <br>
        <label for="email">Enter your e-mail:</label><br>
        <input type="email" id="email" name="email" placeholder="Enter your email..." required>
        <br>
        <br>
        <label for="city">Choose a city:</label>
        <br>
        <select id="city" name="city">
          <option value="prishtina">Prishtina</option>
          <option value="tetova">Tetova</option>
          <option value="shkupi">Shkupi</option>
          <option value="tirana">Tirana</option>
        </select>
        <br>
        <br>
        <p>Please select your gender:</p>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label>
        <br>
        <br>
        <label for="entertext">Enter your text:</label>
        <br>
        <textarea placeholder="Enter your text..." id="entertext" name="entertext" required></textarea>
        <br>
        <input id="button" type="submit" name="submit" value="Submit">
      </form>
    </div>
  </div>

</body>
</html>