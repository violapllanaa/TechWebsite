<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tech Website- Phones</title>
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
      <h2>Phones</h2>
    </div>
<div class="productss">
  
  <div class="main">
      <div class="p1">
        <img src="./img/Teledon Samsung Galaxy S23.png">
    <h3>SAMSUNG Galaxy S23<br> Ultra 5G, 256GB</h3>
    <p>$549.00</p>
    </div>
  </div>
  <div class="main">
    <div class="p1">
      <img src="./img/Apple Iphone 14 pro Max Gold.jpg">
  <h3>Apple iPhone 14 Pro Max,<br> 128GB, Gold</h3>
  <p>$803.00</p>
  </div>
</div>
<div class="main">
  <div class="p1">
    <img src="./img/Apple Iphone 14 pro Max Deep Purple.jpg">
<h3>Apple iPhone 14 Pro Max,<br> 128GB, Deep Purple</h3>
<p>$775.00</p>
</div>
</div>
<div class="main">
  <div class="p1">
    <img src="./img/Apple Iphone 14 pro Silver.jpg">
<h3>Apple iPhone 14 Pro,<br> 256GB, Silver</h3>
<p>$803.00</p>
</div>
</div>
<div class="main">
  <div class="p1">
    <img src="./img/Samsung.jpg">
<h3>SAMSUNG GALAXY <br> Z FOLD 4 7.6"</h3>
<p>$1,359.00</p>
</div>
</div>
<div class="main">
  <div class="p1">
    <img src="./img/Apple Iphone 14 pro Max Space Black.jpg">
<h3>Apple iPhone 14 Pro Max,<br> 256GB, Space Black</h3>
<p>$826.00</p>
</div>
</div>
<div class="main">
  <div class="p1">
    <img src="./img/Apple Iphone 14 Purple.jpg">
<h3>Apple iPhone 14 Plus,<br> 128GB, Purple</h3>
<p>$574.00</p>
</div>
</div>
<div class="main">
  <div class="p1">
    <img src="./img/Apple Iphone 14 plus Midnight.jpg">
<h3>Apple iPhone 14 Plus,<br> 128GB, Midnight</h3>
<p>$545.17</p>
</div>
</div>
<div class="main">
  <div class="p1">
    <img src="./img/Apple Iphone 14 plus Red.jpg">
<h3>Apple iPhone 14, 128GB,<br> (PRODUCT) Red</h3>
<p>$500.00</p>
</div>
</div>
<div class="main">
  <div class="p1">
    <img src="./img/Apple Iphone 14 Starlight.jpg">
<h3>Apple iPhone 14,<br> 128GB, Starlight</h3>
<p>$518.74</p>
</div>
</div>
<div class="main">
  <div class="p1">
    <img src="./img/Apple 12.9inch iPad Pro(6th) Wi_fi.jpg">
<h3>Apple iPad Pro 12.9-inch <br>(6th Generation): with M2 chip</h3>
<p>$1,199.00</p>
</div>
</div>
<div class="main">
  <div class="p1">
    <img src="./img/Teledon Samsung Galaxy S23.png">
  <h3>SAMSUNG Galaxy S23<br> Ultra 5G, 256GB</h3>
  <p>$549.00</p>
  </div>
  </div>
</div>
<?php
   include './includes/footer.php';
?>
</div>

</body>
</html>