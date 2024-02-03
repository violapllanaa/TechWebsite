<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Website- About Us</title>
    
    <style>
        *{
	margin:0;
	padding:0;
  box-sizing: border-box;
}
body {
  font-family: 'Poppins', sans-serif;
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
.AboutUsmain img{
  background-image: url(img\tech.jpg);
  background-size: cover;
  width: 100%;
  height: 800px; 
  position: absolute;
}

  .AboutUsmain{
    width: 100%;
    height: 800px;
    display: flex;
    align-items: center;
  }
  
  .text{

    color: white;
    width: 800px;
    height: 400px;
    border: 1px solid white;
  }
  .text p{
  
    color: white;
    position: relative;
    left: 40px;
    width:700px ;
    height: 380px;
    align-items: center;
       display: flex;
  }
  .text h1{
 
    color: white;
    position: relative;
    width: 700px;
    height: 60px;
    display: flex;
    justify-content: center;
    align-items: center;
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
        
    <div class="AboutUsmain ">
        <img src="./img/tech.jpg" alt="">
     <div class="text">
   <h1> Welcome to the land of Technology</h1>
    <p> Technology is our inspiration, innovation is our leader. We are a team passionate about the power and potential of technology to transform the world in unknown ways. In this path of our selection, we have built a platform that combines experience, knowledge and our passion to provide diverse and advanced solutions in the world of technology.

        Our mission is to bring technology closer to people, making it more understandable, more accessible and more relevant to their daily lives. Focusing on sustainable innovation, we aim to build paradigm-shifting products and services, improving our users' experience and performance.
        We're not just a technology portal - we're a community of passionate people, talented engineers and technology visionaries who come together to share ideas and create a positive change in the way technology shapes our world.
        Committed to quality, safety and usability, we continue to push the boundaries of convention, creating new avenues to explore and influence the future of technology. We share our vision with those who want to be part of a journey that changes the game and shapes the future.</p>

</div>
</div>

<?php
   include './includes/footer.php';
?>
    </div>

    </body>
</html>