<?php
require '../connection.php';
	if(ISSET($_POST['editProfile'])){

		$username= $_POST['username'];
		$firstname= $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$address = $_POST['address'];
		$email = $_POST['email'];
		$contact_number= $_POST['contact_number'];
		

	$conn->query("UPDATE `customer` SET `username` = '$username', `firstname` = '$firstname', `lastname` = '$lastname', `address` = '$address', `email` = '$email', `contact_number` = '$contact_number'
     WHERE `customer_id` = '".$_REQUEST['customer_id']."'") or die(mysqli_error());
		
		echo ("<script>
			alert('Your Personal Information has been Update successfully');
			document.location.href = 'settings.php';
			</script>");
	}
?>