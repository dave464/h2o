<?php
require 'validate.php';
require '../connection.php';
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Transactions</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="main.css">
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
        <link rel = "icon" href = "images/logo.png" type = "image/png">
    </head>
    <body style="background-image:url('../img/bg.jpg');background-size:100% 100%;background-repeat:no-repeat;background-attachment:fixed">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <!-- Navbar-->
      <?php include 'navbar.php' ?>


       <center>
       <h1 style="color:#FFF;margin:5px;margin-left:15px">TRANSACTIONS</h1>
       <div class="container" > 
  <div class="table-responsive">

<table class="table">
<thead>
  <tr id="tr">
    <!-- <th  scope="col">#</th> -->
    <th class="col" scope="col">PRODUCT NAME</th>
    <th scope="col">SELLER</th>
    <th scope="col">DELIVERY MAN</th>
    <th scope="col">QUANTITY</th>
    <th scope="col">UNIT PRICE</th>
    <th scope="col">TOTAL</th>
    <th scope="col">DATE</th>
    <th scope="col">ACTION</th>
  </tr>
</thead> 
<tbody>   

   <?php  
   $query = $conn->query("SELECT product.product_name, product.price, merchant.business_name,deliveryman.name,
   transactions.quantity, transactions.total, transactions.date, transactions.transaction_id FROM transactions 
   RIGHT JOIN deliveryman ON transactions.deliveryman_id = deliveryman.deliveryman_id 
   RIGHT JOIN product ON transactions.product_id = product.product_id 
   RIGHT JOIN merchant ON transactions.merchant_id = merchant.merchant_id 
   WHERE  deliveryman.merchant_id = '".$_SESSION['merchant_id']."'") or die(mysqli_error());
              while($fetch = $query->fetch_array()){
 ?>

        <tr>  
            <td class="align-middle"><?php echo strtoupper($fetch['product_name'])?></td>
            <td class="align-middle"><?php echo strtoupper($fetch['business_name'])?></td>
            <td class="align-middle"><?php echo strtoupper($fetch['name'])?></td>
            <td class="align-middle"><?php echo $fetch['quantity']?></td>
            <td class="align-middle"> &#8369; <?php echo $fetch['price']?>.00</td>
            <td class="align-middle"> &#8369; <?php echo $fetch['total']?>.00</td>
            <td class="align-middle"><?php echo $fetch['date']?></td>
            <td class="align-middle">
               <a onclick="window.location='transaction_details.php?transaction_id=<?php echo $fetch['transaction_id']?>'" class="myButton" style="color:#000;margin:5px;">
                View
               </a>
            </td>
           </tr> 

        <?php
            }
          ?>  

      </tbody>
    </table>
      </div>

    </body>
</html>



<style>

<style>
  .container {
    background-color:#FFF;
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