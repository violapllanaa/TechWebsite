<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Website</title>
    <link rel="stylesheet" href="./css/style.css">
<style>
    *{
  margin:0;
  padding:0;
  box-sizing: border-box;
}
body {
  max-width: 100%;
  font-family: 'Poppins', sans-serif;
}
.main {
  margin-top: 130px;
  width: 100%;
  padding: 50px 20px;
  background-size: 100%;
  background-position: right;
  display: flex;
  justify-content: center;
  align-items: center;
  color: white;
 background-image: url('./img/blabla.jpg');
 background-repeat: no-repeat;
 
}
.paragraph_main {
  display: flex;
  flex-direction: column;
  width: 600px;
  height: 500px;
  display: flex;
  align-items: center;
}

.paragraph_main h1 {
  font-size: 56px;
  font-weight: 700;
  width: 500px;
  height: 100px;
  margin-top: 150px;
}
.paragraph_main h3 {
  margin: 20px;
  width: 500px;
  height: 50px;
  display: flex;
  justify-content: center;
}
.paragraph_main a {
  align-items: center;
  width: 190px;
  height: 50px;
  text-decoration: none;
  display: flex;
  justify-content: center;
}

</style>
</head>
<body> 
    <?php
   include './includes/headerIndex.php';
?>
        <div class="main">
            <div class="paragraph_main">
                <h1>The future is now..</h1>
                <h3>Check our latest products</h3>
                <a href="Products.php" class="button">Shop now</a>
            </div>
            <div class="paragraph_img">
            </div>
          
        </div>
       
        <?php
   include './includes/footer.php';
?>

 
</body>
</html>