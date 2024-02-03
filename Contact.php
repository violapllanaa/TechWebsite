<?php
require 'includes/class-autoload.inc.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>TechWebsite- Contact Us</title>
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<style>
  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
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
    background-color: red;
}
.content {
  flex: 1 0 auto;
  background-color: #f5f5f5;
}

.header {
    background-color: #f5f5f5;
    display: flex;
    justify-content: space-between;
    padding: 10px;
}

.headermenu {
    display: flex;
    height: 50px;
    width: 100%;
    background-color: #263238;
    justify-content: center;
    flex-wrap: nowrap;
}
 .headermenu ul {
     list-style-type: none;
     margin: 0;
     padding: 0;
}
.headermenu li {
    display: inline-flex;
    height: 100%;
}
.headermenu li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px;
    text-decoration: none;
    
}
.headermenu li a:hover {
    background-color: #111111;
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
    width: 80%;
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

#city {
  width: 100%;
   height: 35px;
   padding: 0px 20px;
   margin: 8px 0;
   border: 1px solid #ccc;
   border-radius: 4px;
   box-sizing: border-box;
   background-color: #00897b;
   color: white;
   -webkit-appearance: none;
}
textarea {
    font-family: 'Poppins', sans-serif;
    font-weight: 500;
    width:100%;
    height: 20vh;
    background-color: #00897b;
    padding: 5px 5px;
    margin: 8px 0;
    border: 1px solid #ccc;
    color: white;
    resize: none;
}
</style>

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
        / <a class = "link" href="LogOut.php">Logout</a>
      </p>
    <?php else: ?>
      <p><a  class ="link" href="login.php">Login</a> / <a href="signup.php">Sign up</a></p>
    <?php endif; ?>
    </div >
    <div class="headermenu" id="headermenuid">
        <ul>
        <li id="icon"><a id="menuhref" href="javascript:void(0);" onclick="menu()">
        <i class="fa fa-bars"></i>
        </a></li>
        <li><a href="index.php">Home</a></li>
        <li><a href="aboutus.php">About Us</a></li>
        <li><a href="products.php">Products</a></li>
        <li><a href="news.php">News</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        </ul>
    </div>
  
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
  </div>
  <?php include 'includes/footer.php'?>
</body>
</html>