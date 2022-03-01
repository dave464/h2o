<?php
include "connect.php";
	if(ISSET($_POST['announcement'])){
		$message= $_POST['message'];
				
			$conn->query("INSERT INTO `announcement` (message) VALUES('$message')") or die(mysqli_error());
			echo
			"<script>
			alert('Message Send Successfully');
			document.location.href = 'announcement.php';
			</script>"
			;
		
	}
?>