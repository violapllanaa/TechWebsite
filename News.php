<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tech Website- News</title>
   <link rel="stylesheet" href="./css/News.css">
</head>
<body>
<?php
   include './includes/headerIndex.php';
?>
    <div class="maincontainer">
        <h1 style="text-align: center">Latest News</h1>
        <div class="slideshow-container">


  <div class="Slider-fade">
  <img src="img/LAPTOP HP 250.png">
    <div class="text"><p>IOS 17.3 is out, Adding stolen deviceprotection for you Iphone</p></div>
  </div>

  <div class="Slider-fade">
  <img src="img/Aicyber.jpeg">
    <div class="text"><p>basdasd</p></div>
  </div>

  <div class="Slider-fade">

    <img src="img/Aicyber.jpeg">
      <div class="text"><p>AI rise will lead to increase in cyberattacks, GCHQ warns </p></div>
  </div>

  <a class="prev" onclick="nextSlide(-1)">&#10094;</a>
  <a class="next" onclick="nextSlide(1)">&#10095;</a>
</div>
<br>

<div style="text-align:center">
  <span class="pika" onclick="cSlide(1)"></span>
  <span class="pika" onclick="cSlide(2)"></span>
  <span class="pika" onclick="cSlide(3)"></span>
</div>

<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/slide.js"></script>
</div>
<?php
   include './includes/footer.php';
?>
</body>
</html>
