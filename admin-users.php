<?php
require 'includes/class-autoload.inc.php';
session_start();

$adminCheck = new AdminCheck();
if (!$adminCheck->isAdmin()) {
	header('location: ../login.php');
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
		<style>table, td {
  border: 1px solid black;
}
<style>
*{
     margin: 0;
     padding: 0;
     box-sizing: border-box;
 }
    body {
    display: flex;
    flex-direction: column;
    height: 100vh;
   padding: 0px;
    margin: 0px;
    -webkit-font-smoothing: subpixel-antialiased;
}

.content {
  flex: 1 0 auto;
  background-color: #f5f5f5;
}

.header {
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


.maincontainer {
    display: flex;
    flex-direction: column;
    /* justify-content: center; */
    min-height: 55vh;
    width: 80%;
    height: auto;
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
    <p><a  class ="link" href="LogIn.php">Login</a> / <a href="SignUp.php">Sign up</a></p>
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

    </div>
    <div class="maincontainer">
        <h1 style="text-align: center">Manage Users</h1>
				<p style="text-align:center;"><a href="admin-add_users.php">Add a new user</a></p>
				<div style="margin: 0 auto;">
										<?php $usersClass->echoUsers(); ?>
			</div>


</div>
    </div>
    <?php include 'includes/footer.php'?>
