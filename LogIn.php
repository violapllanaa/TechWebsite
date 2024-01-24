<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="./css/LogIn.css">
  <link rel="icon" type="image/svg" href="./assets/logos.png" sizes="16*16">
  <title>TechWebsite- LOG IN</title>
</head>

<body>
  <form class="form">
    <div class="container ">
      <div class="login_form">
        <h1 >LOG IN</h1>
        <div class="relative">
          <label for="full-name" class="leading">Email Address</label>
          <input type="email" id="email" name="email" class="email">
        </div>
        <div class="relative">
          <label for="password" class="leading">Password</label>
          <input type="password" id="password" name="password" class="email">
          <div class="btn">
          <button class="">Login</button>
          </div>
          <p class="forgetPsw">Forget password! Please contact adminstration.We care about your data</p>
       
        </div>
       
      </div>

    </div>
    <p>If you don't have an account. <a href="signup.php" >Sign up </a></p>
  </form>
</body>
</html>