<?php
require 'validate.php';
require '../connection.php';
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Delivery List</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="main.css">
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
        <link rel = "icon" href = "images/logo.png" type = "image/png">
    </head>

    <body  style="background-image:url('../img/bg.jpg');background-size:100% 100%;background-repeat:no-repeat;background-attachment:fixed" >
        
      <!-- Navbar-->
      <?php include 'navbar.php' ?>
       
      <center>
      <h1 style="color:#FFF;margin:5px;margin-left:15px">Delivery List</h1>
  <div class="container" >    
<?php
  $queryy = $conn->query("SELECT product.product_id,product.image,product.product_name,product.product_type,
  product.price, product.merchant_id, orderlist.order_id, orderlist.quantity, orderlist.total ,orderlist.status, 
  orderlist.date, customer.firstname, customer.lastname, customer.customer_id, deliveryman.name as delname FROM orderlist 
  RIGHT JOIN product ON orderlist.product_id = product.product_id 
  RIGHT JOIN customer ON orderlist.customer_id = customer.customer_id
  RIGHT JOIN deliveryman ON orderlist.deliveryman_id = deliveryman.deliveryman_id
  WHERE orderlist.status = 'ready' && orderlist.merchant_id = '".$_SESSION['merchant_id']."' 
  ") or die(mysqli_error());
  while($fetch = $queryy->fetch_array()){
?>
    <form action="action.php" method="POST" enctype="multipart/form-data" >
      <input type="hidden" value="<?php echo $fetch['product_id']?>" name="product_id">
      <input type="hidden" value="<?php echo $fetch['merchant_id']?>" name="merchant_id">
      <input type="hidden" value="<?php echo $fetch['customer_id']?>" name="customer_id">
      <input type="hidden" value="<?php echo $fetch['quantity']?>" name="quantity">
      <input type="hidden" value="<?php echo $fetch['quantity'] * $fetch['price']?>" name="total">
      <input type="hidden" value="<?php echo $fetch['order_id']?>" name="order_id">
              <div class="list">

                <h5>Product: <?php echo strtoupper($fetch['product_name'])?></h5>
                <h5>Delivery Man: <?php echo strtoupper($fetch['delname'])?></h5>
                <h5>Price:  &#8369; <?php echo $fetch['price']?></h5>
                <h5>Quantity: <?php echo $fetch['quantity']?></h5>
                <h5>Total To Pay: &#8369; <?php echo $fetch['quantity'] * $fetch['price']?></h5>
                <h5>Status: <?php echo strtoupper($fetch['status'])?></h5>
                <h5>Date: <?php echo strtoupper($fetch['date'])?></h5>
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
.select-container {
  display: flex;
  justify-content: center;
  align-items: center;
}
  .list {
    display: flex; 
    width: 100%;
    border:2px solid #000;
  }
  label {
    font-size: 12px;
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