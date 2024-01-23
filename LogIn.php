<!DOCTYPE html>
<html>
<head>
    <title>Tech Website- Login</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap">
</head>
<body>
<?php
   include './includes/headerIndex.php';
?>
<div class="content">
    <div class="maincontainer">
    <h1 style="text-align: center;">Login:</h1>
    <p style="text-align:center;color:red;">
     
    </p>
    <div class="forma">
    <form name="loginForm" action="includes/login.inc.php" onsubmit="return validateLogin()" method="post" required>
        <label for="email">Enter your e-mail:</label><br>
        <input type="email" id="email" name="email" placeholder="Enter your email..." >
        <br>
        <label for="password">Enter your password :</label><br>
        <input type="password" id="password" name="password" placeholder="Enter your password..."  required>
        <br>
        <br>
        <input id="button" type="submit" name="submit" value="Login">
    </form>
    <p>If you don't have an account. <a href="SignUp.php">Sign up here</a></p>
    </div>
    </div>
    <?php
   include './includes/footer.php';
?>
</div>

</head>
</body>
</html>
