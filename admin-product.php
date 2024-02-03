<?php
require 'includes/class-autoload.inc.php';

session_start();

$adminCheck = new AdminCheck();
if (!$adminCheck->isAdmin()) {
	header('location: ../login.php');
}

$loginCheck = new LoginCheck();
$productpost = new ProductPost();
$productpost->fetchProductPosts();
?>
<!DOCTYPE html>
<html>

<head>
    <title>TechWebsite  - Admin Panel</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap">

    <style>
         *{
     
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

.blogimage {
  width: 100%;
  height: 200px;
  object-fit: cover;
}

.addarticle{
  margin: auto;
  width: 80%;
}

.addarticleButtons {
  display: flex;
  justify-content:space-between;
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
#active {
    background-color: #00897b;
}
#active a:hover {
    background-color: #004d40;
}
.section6{
    display: flex;
    flex-wrap: wrap;
    flex-direction: column;
    background-color: #eceff1;
}
#icon {
    display: none;
    padding-right: 15px;
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
</style>

</head>

<body>

<div class="content">

<div class="header">
<a href="index.php"><img src="img/Logo2.png" width="70px" height="70px"></a>

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

    <div class="headermenu" id="headermenuid">
        <ul>
        <li id="icon"><a id="menuhref" href="javascript:void(0);" onclick="menu()">
        <i class="fa fa-bars"></i>
        </a></li>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="products.php">Products</a></li>
        <li><a href="news.php">News</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        </ul>
    </div>

    <div class="maincontainer">
        <h1 style="text-align: center">Products</h1>
         <div class="section6">
           <?php if ($loginCheck->isLogin()) {
           	echo "<div class='addarticle'>
              <!-- onsubmit='return validateContact()' -->
                <form name='contactForm' action='includes/product.inc.php' method='post' enctype='multipart/form-data'>
                 <label for='title'>Enter your title:</label><br>
                 <input type='text' id='title' name='title' placeholder='Enter your title...' >
                 <label for='entertext'>Enter your text:</label>
                 <textarea placeholder='Enter your text...' id='entertext' name='entertext' ></textarea>
                   <div class='addarticleButtons'>
                       <input type='file' id='file' name='file'>
                       <input id='button' type='submit' name='submit' value='Submit'>
                   </div>
                </form>
            </div>";
           } ?>

        <div class="product">
          <?php if ($productpost->echoProductPostsAdmin()) ?>
        </div>
    </div>


</div>
    </div>
    <?php include 'footer.php'?>
