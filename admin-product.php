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
