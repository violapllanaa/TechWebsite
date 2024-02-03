<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tech Website- Products</title>
  <style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
.contanier {
  max-width: 100%;
  font-family: sans-serif;
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
.SearchBar{
  margin: auto;
  position: relative;
  width: 300px;
  height: 42px;
  border: 4px solid #2980b9;
  padding: 0px 10px;
  border-radius: 50px;
}
.SB1 {
  width: 100%;
  height: 100%;
  vertical-align: middle;
}
.search{
  border: none;
  height: 100%;
  width: 100%;
  padding: 0px 5px;
  border-radius: 50px;
  font-size: 18px;
  font-family: "Nunito";
  color: #424242;
  font-weight: 500;
}
.search:focus{
  outline: none;
}
.SB2{
  font-size: 26;
  color: #2980b9;
}
.text {
  padding-left: 30px;
  background-image: url("./img/search.png");
  background-size: 20px;
  background-position: 8px 50%;
  background-repeat: no-repeat;
}
.menu a {
  text-decoration: none;
  color: #000;
  font-family: Work Sans;
  font-size: 16px;
  font-style: normal;
  font-weight: 500;
  line-height: normal;
}
.center-text h2{
  display: flex;
  justify-content: center;
  width: 100%;
  height: 40px;
  font-size: 28px;
  text-align: center;
  position: absolute;
  margin-top: 100px;
  color:red;

}
.productss .main .p1{
  flex: 1 1 30rem;
  box-shadow: 0 .5rem 1.5rem rgba(0, 0, 0, .1);
  border-radius: .5rem;
  border: .1rem solid rgba(0, 0, 0, .1);
  position: relative;
  text-align: center;
  padding-top: 2rem;
  overflow: hidden;

}

.productss{
  margin-top: 150px;
  width: 100%;
padding: 50px 20px;
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(260px, auto));
  gap: 2rem;

}
.main{
  position: relative;
  transition: all .40s;
}
.p1 img:hover{
  transform: scale(0.9);
}

.p1 p {
  padding right: 20px;
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
        <li><a href="desktops.php">Desktops</a></li>
        <li><a href="phones.php">Phones</a></li>
        <li><a href="laptops.php">Laptops</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        </ul>
    </div>

<div class="center-text">
  <h2>Featured products</h2>
</div>
<div class="productss">
  <div class="main">
      <div class="p1">
        <img src="./img/p1.jpg">
        <h3>LAPTOP HP 250 G8 <br>INTEL CORE I7-1165G7 UPTO</h3>
    <br>
    <p>$459.00</p>
    </div>
  </div>

  <div class="main">
    <div class="p1">
      <img src="./img/p2.jpg">
  <h3>Apple - MacBook Pro 14" <br>Laptop - M3 Pro chip - 18GB</h3>
  <br>
  <p>$1,890.00</p>
  </div>
</div>

<div class="main">
  <div class="p1">
    <img src="./img/p3.png">
    <h3>ThinkCentre M70a Gen 3 Intel <br> (21") All-in-One</h3>
<br>
<p>$889.00</p>
</div>
</div>

<div class="main">
  <div class="p1">
    <img src="./img/p4.png">
    <h3>MONITOR GAMING VIEWSONIC <br> VX3219-PC-MHD 31.5"</h3>
<br>
<p>$549.00</p>
</div>
</div>

<div class="main">
  <div class="p1">
    <img src="./img/Iphone 15 pro Max Blue.png">
    <h3>Iphone 15 pro Max <br>256GB Blue Titanium </h3>
<br>
<p>$1,112.00</p>
</div>
</div>

<div class="main">
  <div class="p1">
    <img src="./img/Apple 12.9inch iPad Pro(6th) Wi_fi.jpg">
    <h3>Apple 12.9inch <br> iPad Pro(6th) Wi_fi</h3>
<br>
<p>$980</p>
</div>
</div>

<div class="main">
  <div class="p1">
    <img src="./img/Apple Imac 24 SILVER.jpg">
    <h3>Apple - 27" Certified Refurbished<br>iMac Pro with 5K Display </h3>
<br>
<p>$1,200.00</p>
</div>
</div>

<div class="main">
  <div class="p1">
    <img src="./img/Samsung.jpg">
<h3>SAMSUNG GALAXY <br> Z FOLD 4 7.6"</h3>
<br>
<p>$1,359.00</p>
</div>
</div>

<div class="main">
  <div class="p1">
    <img src="./img/Monitor Dell.png">
<h3>Alienware 27 360Hz QD-OLED <br>26.7"</h3>
<p>$899.00</p>
</div>
</div>

<div class="main">
  <div class="p1">
    <img src="./img/Apple Iphone 14 pro Max Space Black.jpg">
<h3>Apple Iphone 14 pro Max <br> Space Black 256GB</h3>
<p>$789.00</p>
</div>
</div>

<div class="main">
  <div class="p1">
    <img src="./img/PC AIO LEOVO.png">
<h3>Lenovo IdeaCentre AIO 3 <br> AMD All-in-One Computer, 24"</h3>
<p>$1,239.00</p>
</div>
</div>

<div class="main">
  <div class="p1">
    <img src="./img/Apple Iphone 14 Starlight.jpg">
<h3>Apple Iphone 14 <br> Starlight 128GB</h3>
<p>$829.00</p>
</div>
  </div>
</div>

<?php
   include './includes/footer.php';
?>
</div>
</body>
</html>