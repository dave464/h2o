<?php
require 'validate.php';
require '../connection.php';
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Product</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
        <link rel = "icon" href = "images/logo.png" type = "image/png">
    </head>

    <body  style="background-image:url('../img/bg.jpg');background-size:100% 100%;background-repeat:no-repeat;background-attachment:fixed" >
        
      <!-- Navbar-->
      <?php include 'navbar.php' ?>
       

<center>
             <div class="content">
                
<h2>Product List</h2>
<br>

<?php  
   $query = $conn->query("SELECT product.product_id,product.image,product.product_name,
   product.price, merchant.merchant_id
              FROM merchant RIGHT JOIN product ON merchant.merchant_id = product.merchant_id WHERE  product.merchant_id = '".$_REQUEST['merchant_id']."'") or die(mysqli_error());
              while($fetch = $query->fetch_array()){
 ?>

    <div style="border:1px solid #FFF;width:45%;margin:7px;height:350px;float:left;background-color:#FFF;padding-bottom:20px">

        <center><img src = "../photo/<?php echo $fetch['image']?>" style="width:90%;height:200px" onclick="window.location='product_view.php?product_id=<?php echo $fetch['product_id']?>'"></center>
        <h3 style="color:#000;margin:5px;margin-left:15px"><?php echo $fetch['product_name']?> </h3>
        <h3 style="color:#000;margin:5px;margin-left:15px"> &#8369; <?php echo $fetch['price']?> </h3>
    </div>  
        
 <?php
       }
    ?>

   

            </div>





    </body>
</html>