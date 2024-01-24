<?php
$host="localhost";
$user = "root";
$password="";
$db="user";

session_start();

$data=mysqli_connect($host,$user,$password,$db);
if($data===false){
    die("Connection error");
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$username=$_POST["username"];
$password=$_POST["password"];

$sql="select * from login where username='".$username. "' AND  password='".$password. "' ";

$result = mysqli_query($data,$sql); 

$row=mysqli_fetch_array($result);

 if ($row["usertype"]== "user")
 {
    $_SESSION["username"]=$username;

   header("location:user.php");
echo ("user");
 }
 else if($row["usertype"]== "admin"){

    $_SESSION["username"]=$username;
    
    header("location:admin.php");
    echo ("admin");
 }
 else {
    echo "username or password is incorrect";
 }

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="./css/LogIn.css">
  
  <title>TechWebsite- LOG IN</title>
</head>
<body>
  <form class="form" action = "#" method = "POST ">
    <div class="container ">
      <div class="login_form">
        <h1 >LOG IN</h1>
        <div class="relative">
          <label for="full-name" class="leading">Username</label>
          <input type="text" id="username" name="username" class="username" required>
        </div>
        <div class="relative">
          <label for="password" class="leading">Password</label>
          <input type="password" id="password" name="password" class="password" required>
          <div class="btn">
           <input type="submit" value = "Log In" class = "button">
          </div>
          <p class="forgetPsw">Forget password! Please contact adminstration.We care about your data</p>
       
        </div>
       
      </div>

    </div>
    <p>If you don't have an account. <a href="SignUp.php" >Sign up </a></p>
  </form>
</body>
</html>