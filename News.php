<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tech Website- News</title>
   <script src="js/slide.js" defer></script>
   <style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  
  body {
    background-color: #f5f5f5;
  }
  .main {
  
    margin-top: 170px;
  margin-bottom: 100px;
    max-width: 1200px;
    width: 95%;
  }
  .main h1{
    display: flex;
    align-items: center;
    justify-content: center;
    color: red;
    margin: 30px;
  }
  
  .slider-wrapper {
    position: relative;
    margin-left: 60px;
    border: 1px solid white;
    -webkit-font-smoothing: subpixel-antialiased;
    background-color: #f5f5f5;
    border-radius:20px ;
    -webkit-box-shadow: 0px 0px 40px 5px rgba(0,0,0,0.75);
    -moz-box-shadow: 0px 0px 40px 5px rgba(0,0,0,0.75);
    box-shadow: 0px 0px 40px 5px rgba(0,0,0,0.75);
  }
  .slider-scrollbar{
    margin-left: 60px;
    width: 95%;
  }
  
  .slider-wrapper .slide-button {
    height: 50px;
    width: 50px;
    color: black;
    background: white;
    font-size: 2.2rem;
    cursor: pointer;
    border-radius: 50%;
    border: none;
    outline: none;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    display: flex;
    align-items: center;
    justify-content: center;
  }
  
  .slide-button:hover {
    background: #444;
  }
  
  .slide-button#prevslide {
    left: -20px;
  }
  
  .slide-button#nextslide {
    right: -20px;
  }
  
  .slider-wrapper .image-list {
    display: grid;
    grid-template-columns: repeat(10, 1fr);
    overflow-x: auto;
    gap: 18px;
    font-size: 0;
    scrollbar-width: none;
    margin: 30px;
  }
  
  .slider-wrapper .image-list::-webkit-scrollbar {
    display: none;
  }
  
  .slider-wrapper .image-list .image-items {
    width: 325px;
    height: 400px;
    object-fit: cover;
  }
  
  .main .slider-scrollbar {
    height: 24px;
    width: 95%;
    display: flex;
    align-items: center;
  }
  
  .slider-scrollbar .scrollbar-track {
    height: 2px;
    width: 100%;
    background:#ccc;
    position: relative;
    border-radius: 4px;
  }
  
  .slider-scrollbar:hover .scrollbar-track {
    height: 4px;
  }
  
  .slider-scrollbar .scrollbar-thumb {
    position: absolute;
    height: 100%;
    width: 30%;
    background: black;
    border-radius: inherit;
    cursor: grab;
  }
  
  .slider-scrollbar .scrollbar-thumb:active {
    cursor: grabbing;
    height: 8px;
    top: -2px;
  }
  
  .slider-scrollbar .scrollbar-thumb::after {
    content: "";
    position: absolute;
    left: 0;
    right: 0;
    top: -10px;
    bottom: -10px;
  }
  
  
  @media (max-width: 1023px){
    .slider-wrapper .slide-button{
      display: none!important;
    }
   </style>
</head>
<body>
  <div class="contanier">
<?php
   include './includes/headerIndex.php';
?>
   <div class="main">
    <h1>Latest News</h1>
    <div class="slider-wrapper">
      <button id="prevslide" class="slide-button ">&#8249;</button>

      <div class="image-list">
        
    <div class="slide">
      <img src="img/Apple Imac 24 SILVER.jpg" alt="img1" class="image-items" width="350px" height="350px">
  <div class="description">
      <h5>Apple Imac 24 SILVER <br> Laptop - M3 Pro chip - 18GB <br>
  <p>$1,890.00</p></h5>
  </div>
</div>
<div class="slide">
<img src="img/LENOVO PC AIO.png" alt="img2" class="image-item" width="350px" height="350px">
<div class="description">
<h5>Lenovo Pc AIO<br>Laptop - M3 Pro chip - 18GB <br>
  <p>$1,890.00</p></h5>
  </div>
  </div>

<div class="slide">
<img src="img/Apple Iphone 14 plus Red.jpg" alt="img4" class="image-item" width="350px" height="350px">
<div class="description"></div>  
<h5>Apple - Iphone plus Red 14 <br>Laptop - M3 Pro chip - 18GB <br>$1,890.00</h5>
  </div>

<div class="slide">
<img src="img/Apple Iphone 14 plus Purple.jpg" alt="img5" class="image-item" width="350px" height="350px">
<div class="description"></div>  
<h5>Apple - Iphone 14 plus Purple <br>Laptop - M3 Pro chip - 18GB <br>
  <p>$1,890.00</p></h5>
  </div>

<div class="slide">
<img src="img/APPLE MACKBOOK AIR.jpg" alt="img6" class="image-item" width="350px" height="350px">
<div class="description"></div>  
<h5>Apple - MacBook Pro AIR <br>Laptop - M3 Pro chip - 18GB<br>
  <p>$1,890.00</p></h5>
  </div>

<div class="slide">
<img src="img/Apple Desktop.jpeg" alt="img7" class="image-item" width="350px" height="350px">
<div class="description"></div>  
<h5>Apple - Desktop <br>Laptop - M3 Pro chip - 18GB <br>
  <p>$1,890.00</p></h5>
  </div>

<div class="slide">
<img src="img/LAPTOP GAMING LENOVO.png" alt="img8" class="image-item" width="350px" height="350px">
<div class="description"></div>  
<h5>LAPTOP GAMING LENOVO" <br>Laptop - M3 Pro chip - 18GB  <br>
  <p>$1,890.00</p></h5>
  </div>

<div class="slide">

<img src="img/Samsung.jpg" alt="img9" class="image-item" width="350px" height="350px">
<div class="description"></div>  
<h5>Samsung" <br>Laptop - M3 Pro chip - 18GB <br>
  <p>$1,890.00</p></h5>
  </div>

<div class="slide">
<img src="img/LAPTOP VICTUS.png" alt="img10" class="image-item" width="350px" height="350px">
<div class="description">
<h5>Laptop Victus" <br>Laptop - M3 Pro chip - 18GB<br>
  <p>$1,890.00</p></h5>
  </div>
</div>
      <button id="nextslide" class="slide-button ">&#8250;</button>
    </div>
    <div class="slider-scrollbar">
      <div class="scrollbar-track">
        <div class="scrollbar-thumb"></div>
      </div>
    </div>
   </div>
   

</div>
<?php
   include './includes/footer.php';
?>
</div>
</body>
</html>
