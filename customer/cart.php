<?php
require 'validate.php';
require '../connection.php';
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Cart</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="main.css">
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
        <link rel = "icon" href = "images/logo.png" type = "image/png">
    </head>

    <body  style="background-image:url('../img/bg.jpg');background-size:100% 100%;background-repeat:no-repeat;background-attachment:fixed" >
        
      <!-- Navbar-->
      <?php include 'navbar.php' ?>
       
      <center>
      <h1 style="color:#FFF;margin:5px;margin-left:15px">Cart</h1>
  <div class="container" >    
<?php
  $query = $conn->query("SELECT product.product_id,product.image,product.product_name,product.product_type,
  product.price, product.merchant_id, cart.cart_id,cart.number_of_items,cart.product_id, merchant.business_name FROM cart 
  RIGHT JOIN product ON cart.product_id = product.product_id 
  RIGHT JOIN merchant ON product.merchant_id = merchant.merchant_id
  WHERE product.product_id = cart.product_id && cart.customer_id = '".$_SESSION['customer_id']."'
  ") 
  or die(mysqli_error());
  while($fetch = $query->fetch_array()){
?>
    <form action="action.php" method="POST" enctype="multipart/form-data" >
      <input type="hidden" value="<?php echo $fetch['product_id']?>" name="product_id">
      <input type="hidden" value="<?php echo $_SESSION['customer_id']?>" name="customer_id">
      <input type="hidden" value="<?php echo $fetch['cart_id']?>" name="cart_id">
      <input type="hidden" value="<?php echo $fetch['merchant_id']?>" name="merchant_id">
      <input type="hidden" value="<?php echo $fetch['number_of_items']?>" name="quantity">
      <input type="hidden" value="<?php echo $fetch['number_of_items'] * $fetch['price']?>" name="total">
          <!-- <center>
            <div class="slideshow-container">
              <div class="mySlides fade">  
                <img src="../photo/<?php echo $fetch['image']?>" style="width:100%;height:350px" ="window.location='../photo/<?php echo $fetch['image']?>'">
            </div>
                <a class="prev" onclick="plusSlides(-1)" style="left:0">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a></div>
              </center> -->
              <div class="list">

                <h5>Product: <?php echo strtoupper($fetch['product_name'])?></h5>
                <h5>Seller: <?php echo strtoupper($fetch['business_name'])?></h5>
                <h5>Price:  &#8369; <?php echo $fetch['price']?></h5>
                <h5>Quantity: <?php echo $fetch['number_of_items']?></h5>
                <h5>Total: &#8369; <?php echo $fetch['number_of_items'] * $fetch['price']?></h5>
                <button type="submit" name="submitPurchase"  class="myButton" style="color:#000;margin:5px;">Purchase</button>
                <button type="submit" name="submitRemove"  class="myButton" style="color:#000;margin:5px;">Remove from cart</button>
            </div>
    </form>
<?php
       }
    ?>

</div>





    </body>
</html>

<style>
  .container {
    display: flex;
    flex-direction: column;
    background-color:#FFF;
    border:12px solid #FFF;
    min-height: 500px;
    width:80%;margin:5px;
    padding-bottom:10px;

  }
  .list {
    display: flex; 
    width: 100%;
    border:2px solid #000;
  }
.myButton {
  box-shadow:inset 0px 1px 0px 0px #fff6af;
  background:linear-gradient(to bottom, #ffec64 5%, #ffab23 100%);
  background-color:#ffec64;
  border-radius:6px;
  border:1px solid #ffaa22;
  display:inline-block;
  cursor:pointer;
  color:#333333;
  font-family:Arial;
  font-size:15px;
  font-weight:bold;
  padding:6px 24px;
  text-decoration:none;
  text-shadow:0px 1px 0px #ffee66;
}
.myButton:hover {
  background:linear-gradient(to bottom, #ffab23 5%, #ffec64 100%);
  background-color:#ffab23;
}
h5 {
  width: 150px;
  color:#000;
  padding:20px 0px;
}
.myButton:active {
  position:relative;
  top:1px;
}
</style>