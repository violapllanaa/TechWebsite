<?php
session_start();
if(!isset($_SESSION["username"])){
    
    header("Location:LogIn.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>THIS IS USER PAGE</h1>
    <?php echo   $_SESSION["username"]  ?>

    <a href="LogOut.php">Logout</a>
</body>
</html>