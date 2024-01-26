<?php
include 'class-autoload.inc.php';
session_start();

if (!isset($_POST['submit'])) {
    header("Location: LogIn.php");
    exit();
}

$goback = '<br/><a href="javascript:history.back()">Go Back</a>';
$errorFound = "Please fix the following:<br>";

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];
$data = $_POST;

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$signup = new Signup($name, $email, $password);
$signupValidation = new SignupValidation();

if (isset($_POST['submit'])) {
    if ($signupValidation->doSignupValidation() && $signup->checkEmailDatabse()) {
        // Signup logic
        $signupResult = $signup->doSignup();

        if ($signupResult) {
            // Signup success
            $_SESSION['signup_success'] = true;
            header("Location: LogIn.php"); // Redirect to login page
            exit();
        } else {
            // Signup failed
            echo $errorFound;
            echo $signup->userError;
            echo $signupValidation->showError;
            echo $goback;
        
        }
    }
}

echo "Signup logic executed, Please log in";

echo '<a href="LogIn.php">LogIn</a>';


?>
