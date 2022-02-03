<?php
require '../connection.php';
	if(ISSET($_POST['submit'])){

		$merchant_id= $_POST['merchant_id'];
		$name= $_POST['name'];
		$contact_number = $_POST['contact_number'];
		$plate_number = $_POST['plate_number'];
		$username = $_POST['username'];
		$password= $_POST['password'];
		

	$conn->query("INSERT INTO `deliveryman`(merchant_id, name, contact_number, plate_number, username, password) VALUES('$merchant_id','$name','$contact_number','$plate_number','$username','$password')") or die(mysqli_error());
		header("location:deliveryman.php");
	}
?>