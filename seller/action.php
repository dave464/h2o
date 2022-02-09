<?php
require 'validate.php';
require '../connection.php';

    if(ISSET($_POST['submitApprove'])){
		$product_id= $_POST['product_id'];
		$customer_id = $_POST['customer_id'];
        $merchant_id = $_POST['merchant_id'];
        $order_id = $_POST['order_id'];
        $quantity = $_POST['quantity'];
        $deliveryman_id = $_POST['deliveryman'];
        $total = $_POST['total'];
        // echo ("<script>
        // alert('$order_id');
        // </script>");


        $conn->query("UPDATE `orderlist` SET `status` = 'ready', `deliveryman_id`= $deliveryman_id  WHERE `order_id`= $order_id  && `merchant_id` = '".$_SESSION['merchant_id']."'" ) or die(mysqli_error());

        echo ("<script>
        alert('Approved');
        document.location.href = 'delivery_list.php';
        </script>");

	}
?>