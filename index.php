<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap">

    <title>Tech Website</title>
    <link rel="stylesheet" href="style.css">
    <style>
      
    h1 {font-family: 'Poppins', sans-serif; font-weight: 600;}
h2 {font-family: 'Poppins', sans-serif; font-weight: 500;}
p {font-family: 'Poppins', sans-serif; font-weight: 400;}
a {font-family: 'Poppins', sans-serif;font-weight: 400;}
label {font-family: 'Poppins', sans-serif;}

*{
    box-sizing: border-box;
}
body {
    display: flex;
    flex-direction: column;
    height: 100vh;
   padding: 0px;
    margin: 0px;

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

#active {
    background-color: #00897b;
}
#active a:hover {
    background-color: #004d40;
}
#icon {
    display: none;
    padding-right: 15px;
}
.content {
  flex: 1 0 auto;
  background-color: #f5f5f5;
}
    </style>
</head>
<body> 
<div class="content">

<div class="header">
      <a href="index.php"><img src="img/Logo2.png" width="70px" height="70px"></a>

  <?php if (isset($_SESSION['name'])): ?>
    <p class = "paragraph">Welcome,
      <?php echo $_SESSION['name']; ?>
      <?php if ($_SESSION['user_type'] == "admin"): ?>
        <a href="admin.php">(Admin Panel)</a>
      <?php endif; ?>
      / <a class = "link" href="logout.php">Logout</a>
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
  

        <div class="main">
            <div class="paragraph_main">
                <h1>The future is now..</h1>
                <h3>Check our latest products</h3>
                <a href="products.php" class="button">Shop now</a>
            </div>
            <div class="paragraph_img">
            </div>
          
        </div>
       
        <?php
   include './includes/footer.php';
?>

 
</body>
</html>