<?php
require '../connection.php';
	if(ISSET($_POST['submit'])){

		$username= $_POST['username'];
		$password= $_POST['password'];
		$firstname= $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$address = $_POST['address'];
		$email = $_POST['email'];
		$contact_number= $_POST['contact_number'];
		

	$conn->query("INSERT INTO `customer`(username, password, firstname, lastname, address, email,contact_number) VALUES('$username','$password','$firstname','$lastname','$address','$email','$contact_number')") or die(mysqli_error());
		
		echo ("<script>
			alert('Your account has been created successfully');
			document.location.href = 'index.php';
			</script>");
	}
?>