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
  padding-top: 130px;
  line-height: 1.5;
  font-family: 'Poppins', sans-serif;
}
.contanier {
  width: 100%;
  margin: auto;
  font-family: sans-serif;

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
    bottom: 250px;
    color: white;
    width: 800px;
    height: 400px;
    border: 1px solid white;
  }
  .text p{
    bottom: 250px;
    color: white;
    position: relative;
    left: 40px;
    width:700px ;
    height: 380px;
    align-items: center;
       display: flex;
  }
  .text h1{
    bottom: 250px;
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
   
    <div class="contanier">
    <?php
   include './includes/headerIndex.php';
?>
        
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