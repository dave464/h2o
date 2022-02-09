<?php
require 'validate.php';
require '../connection.php';
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Delivery List</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="main.css">
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
        <link rel = "icon" href = "images/logo.png" type = "image/png">
    </head>

    <body  >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <!-- Navbar-->
      <?php include 'navbar.php' ?>
       
      <center>
       <p class="text-center h1 fw-bold mb-3 mx-1 mx-md-4 mt-4"  
      style="color:#0073ae;text-shadow: 1px 1px #03a9f4;">DELIVERY LIST
      </p>
  <div class="container" > 
  <div class="table-responsive">

<table class="table">
<thead>
  <tr id="tr">
    <!-- <th  scope="col">#</th> -->
    <th class="col" scope="col">PRODUCT NAME</th>
    <th scope="col">DELIVERY MAN</th>
    <th scope="col">PRICE</th>
    <th scope="col">QUANTITY</th>
    <th scope="col">TOTAL TO PAY</th>
    <th scope="col">STATUS</th>
    <th scope="col">TYPE</th>
    <th scope="col">DATE</th>
    <th scope="col"></th>
  </tr>
</thead> 
<tbody>   
<?php
  $delquery = $conn->query("SELECT product.product_id,product.image,product.product_name,product.product_type,
  product.price, product.merchant_id, orderlist.order_id, orderlist.quantity, orderlist.total ,orderlist.status, orderlist.type,
  orderlist.date, customer.firstname, customer.lastname, customer.customer_id, deliveryman.name, deliveryman.deliveryman_id as delname FROM orderlist 
  RIGHT JOIN product ON orderlist.product_id = product.product_id 
  RIGHT JOIN customer ON orderlist.customer_id = customer.customer_id
  RIGHT JOIN deliveryman ON orderlist.deliveryman_id = deliveryman.deliveryman_id
  WHERE orderlist.status = 'ready' && orderlist.deliveryman_id = '".$_SESSION['deliveryman_id']."' 
  ") or die(mysqli_error());
  while($fetch = $delquery->fetch_array()){
?>
    <form action="action.php" method="POST" enctype="multipart/form-data" >
    <input type="hidden" value="<?php echo $fetch['product_id']?>" name="product_id">
      <input type="hidden" value="<?php echo $fetch['merchant_id']?>" name="merchant_id">
      <input type="hidden" value="<?php echo $fetch['customer_id']?>" name="customer_id">
      <input type="hidden" value="<?php echo $fetch['quantity']?>" name="quantity">
      <input type="hidden" value="<?php echo $fetch['quantity'] * $fetch['price']?>" name="total">
      <input type="hidden" value="<?php echo $fetch['order_id']?>" name="order_id">
     

      <tr id="tr2">
      <!-- <th class="align-middle" scope="row">1</th> -->
      <td class="align-middle"><?php echo strtoupper($fetch['product_name'])?></td>
      <td class="align-middle"><?php echo strtoupper($fetch['name'])?></td>
      <td class="align-middle"> &#8369;<?php echo $fetch['price']?>.00</td>
      <td class="align-middle"><?php echo $fetch['quantity']?></td>
      <td class="align-middle">&#8369; <?php echo $fetch['quantity'] * $fetch['price']?>.00</td>
      <td class="align-middle"><?php echo strtoupper($fetch['status'])?></td>
      <td class="align-middle"><?php echo strtoupper($fetch['type'])?></td>
      <td class="align-middle"><?php echo $fetch['date']?></td>

      <td class="align-middle">
          <button type="submit" name="submitDeliver"  class="myButton" style="color:#000;margin:5px;">Set as Delivered</button>
      </td>

    </tr>
    </form>
<?php
       }
    ?>
              </tbody>
</table>

</div>

</div>


    </body>
</html>

<style>
  * {
        color: black;
  }
  .container {

    /* display: flex;
    flex-direction: column; */
    background-color:#FFF;
    /* border:12px solid #FFF;
    min-height: 500px;
    width:80%;margin:5px;
    padding-bottom:10px; */

  }
  td{
    //font-size: 10px;
    white-space: nowrap;
  }
  th {
    //font-size: 10px;
    white-space: nowrap;
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