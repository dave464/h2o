<?php
include "connect.php";
	if(ISSET($_POST['add_inspection'])){
		$merchant_id = $_POST['merchant_id'];	
		$status = $_POST['status'];

        $file = addslashes(file_get_contents($_FILES['file']['tmp_name']));
        $photo_name = addslashes($_FILES['file']['name']);
        $photo_size = getimagesize($_FILES['file']['tmp_name']);
        move_uploaded_file($_FILES['file']['tmp_name'],"file/" . $_FILES['file']['name']);  

		
		$conn->query("INSERT INTO `inspection` (merchant_id,file,status) VALUES('$merchant_id','$photo_name','$status')") or die(mysqli_error());
			echo
			"<script>
			alert('Data Added Successfully');
			document.location.href = 'inspection.php';
			</script>"
			;
		
	}


	if (isset($_POST['merchant_id']) && !empty($_POST['merchant_id'])) {
 
		// Fetch state name base on country id
		$query = "SELECT * FROM merchant WHERE merchant_id = ".$_POST['merchant_id'];
		$result = $conn->query($query);


		if ($result->num_rows > 0) {
			echo '<option value="">Select State</option>';
			while ($row = $result->fetch_assoc()) {
			echo '<option value="'.$row['merchant_id'].'">'.$row['name'].'</option>';
			}
			} 

	}
?>