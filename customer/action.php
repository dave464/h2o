<?php
require 'validate.php';
require '../connection.php';
	if(ISSET($_POST['submitRemove'])){
		$product_id= $_POST['product_id'];
		$cart_id = $_POST['cart_id'];

        $conn->query("DELETE FROM `cart` WHERE `product_id`= $product_id  && `customer_id` = '".$_SESSION['customer_id']."'") or die(mysqli_error());
        echo ("<script>
        alert('Removed to cart');
        document.location.href = 'cart.php';
        </script>");

	}

    if(ISSET($_POST['submitPurchase'])){
		$product_id= $_POST['product_id'];
		$customer_id = $_POST['customer_id'];
        $merchant_id = $_POST['merchant_id'];
        $quantity = $_POST['quantity'];
        $total = $_POST['total'];


        $conn->query("INSERT INTO `orderlist`(customer_id, product_id, merchant_id, status, quantity, total) 
        VALUES('$customer_id','$product_id','$merchant_id','pending','$quantity','$total' )") 
        or die(mysqli_error());

        $conn->query("DELETE FROM `cart` WHERE `product_id`= $product_id  && `customer_id` = '".$_SESSION['customer_id']."'") or die(mysqli_error());
        echo ("<script>
        alert('Successfully Purchased');
        document.location.href = 'purchase.php';
        </script>");

	}
?>