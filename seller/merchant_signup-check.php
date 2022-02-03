<?php
require '../connection.php';
	if(ISSET($_POST['submit'])){

		$username= $_POST['username'];
		$password= $_POST['password'];
		$business_name= $_POST['business_name'];
		$owner = $_POST['owner'];
		$address = $_POST['address'];
		$email = $_POST['email'];
		$contact_number= $_POST['contact_number'];
		
		$image = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
		$photo_name = addslashes($_FILES['photo']['name']);
		$photo_size = getimagesize($_FILES['photo']['tmp_name']);
		move_uploaded_file($_FILES['photo']['tmp_name'],"../photo/" . $_FILES['photo']['name']);

	$conn->query("INSERT INTO `merchant`(username, password, business_name, owner, address, email,contact_number,image) VALUES('$username','$password','$business_name','$owner','$address','$email','$contact_number','$photo_name')") or die(mysqli_error());
		
		echo ("<script>
			alert('Your account has been created successfully');
			document.location.href = 'index.php';
			</script>");
	}
?>