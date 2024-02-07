<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <title>Footer</title>
  <style>
    h1 {font-family: 'Poppins', sans-serif; font-weight: 600;}
h2 {font-family: 'Poppins', sans-serif; font-weight: 500;}
p {font-family: 'Poppins', sans-serif; font-weight: 400;}
a {font-family: 'Poppins', sans-serif;font-weight: 400;}
label {font-family: 'Poppins', sans-serif;}

    body {
box-sizing: border-box;
  font-family: 'Arial', sans-serif;
}

.footer {
  position: relative;
  bottom:0;
  left: 0;
  width: 100%;
  height: 250px;
  background-color: #333;
  color: #fff;
  padding: 20px 0;
  display: flex;
  align-items: center;
  justify-content: center;

}

.footer-container {
  width: 1100px;
  height: 240px;
  display: flex;
  align-items: center;
  justify-content: space-around;
  padding-top: 10px 10px;
}

.footer-column {
  width: 200px;
  height: 200px;
  padding: 0 40px;
  margin: 10px;
  width: 25%;
  box-sizing: border-box;
  display: flex;
  align-items: first baseline;
  flex-direction: column;

}
.footer-columnSOCIAL{
  width: 200px;
  height: 200px;
  padding: 0 40px;
  margin: 10px;
  width: 25%;
  box-sizing: border-box;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}
.footer-columnSOCIAL h4{
  display: flex;
  margin-bottom:10px;
  color:red;

}
.footer-column h4{
  display: flex;
  margin-bottom:20px;
  color:red;
}



ul {
  list-style: none;

}

li {
  margin-bottom: 10px;
}

a {
  text-decoration: none;
  color: #fff;
  transition: color 0.3s ease;
}

a:hover {
  color: red;
}

.social-links a {

  margin-right: 10px;
  padding: 7px 0px;
  color: #fff;
  font-size: 20px;
}


  </style>
</head>
<body>

<div class="footer">
  <div class="footer-container">
    <div class="footer-column">
      <h4>Company</h4>
      <ul>
        <li><a href="./AboutUs.php">About us</a></li>
        <li><a href="Contact.php">Our services</a></li>
        <li><a href="#">Privacy policy</a></li>
        <li><a href="#">Affiliate program</a></li>
      </ul>
    </div>
    <div class="footer-column">
      <h4>Get help</h4>
      <ul>
        <li><a href="#">FAQ</a></li>
        <li><a href=".Products.php">Shipping</a></li>
        <li><a href="#">Returns</a></li>
        <li><a href="#">Order status</a></li>
        <li><a href="#">Payment options</a></li>
      </ul>
    </div>
    <div class="footer-column">
      <h4>Online shop</h4>
      <ul>
        <li><a href="./Desktops.php">Desktops</a></li>
        <li><a href="./Laptops.php">Laptops</a></li>
        <li><a href="./Phones.php">Tablets</a></li>
        <li><a href="./Phones.php">Phones</a></li>
      </ul>
    </div>
    <div class="footer-columnSOCIAL">
      <h4>Follow us</h4>
      <div class="social-links">
        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
        <a href="https://twitter.com/?lang=en"><i class="fab fa-twitter"></i></a>
        <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
        <a href="https://www.linkedin.com/feed/"><i class="fab fa-linkedin-in"></i></a>
      </div>
    </div>
  </div>
</div>

</body>
</html>
