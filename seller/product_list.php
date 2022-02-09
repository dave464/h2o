<?php
require 'validate.php';
include '../connection.php';
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Index</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../main.css">
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
    </head>
    <body >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
      
    <!-- Navbar-->
      <?php include 'navbar.php' ?>
       
<!--
       <center>
             <div class="content">
                
<h2>Product List</h2>
<br>

<?php  
   $query = $conn->query("SELECT product.product_id,product.image,product.product_name,
   product.price, merchant.merchant_id
              FROM merchant RIGHT JOIN product ON merchant.merchant_id = product.merchant_id WHERE  product.merchant_id = '".$_SESSION['merchant_id']."'") or die(mysqli_error());
              while($fetch = $query->fetch_array()){
 ?>

    <div style="border:1px solid #FFF;width:45%;margin:7px;height:350px;float:left;background-color:#FFF;padding-bottom:20px">

        <center><img src = "../photo/<?php echo $fetch['image']?>" style="width:90%;height:200px"></center>
        <h3 style="color:#000;margin:5px;margin-left:15px"><?php echo $fetch['product_name']?> </h3>
        <h3 style="color:#000;margin:5px;margin-left:15px"> &#8369; <?php echo $fetch['price']?> </h3>
    </div>  
        
 <?php
       }
    ?>

   

            </div>

      -->

<!--------- SECTION Start-------->
<section style="background-color: #eee;">
  <div class="container py-5">
    <div class="row">

        
<?php  
   $query = $conn->query("SELECT product.product_id,product.image,product.product_name,
   product.price, merchant.merchant_id , merchant.business_name
              FROM merchant RIGHT JOIN product ON merchant.merchant_id = product.merchant_id WHERE  product.merchant_id = '".$_SESSION['merchant_id']."'") or die(mysqli_error());
              while($fetch = $query->fetch_array()){
 ?>


      <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">
        <div class="card">
          <div class="d-flex justify-content-between p-3">
            <p class="lead mb-0"><?php echo $fetch['business_name']?>'s Offer</p>
            <a href="#!">
              <div class="mask">
                <div class="d-flex justify-content-start align-items-end h-100">
                  <h2><span class="badge bg-warning ms-2">Sale</span></h2>
                </div>
              </div>
              <div class="hover-overlay">
                <div
                  class="mask"
                  style="background-color: rgba(251, 251, 251, 0.15);"
                ></div>
              </div>
            </a>
          </div>
          
          <img src = "../photo/<?php echo $fetch['image']?>"  class="card-img-top"/>
          <div class="card-body">
            

            <div class="d-flex justify-content-between mb-3">
              <h5 class="mb-0"><?php echo $fetch['product_name']?></h5>
              <h5 class="text-dark mb-0">&#8369; <?php echo $fetch['price']?>.00</h5>
            </div>

           
          </div>
        </div>
      </div>
            
 <?php
       }
    ?>

     
        </div>
      </div>
    </div>
  </div>
</section>
<!--------- SECTION END-------->

  

    </body>
</html>

