<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <style>
        .header {
  position: fixed;
  background-color: #fff;
  top:0;
  left: 0;
 height: 130px;
 width: 100%;
  padding: 20px 10px;
  display: flex;
  justify-content:space-around;
  align-items: center;
  z-index: 9999;
  box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
}
.header a {
  list-style: none;
  display: inline-block;
  margin: 0 20px;
  position: relative;
  text-decoration: none;
  color: rgb(0, 0, 0);
  text-transform: uppercase;
}
.header a::after {
  content: "";
  height: 3px;
  width: 0%;
  background: rgb(0, 85, 255);
  position: absolute;
  left: 0;
  bottom: -10px;
  transition: 0.5s;
}
.header a:hover::after {
  width: 100%;
}
.title {
  margin-bottom: 70px;
  width: 260px;
  height: 60px;
  display: flex;
  justify-content: center;
  align-items: center;
  color: black;
  font-family: Work Sans;
  font-size: 20px;
  font-style: normal;
  font-weight: 600;
  line-height: normal;
}
.tech {
  color: rgb(0, 85, 255);
}
.menu {
  width: 500px;
  height: 50px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.text {
  width: 160px;
  height: 26px;
  border-radius: 4px;
  background: #fff;
  background-image: url("search.png");
  background-size: 20px;
  background-position: 8px 50%;
  padding-left: 30px;
  background-repeat: no-repeat;
  transition: border-color 0.2s ease;
  display: flex;
 text-align: start;
  align-items: first baseline;
}

.text:hover {
  border-color: #4a90e2; 
}
.buttons {
  position: relative;
  width: 340px;
  height: 90px;
  align-items: center;
  display: flex;
  justify-content: space-around;
  border: 1px solid red;
  
}
.logIn_btn {
  width: 150px;
  height: 40px;
  background-color: rgb(0, 85, 255);
  border: 1px solid rgb(0, 85, 255);

  border-radius: 10px;
}
.logIn_btn a {
  text-decoration: none;
  list-style: none;
  color: white;
}
.signup_btn {
  width: 150px;
  height: 40px;
  background-color: rgb(0, 85, 255);
  border: 1px solid rgb(0, 85, 255);

  border-radius: 10px;
}
.signup_btn a {
  text-decoration: none;
  list-style: none;
  color: white;
}
.menu a {
  text-decoration: none;
  color: #000;
  font-family: Work Sans;
  font-size: 16px;
  font-style: normal;
  font-weight: 500;
  line-height: normal;
}
    </style>
</head>
<body>
  <div class="header">
        <div class="menu">
          <a class="menu-link" href="index.php">Home</a>
          <a class = "menu-link" href="./News.php">News</a>
          <a class="menu-link" href="AboutUs.php">About</a>
          <a class="menu-link" href="Products.php">Products</a>
          <a class="menu-link" href="ContactUs.php">Contact</a>
      </div>
      <div class="title">
          <h1><span class="tech">Tech</span> Website</h1>
      </div>
      <div class="Buttons">
          <button class="signup_btn"><a href="./SignUp.php" alt="signup">SIGN UP</a></button>
          <button class="logIn_btn"><a href="./LogIn.php" alt="login">LOG IN</a></button>
       </div>
      <div class="icons"></div>
    </div>
</div>
</body>
</html>
