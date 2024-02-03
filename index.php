<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Website</title>
    <link rel="stylesheet" href="style.css">
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
  

        <div class="main">
            <div class="paragraph_main">
                <h1>The future is now..</h1>
                <h3>Check our latest products</h3>
                <a href="Products.php" class="button">Shop now</a>
            </div>
            <div class="paragraph_img">
            </div>
          
        </div>
       
        <?php
   include './includes/footer.php';
?>

 
</body>
</html>