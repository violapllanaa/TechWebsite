<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {
       
        $product = $_POST['product'];
        $price= $_POST['size'];
        $qty = $_POST['qty'];

         $insert = mysqli_query($conn,"INSERT INTO product_size_variation
         (product_id,size_id,quantity_in_stock) VALUES ('$product','$price','$qty')");
 
         if(!$insert)
         {
             echo mysqli_error($conn);
             header("Location: ../dashboard.php?variation=error");
         }
         else
         {
             echo "Records added successfully.";
             header("Location: ../dashboard.php?variation=success");
         }
     
    }
        
?>