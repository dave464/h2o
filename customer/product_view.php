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
        <link rel="stylesheet" href="../main.css">
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
    </head>

    <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  
     
    <!-- Navbar-->
    <?php include 'navbar.php' ?>
   
    <?php
      $query = $conn->query("SELECT * FROM `product` WHERE `product_id` = '$_REQUEST[product_id]'") or die(mysqli_error());
      $fetch = $query->fetch_array();
    ?>
       
       <p class="text-center h1 fw-bold mb-3 mx-1 mx-md-4 mt-4"  
       style="color:#0073ae;text-shadow: 1px 1px #03a9f4;"><?php echo $fetch['product_name']?> - &#8369; <?php echo $fetch['price']?>.00
       </p>   


<!--------- SECTION Start-------->
<center><section  style="margin-top:-30px;">
  <div class="container py-5">


    <?php  
      $query = $conn->query("SELECT product.product_id,product.image,product.product_name,
      product.price,product.product_type, merchant.merchant_id, merchant.business_name
      FROM merchant RIGHT JOIN product ON merchant.merchant_id = product.merchant_id WHERE  product_id = '".$_REQUEST['product_id']."'") or die(mysqli_error());
    ?>

<form action="addcart.php" method="POST" enctype="multipart/form-data" >
   <input type="hidden" value="<?php echo $fetch['product_id']?>" name="product_id">
   <input type="hidden" value="<?php echo $_SESSION['customer_id']?>" name="customer_id">
          
   
      <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">
        <div class="card">
          
          <img src = "../photo/<?php echo $fetch['image']?>" 
          onclick="window.location='product_view.php?product_id=<?php echo $fetch['product_id']?>'"
           class="card-img-top"/>
           
          <div class="card-body">
          
            <div class="d-flex justify-content-between">
              <p class="small"><?php echo $fetch['product_type']?></p>
             
            </div>
                

            <div class="d-flex justify-content-between mb-3">
              <h5 class="mb-0"><?php echo $fetch['product_name']?></h5>
              <h5 class="text-dark mb-0">&#8369; <?php echo $fetch['price']?>.00</h5>
            </div>

            <hr style="background-color: black">
           <!--  <div class="d-flex justify-content-between mb-2">
              <p class="text-muted mb-0">Rating: </p>
             <div class="ms-auto text-warning">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
            </div>-->

            <div class="d-flex justify-content-between mb-3">
              <h5 class="mb-0">Description: <?php echo $fetch['description']?></h5>
              
            </div>

            <div class="d-flex justify-content-center align-items-center  mb-3">
              
            <center><br>Enter Quantity:<br><span style="font-size:100%;color:#CCCC00;margin:20px">
            <input type="number" name="number_of_items" class="email" id="number" min="1" pattern="[1-9]*"
            style="text-align:center"></span></center>
              
            </div>
            
            <center><button type="submit" name="submit" onclick="addcart();" class="btn btn-primary btn-lg ">
            <i class="fas fa-cart-plus"></i> Add to Cart</button><br>
          
          </div>
        </div>
      </div>
            
 
     
        </div>
      </div>
      </form>
  </div>
</section>
<!--------- SECTION END-------->    

   <script>
    function addcart() {
      var number = document.getElementById("number").value;
      
      if(number=="") {
        alert("Please enter quantity first");
      }

      if(number<="0") {
        alert("Value be must greater than or equal to 1");
      }

      
    }
    function addpurchase() {
      var number = document.getElementById("number").value;
      
      if(number=="") {
        alert("Please enter quantity first");
      } else {
        window.location='addpurchase.php?item=55&number='+number+'&username=dave&status=1';
      }
      
    }
    function rateproduct() {
      var rate = document.getElementById("rate").value;
      
      if(rate == '') {
        alert("Select ratings to continue..");
      } else {
          window.location='rate.php?item=55&rate='+rate+'';
      }
    }
    </script>
    
    

    </body>
</html>



<style>
.card{
  box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #fff;

}

.btn {
  width: 200px;
  border-radius: 6px;
  box-shadow: 3px 3px 3px #b1b1b1, -3px -3px 3px #fff;
  margin-top:30px;
}

</style>
