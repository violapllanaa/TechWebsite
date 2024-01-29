<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tech Website- News</title>
   <link rel="stylesheet" href="css/News.css">
   
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
   <script src="js/slide.js" defer></script>
</head>
<body>
  
<?php
   include './includes/headerIndex.php';
?>
   <div class="main">
    <h1>Latest News</h1>
    <div class="slider-wrapper">
      <button id="prevslide" class="slide-button ">&#8249;</button>
      <div class="image-list">
      <img src="img/Apple Imac 24 SILVER.jpg" alt="img1" class="image-items" width="350px" height="350px">
      <img src="img/LENOVO PC AIO.png" alt="img2" class="image-item" width="350px" height="350px">
      <img src="img/LAPTOP HP 250 G10.png" alt="img3" class="image-item" width="350px" height="350px">
      <img src="img/Apple Iphone 14 plus Red.jpg" alt="img4" class="image-item" width="350px" height="350px">
      <img src="img/Apple Iphone 14 plus Purple.jpg" alt="img5" class="image-item" width="350px" height="350px">
      <img src="img/APPLE MACKBOOK AIR.jpg" alt="img6" class="image-item" width="350px" height="350px">
      <img src="img/Apple Desktops.jpg" alt="img7" class="image-item" width="350px" height="350px">
      <img src="img/LAPTOP GAMING LENOVO.jpg" alt="img8" class="image-item" width="350px" height="350px">
      <img src="img/Samsung.jpg" alt="img9" class="image-item" width="350px" height="350px">
      <img src="img/LAPTOP VICTUS.jpg" alt="img10" class="image-item" width="350px" height="350px">
      </div>
      <button id="nextslide" class="slide-button ">&#8250;</button>
    </div>
    <div class="slider-scrollbar">
      <div class="scrollbar-track">
        <div class="scrollbar-thumb"></div>
      </div>
    </div>
   </div>
   
   <?php
   include './includes/footer.php';
?>

</body>
</html>
