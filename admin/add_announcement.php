<?php
	if(ISSET($_POST['announcement'])){
		$message= $_POST['message'];
				
			$conn->query("INSERT INTO `announcement` (message) VALUES('$message')") or die(mysqli_error());
			header("location:announcement.php");
		
	}
?>