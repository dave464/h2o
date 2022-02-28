<?php
include "connect.php";
	if(ISSET($_POST['add_feedback'])){
		$merchant_id = $_POST['merchant_id'];
		$date = $_POST['date'];
		$critea_1 = $_POST['critea_1'];
		
		
			$conn->query("INSERT INTO `feedback` ( merchant_id,date,critea_1) VALUES( '$merchant_id','$date','$critea_1')") or die(mysqli_error());
			echo
			"<script>
			alert('Data Added Successfully');
			document.location.href = 'feedback.php';
			</script>"
			;
		
	}


	
?>