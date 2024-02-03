<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tech Website- Laptops</title>
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
  <h2>Laptops</h2>
</div>
<div class="productss">
  <div class="main">
      <div class="p1">
        <img src="./img/p1.jpg"   width="300px" height="270px">
    <h3>LAPTOP HP 250 G8 <br>INTEL CORE I7-1165G7 UPTO</h3>
    <p>$459.00</p>
    </div>
  </div>
  <div class="main">
    <div class="p1">
      <img src="./img/p2.jpg"   width="300px" height="270px">
  <h3>Apple - MacBook Pro 14" <br>Laptop - M3 Pro chip - 18GB</h3>
  <p>$539.00</p>
  </div>
</div>

<div class="main">
  <div class="p1">
    <img src="./img/LAPTOP LENOVO FLEX5.png"   width="300px" height="270px">
<h3>LAPTOP LENOVO 15ADA7 AMD <br> RYZEN 3 3250U 3.5GHZ 15.6"</h3>
<p>$289.00</p>
</div>
</div>

<div class="main">
  <div class="p1">
    <img src="./img/LL.png"   width="300px" height="270px">
<h3>LAPTOP LENOVO 15ITL6<br>CELERON 6305 1.8GHZ 15.6"</h3>
<p>$289.00</p>
</div>
</div>

<div class="main">
  <div class="p1">
    <img src="./img/LAPTOP GAMING LENOVO 15IHU6 I5.png"   width="300px" height="270px">
<h3>LAPTOP GAMING LENOVO <br>15IHU6 I5-11320H UP TO 3.5GHZ 15.6" </h3>
<p>$1,090.00</p>
</div>
</div>

<div class="main">
  <div class="p1">
    <img src="./img/LAPTOP LENOVOO.png"   width="300px" height="270px">
<h3>LAPTOP LENOVO 15IGL7<br> N4120 2.6GHZ 15.6"</h3>
<p>$290.00</p>
</div>
</div>

<div class="main">
  <div class="p1">
    <img src="./img/APPLE MACKBOOK AIR.jpg"  width="300px" height="270px">
<h3>APPLE MACBOOK AIR 15.3:<br> SILVER/M2/10C</h3>
<p>$1,449.00</p>
</div>
</div>

<div class="main">
  <div class="p1">
    <img src="./img/LLAPTOP DELL VOSTRO 35.png" width="300px" height="270px">
<h3>LAPTOP DELL VOSTRO 3510<br>| i5-1135G7 15.6"</h3>
<p>$450.00</p>
</div>
</div>

<div class="main">
  <div class="p1">
    <img src="./img/LAPTOP HP 250.png"   width="300px" height="270px">
<h3>LAPTOP HP 250 G9 <br>I5-1235U UP TO 4.40GHZ 15.6"</h3>
<p>$425.00</p>
</div>
</div>

<div class="main">
  <div class="p1">
    <img src="./img/LAPTOP HP 250 G10.png"   width="300px" height="270px">
<h3>LAPTOP HP 15S-FQ3081NIA N4500 UP TO 2.6GHZ 15.6"</h3>
<p>$329.00</p>
</div>
</div>

<div class="main">
  <div class="p1">
    <img src="./img/LAPTOP LENOVO IDEALPAD.png"   width="300px" height="270px">
<h3>LAPTOP LENOVO IDEAPAD 3 15ITL6 N4020 2.8GHZ 15.6"</h3>
<p>$229.00</p>
</div>
</div>

<div class="main">
  <div class="p1">
    <img src="./img/LAPTOP VICTUS.png"   width="300px" height="270px">
<h3>LAPTOP VICTUS <br>INTEL CORE I7-1165G7 UPTO</h3>
<p>$659.00</p>
</div>
  </div>
</div>
<?php
   include './includes/footer.php';
?>
</div>

</body>
</html>