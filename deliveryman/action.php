<?php
require 'validate.php';
require '../connection.php';

    if(ISSET($_POST['submitDeliver'])){
		$product_id= $_POST['product_id'];
		$customer_id = $_POST['customer_id'];
        $merchant_id = $_POST['merchant_id'];
        $order_id = $_POST['order_id'];
        $quantity = $_POST['quantity'];

        $total = $_POST['total'];

        $conn->query("UPDATE `orderlist` SET `status` = 'delivered' WHERE `order_id`= $order_id" ) or die(mysqli_error());

        $conn->query("INSERT INTO `transactions`(customer_id, product_id, merchant_id, deliveryman_id, quantity, total) 
        VALUES('$customer_id','$product_id','$merchant_id','".$_SESSION['deliveryman_id']."','$quantity','$total' )") 
        or die(mysqli_error());
        echo ("<script>
        document.location.href = 'home.php';
        </script>");
	}


///////////-------------EDIT DELIVERYMAN'S ACCOUNT ------------/////
  if(ISSET($_POST['editProfile'])){

        $name= $_POST['name'];
		$contact_number = $_POST['contact_number'];
		$plate_number = $_POST['plate_number'];
		$username = $_POST['username'];
  

$conn->query("UPDATE `deliveryman` SET `username` = '$username', `name` = '$name', `contact_number` = '$contact_number'
  , `plate_number` = '$plate_number' WHERE `deliveryman_id` = '".$_REQUEST['deliveryman_id']."'") or die(mysqli_error());
  
  echo ("<script>
    alert('Your Personal Information has been Update successfully');
    document.location.href = 'settings.php';
    </script>");
  }








?>