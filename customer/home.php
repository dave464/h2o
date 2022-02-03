<?php
require 'validate.php';
require '../connection.php';
?>


<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <title>Home</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="style.css">
      <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
     
    </head>


<body  style="background-image:url('../img/bg.jpg');background-size:100% 100%;background-repeat:no-repeat;background-attachment:fixed">
        
      <!-- Navbar-->
      <?php include 'navbar.php' ?>
       


       <div class="content">
          
<h2>What's New?</h2>
<br>
      
<?php
            $query = $conn->query("SELECT * FROM `merchant`") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
          ?>  


        <div style="border:1px solid #FFF;width:90%;margin:5px;float:left;background-color:#FFF;padding-bottom:20px; margin-left: 25px;">

        <center><img src="../photo/<?php echo $fetch['image']?>" style="width:70%;height:200px"  onclick="window.location='product.php?merchant_id=<?php echo $fetch['merchant_id']?>'">
        <h3 style="color:#000;margin:5px;margin-left:15px"><?php echo $fetch['business_name']?></h3>
        <h3 style="color:#000;margin:5px;margin-left:15px"><?php echo $fetch['owner']?></h3>
        <h3 style="color:#000;margin:5px;margin-left:15px"><?php echo $fetch['address']?></h3>
        <h3 style="color:#000;margin:5px;margin-left:15px"><?php echo $fetch['contact_number']?></h3></div>

       <?php
       }
    ?>
    <br><br>
 
      </div>





    </body>
</html>



