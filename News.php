<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>News</title>
   <link rel="stylesheet" href="./css/News.css">
</head>
<body>
<?php
   include './includes/headerIndex.php';
?>
    <div class  ="contanier">
      
        <section class = "main">
        <h2>News </h2>
        <img id="slideshow" />
</section>
        <button onclick="changeImg()">Next</button>
    </div>
    <?php
   include './includes/footer.php';
?>
    <script>
        let i = 0;
        let imgArray = ['./img/LAPTOP HP 250.png','./img/Tablet Samsung Galaxy S23.png',
        './img/LL.png','./img/LlAPTOP DELL VOSTRO 35.png'];

        function changeImg(){
            document.getElementById('slideshow').src = imgArray[i];

            if(i< imgArray.length -1){
                i++;
            }
            else{
                i=0;
            }
            //setTimeout("changeImg()", 2600);
        }
        document.addEventListener(onload, changeImg());
    </script>
</body>
</html>
