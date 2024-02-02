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
  <style>
    h1 {font-family: 'Poppins', sans-serif; font-weight: 600;}
h2 {font-family: 'Poppins', sans-serif; font-weight: 500;}
p {font-family: 'Poppins', sans-serif; font-weight: 400;}
a {font-family: 'Poppins', sans-serif;font-weight: 400;}
label {font-family: 'Poppins', sans-serif;}

body {
    display: flex;
    flex-direction: column;
    height: 100vh;
   padding: 0px;
    margin: 0px;
    -webkit-font-smoothing: subpixel-antialiased;
}

.header {
    background-color: #f5f5f5;
    display: flex;
    justify-content: space-between;
    padding: 10px;
}



.content {
  flex: 1 0 auto;
  background-color: #f5f5f5;
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
#button:hover{
    background-color: #004d40;
    cursor: pointer;
}


.maincontainer {
    display: flex;
    flex-direction: column;
    /* justify-content: center; */
    min-height: 55vh;
    width: 60%;
    height: 500px;
    border-radius: 20px;
    margin: auto;
    margin-top: 75px;
    margin-bottom: 75px;
    padding: 50px;
    background-color: #eceff1;
    -webkit-box-shadow: 0px 0px 40px 5px rgba(0,0,0,0.75);
    -moz-box-shadow: 0px 0px 40px 5px rgba(0,0,0,0.75);
    box-shadow: 0px 0px 40px 5px rgba(0,0,0,0.75);
}

.forma {
    margin: auto;
    width: 50%;
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

  </style>
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