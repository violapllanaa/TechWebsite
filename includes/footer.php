<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <title>Footer</title>
  <style>
    body {
  margin: 0;
  font-family: 'Arial', sans-serif;
}

.footer {
  background-color: #333;
  color: #fff;
  padding: 20px 0;
}

.footer-container {
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
}

.footer-column {
  width: 25%;
  padding: 0 15px;
  box-sizing: border-box;
}

h4 {
  color: #fff;
}

ul {
  list-style: none;
  padding: 0;
  margin: 0;
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
  color: #ffd700;
}

.social-links a {
  margin-right: 10px;
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
        <li><a href="#">About us</a></li>
        <li><a href="#">Our services</a></li>
        <li><a href="#">Privacy policy</a></li>
        <li><a href="#">Affiliate program</a></li>
      </ul>
    </div>
    <div class="footer-column">
      <h4>Get help</h4>
      <ul>
        <li><a href="#">FAQ</a></li>
        <li><a href="#">Shipping</a></li>
        <li><a href="#">Returns</a></li>
        <li><a href="#">Order status</a></li>
        <li><a href="#">Payment options</a></li>
      </ul>
    </div>
    <div class="footer-column">
      <h4>Online shop</h4>
      <ul>
        <li><a href="#">Watch</a></li>
        <li><a href="#">Bag</a></li>
        <li><a href="#">Shoes</a></li>
        <li><a href="#">Dress</a></li>
      </ul>
    </div>
    <div class="footer-column">
      <h4>Follow us</h4>
      <div class="social-links">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-linkedin-in"></i></a>
      </div>
    </div>
  </div>
</div>

</body>
</html>
