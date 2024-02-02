<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tech Website- Desktops</title>
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
  <div class="contanier">
  <?php
   include './includes/header.php';
?>

<div class="center-text">
  <h2>Desktops</h2>
</div>


<div class="productss">
  <div class="main">
      <div class="p1">
        <img src="./img/Apple Imac 24 SILVER.jpg"    width="300px" height="270px">
    <h3>Apple iMac with Apple M1<br> chip with 8-core CPU 24-inch</h3>
    <p>$1,200.00</p>
    </div>
  </div>

  <div class="main">
    <div class="p1">
      <img src="./img/Imac Pro.png"    width="300px" height="270px">
  <h3>iMac Pro 27in All-in-One<br> Desktop,Intel,32 GB, Space Gray</h3>
  <p>$1,380.00</p>
  </div>
</div>

<div class="main">
  <div class="p1">
    <img src="./img/Apple Desktop.jpeg"    width="300px" height="270px">
<h3>iMac 27 with Retina 5K <br>Display, 3.3Ghz 6-Core Intel i5</h3>
<p>$1,119.00</p>
</div>
</div>

<div class="main">
  <div class="p1">
    <img src="./img/Restored Apple Desktop.jpeg"    width="300px" height="270px">
<h3>Apple iMac MK442LL/A<br>21.5-Inch Desktop, Intel 8 GB,</h3>
<p>$895.00</p>
</div>
</div>

<div class="main">
  <div class="p1">
    <img src="./img/p4.png"    width="300px" height="270px">
<h3>MONITOR GAMING VIEWSONIC <br> VX3219-PC-MHD 31.5"</h3>
<p>$549.00</p>
</div>
</div>

<div class="main">
  <div class="p1">
    <img src="./img/LENOVO PC AIO.png"    width="300px" height="270px">
<h3>AIO LENOVO IDEACENTRE 3<br> 24ITL6 I5-1135G7 4.2GHZ 23.8"</h3>
<p>$629.00</p>
</div>
</div>

<div class="main">
  <div class="p1">
    <img src="./img/Monitor Samsung.png"    width="300px" height="270px">
<h3>MONITOR SAMSUNG <br>ODYSSEY G4B 27" FHD</h3>
<p>$299.00</p>
</div>
</div>

<div class="main">
  <div class="p1">
    <img src="./img/Dell Monitor.webp"    width="300px" height="270px">
<h3>Dell 32 Curved Gaming Monitor <br> S3222DGM</h3>
<p>$299.00</p>
</div>
</div>

<div class="main">
  <div class="p1">
    <img src="./img/HP Monitor.png"    width="240px" height="270px">
<h3>MONITOR HP V27I FHD (1920 x 1080) | 60HZ 1000:1 BLACK</h3>
<p>$159.00</p>
</div>
</div>

<div class="main">
  <div class="p1">
    <img src="./img/Desktops.jpeg"  width="240px" height="200px">
<h3>ASUS AiO A3 Series 23.8 Inch<br> Full HD Touch Display </h3>
<p>$780.00</p>
</div>
</div>

<div class="main">
  <div class="p1">
    <img src="./img/Desktop PC Core i7.jpeg"    width="300px" height="270px">
<h3>STGAubron Gaming Desktop<br> PC Computer, I7 3.4 GHz</h3>
<p>$1,670.00</p>
</div>
</div>

<div class="main">
  <div class="p1">
    <img src="./img/Desktop Dell.webp"
    width="300px" height="270px">
<h3>Dell OptiPlex Desktop<br> Computer with 24 inch Monitor</h3>
<p>$569.00</p>
</div>
  </div>
</div>
<?php
   include './includes/footer.php';
?>
</div>


</body>
</html>