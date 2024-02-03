<?php 
    session_start();
    
    include 'autoload.php';

    $errors = [];

    if(isset($_POST['signup_btn'])) {
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $role = $_POST['role'];
        $user = new Auth($email ,$username, $password, $role);
        $reg_user_id = $user->register();
        if($reg_user_id > 0) {
            $users = new Users();
            $_user = $users->get($reg_user_id);
            
            $_SESSION['email'] = $_user['email'];
            $_SESSION['username'] = $_user['username'];
            $_SESSION['is_logged_in'] = true;
            $_SESSION['is_admin'] = $_user['is_admin'];
            if($_user['is_admin'] == 0)
                header("Location: LogIn.php");
            else
                header("Location: LogIn.php");
                $_SESSION['signup_success'] = true;
        } else {
            $errors[] = "Please enter valid username(email) and password (8 or more chars)!";
        }
    }
    
?>
<!DOCTYPE html>
<html>
<head>
    <title>TechWebsite- Sign up</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <style>
    h1 {font-family: 'Poppins', sans-serif; font-weight: 600;}
h2 {font-family: 'Poppins', sans-serif; font-weight: 500;}
p {font-family: 'Poppins', sans-serif; font-weight: 400;}
a {font-family: 'Poppins', sans-serif;font-weight: 400;}
label {font-family: 'Poppins', sans-serif;}

body {
    display: flex;
    flex-direction: column;
    height: 100vh;
   padding: 0px;
    margin: 0px;
    -webkit-font-smoothing: subpixel-antialiased;
}

.header {
    background-color: #f5f5f5;
    display: flex;
    justify-content: space-between;
    padding: 10px;
}



.content {
  flex: 1 0 auto;
  background-color: #f5f5f5;
}


#button {
    background-color: #00897b;
    border: none;
    border-radius: 15px;
    color: white;
    width: 100px;
    height: 40px;
    text-align: center;
    text-decoration: none;
    font-size: 15px;
    margin-top: 5px;
    -webkit-appearance: none;
}
#button:hover{
    background-color: #004d40;
    cursor: pointer;
}


.maincontainer {
    display: flex;
    flex-direction: column;
    /* justify-content: center; */
    min-height: 55vh;
    width: 60%;
    height: 500px;
    border-radius: 20px;
    margin: auto;
    margin-top: 75px;
    margin-bottom: 75px;
    padding: 50px;
    background-color: #eceff1;
    -webkit-box-shadow: 0px 0px 40px 5px rgba(0,0,0,0.75);
    -moz-box-shadow: 0px 0px 40px 5px rgba(0,0,0,0.75);
    box-shadow: 0px 0px 40px 5px rgba(0,0,0,0.75);
}

.forma {
    margin: auto;
    width: 50%;
}

input[type=text] {
    width: 100%;
    padding: 12px 5px;
    margin: 8px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    background-color: #00897b;
    color: white;
}

input[type=email] {
    width: 100%;
    padding: 12px 5px;
    margin: 8px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    background-color: #00897b;
    color: white;
}

::placeholder {
  color: white;
  opacity: 1;
}

input[type=password] {
    width: 100%;
    padding: 12px 5px;
    margin: 8px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    background-color: #00897b;
    color: white;
}

  </style>
</head>
<body>

<div class="header">
<?php
                    if(count($errors)) {
                ?>
                    <div class="alert alert-danger">
                        <ul>
                        <?php foreach($errors as $error): ?>
                            <li><?= $error ?></li>
                        <?php endforeach; ?>
                        </ul>
                    </div>
                <?php   
                    }
                ?>
    </div>
    <div class="content">
        <div class="maincontainer">
            <h1 style="text-align: center;">Sign up</h1>
            <p style="text-align:center;color:red;">
   
            </p>
            <div class="forma">
                <form name="signupForm" action="includes/signup.inc.php" onsubmit="return validateSignup()"
                    method="post">
                    <label for="username">Enter your username:</label><br>
                    <input type="text" id="username" name="username" placeholder="Enter your username...">
                    <label for="email">Enter your e-mail:</label><br>
                    <input type="email" id="email" name="email" placeholder="Enter your email...">
                    <br>
                    <label for="password">Enter your password:</label><br>
                    <input type="password" id="password" name="password" placeholder="Enter your password...">
                    <label for="confirmpassword">Confirm your password:</label><br>
                    <input type="password" id="confirmpassword" name="confirmpassword"
                        placeholder="Confirm your password...">
                    <br>
                    <br>
                    <input id="button" type="submit" name="submit" value="Sign Up" >
                </form>
            </div>
        </div>