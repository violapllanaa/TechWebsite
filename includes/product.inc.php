<?php
include 'class-autoload.inc.php';
session_start();

if(!isset($_POST['submit'])){
  header("Location: /products.php");
}

$title = $_POST['title'];
$entertext = $_POST['entertext'];
$file = $_FILES['file'];
$telephone = $_SESSION['name'];

$product = new Product($title, $entertext, $file, $telephone);

if (isset($_POST['submit']) && !$product->productValidation() ) {
$product->uploadImage();
$product->newProductPost();
}
