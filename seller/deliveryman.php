<?php
require 'validate.php';
require '../connection.php';
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Deliveryman</title>
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="main.css">
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
      <!-- Navbar-->
      <?php include 'navbar.php' ?>


      <p class="text-center h1 fw-bold mb-3 mx-1 mx-md-4 mt-4"  
      style="color:#0073ae;text-shadow: 1px 1px #03a9f4;">DELIVERY MAN
      </p>

      
  <!---- SECTION Start---->
      <section style="margin-top:-30px;" >
  <div class="container py-5">
  
  <button class="btn btn-primary" style="float:left; width:200px;" 
  onclick="window.location='add_deliveryman.php'">Add Delivery man
  </button>
  

    <table class="table " >
  <thead class="table-dark">
  <tr>
        <th>Name</th>
        <th>Contact Number</th>
        <th>Plate Number</th>
        <th>Action</th>
      </tr>
  </thead>
  <tbody>
  <?php  
   $query = $conn->query("SELECT deliveryman.deliveryman_id, deliveryman.name,deliveryman.contact_number,
   deliveryman.plate_number, merchant.merchant_id
              FROM merchant RIGHT JOIN deliveryman ON merchant.merchant_id = deliveryman.merchant_id WHERE  deliveryman.merchant_id = '".$_SESSION['merchant_id']."'") or die(mysqli_error());
              while($fetch = $query->fetch_array()){
 ?>

        <tr>  
            <td><?php echo $fetch['name']?></td>
            <td><?php echo $fetch['contact_number']?></td>
            <td><?php echo $fetch['plate_number']?></td>
            <td><a href="add_query_deliveryman.php?deliveryman_id=<?php echo $fetch['deliveryman_id']?>" onclick = "confirmationDelete(this); return false;"><input type="submit" style="background-color:red; border:none;border-radius: 25px;
            box-shadow: 3px 3px 3px #b1b1b1, -3px -3px 3px #fff; color:white; height: 25px; width:70px;"
              value="Delete"></a>
            </td>

           </tr> 

        <?php
            }
          ?>  
      

  </tbody>
</table>


    </div>
  
</section>
<!--------- SECTION END-------->
  
<script type = "text/javascript">
	function confirmationDelete(anchor){
		var conf = confirm("Are you sure you want to delete this record?");
		if(conf){
			window.location = anchor.attr("href");
		}
	} 
</script>

    </body>
</html>


