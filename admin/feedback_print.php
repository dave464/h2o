<?php
ob_start();	
?>

<!DOCTYPE html> 
<?php
	require_once 'validate.php';
	
    require 'connect.php';
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Feedback</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../admin/navstyle.css">
    <link rel="stylesheet" href="../admin/ad_style.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />

    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- Font Link -->
     <link href="https://fonts.googleapis.com/css2?family=Merienda&display=swap" rel="stylesheet">
     <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>

<!-- Datatables -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
  <link rel='stylesheet' href='https://cdn.datatables.net/buttons/1.2.2/css/buttons.bootstrap.min.css'>
  

   </head>


<body>



<?php
	$query = $conn->query("SELECT * FROM `feedback` WHERE `feedback_id` = '$_REQUEST[feedback_id]'") or die(mysqli_error());
	$fetch = $query->fetch_array();
?>

  
<form method = "POST"  action = "feedback_query.php?feedback_id=<?php echo $fetch['feedback_id']?> "> <br>

<div class="card" style="margin-left:20px; margin-right:20px;">
          <div class="card-header">
            <div class="container-fluid">
              <div class="card-body p-0">
                <div class="row">
                  <div class="col-sm-12"><br>
                    <center>
                      <h2>EVALUATION REPORT</h2>
                    </center><br><br>
                    <hr>
                  </div><br><br><br>

                  
<div class = "col-md-4" >
<div class = "form-group">
      
        <?php  
            $query = $conn->query("SELECT feedback.feedback_id, merchant.business_name, feedback.date, feedback.critea_1
            FROM merchant RIGHT JOIN feedback ON merchant.merchant_id = feedback.merchant_id WHERE `feedback_id` = '$_REQUEST[feedback_id]' ") or die(mysqli_error());
						$fetch = $query->fetch_array();	
				?>

     <strong><label>Name: </label></strong>
     <?php echo $fetch['business_name']?>  

</div>
</div>


<div class = "col-md-4" style="margin-left:310px;" >
        <div class = "form-group">
			<strong><label>Date:</label></strong>
            <?php echo date("M d, Y", strtotime($fetch['date']))?>						
</div>
</div>


       

<fieldset class="border p-3  "  style="width:100%; margin-left:10px; margin-right:10px; ">
      <legend class="w-auto px-2"  style="width:100%;">LEGEND</legend>
            <!----============== 5star =============== -->
        
             <span class="fa fa-star checked" style="color: gold;margin-left:60px;"></span>
             <span class="fa fa-star checked" style="color: gold;"></span>
             <span class="fa fa-star checked" style="color: gold;"></span>
             <span class="fa fa-star checked" style="color: gold;"></span>
             <span class="fa fa-star checked" style="color: gold;"></span>
            

             <!----============== 4star =============== -->
            
             <span class="fa fa-star checked" style="color: gold; margin-left:60px;" ></span>
             <span class="fa fa-star checked" style="color: gold;"></span>
             <span class="fa fa-star checked" style="color: gold;"></span>
             <span class="fa fa-star checked" style="color: gold;"></span>
             <span class="fa fa-star checked" style="color: #ddd;"></span>
             

              <!----============== 3star =============== -->
             
              <span class="fa fa-star checked" style="color: gold;margin-left:60px; "></span>
             <span class="fa fa-star checked" style="color: gold;"></span>
             <span class="fa fa-star checked" style="color: gold;"></span>
             <span class="fa fa-star checked" style="color: #ddd;"></span>
             <span class="fa fa-star checked" style="color: #ddd;"></span>
             

              <!----============== 2star =============== -->
              
              <span class="fa fa-star checked" style="color: gold;margin-left:60px;"></span>
             <span class="fa fa-star checked" style="color: gold;"></span>
             <span class="fa fa-star checked" style="color: #ddd;"></span>
             <span class="fa fa-star checked" style="color: #ddd;"></span>
             <span class="fa fa-star checked" style="color: #ddd; "></span>
            

              <!----============== 1star =============== -->
             
              <span class="fa fa-star checked" style="color: gold;margin-left:60px; "></span>
             <span class="fa fa-star checked" style="color: #ddd;"></span>
             <span class="fa fa-star checked" style="color: #ddd;"></span>
             <span class="fa fa-star checked" style="color: #ddd;"></span>
             <span class="fa fa-star checked" style="color: #ddd; "></span><br>
             <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Execellent
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  Very Good
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Good
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Fair
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Poor</p> 
                      
  </fieldset> 



       <table id="example"   class="table table-bordered border-primary table-hover "   style="margin-left:15px; width:97%; margin-top:60px;border:1px solid blue;" >
    <thead>
        <tr>           
           <th scope="col" class=" border-primary" style="border:1px solid blue;background:#1E90FF; text-align:center;">Critea</th>
            <th scope="col" class=" border-primary" style="border:1px solid blue;background:#1E90FF;text-align:center;"> Rating</th>   
        </tr>
    </thead>
    
    <tbody >

    
          <?php  
							$query = $conn->query("SELECT feedback.feedback_id, merchant.business_name, feedback.date, feedback.critea_1
              FROM merchant RIGHT JOIN feedback ON merchant.merchant_id = feedback.merchant_id WHERE `feedback_id` = '$_REQUEST[feedback_id]' ") or die(mysqli_error());
						
            while($fetch = $query->fetch_array()){
						?>


        <tr>
        
        <td class=" border-primary" style="border:1px solid blue;"> </td>
        
      
            <td class=" border-primary" style="border:1px solid blue;" ><fieldset  class="rating">
           
          
            <input  type="radio" id="star5 " name="critea_1"
            value="5" <?php if($fetch['critea_1'] == '5') { echo "checked";}?>
           />
           <label for="star5">5 stars</label>
          
    <input type="radio" id="star4" name="critea_1"  value="4" <?php if($fetch['critea_1'] == '4') { echo "checked";}?> />
    <label for="star4">4 stars</label>
    <input type="radio" id="star3" name="critea_1"    value="3" <?php if($fetch['critea_1'] == '3') { echo "checked";}?>/>
    <label for="star3">3 stars</label>
    <input type="radio" id="star2" name="critea_1"  value="2" <?php if($fetch['critea_1'] == '2') { echo "checked";}?>/>
    <label for="star2">2 stars</label>
    <input type="radio" id="star1" name="critea_1"   value="1" <?php if($fetch['critea_1'] == '1') { echo "checked";}?> />
    <label for="star1">1 star</label>
          
</fieldset>


</td>
           
        </tr>
        <?php
							}
						?>     
       
    </tbody>
</table>

                </div>
              </div>
            </div>
          </div>
        </div>

<br>
     
<div>

</form>  

<button name = "feedback_print" id="print" class="btn btn-primary btn-print" onclick="window.print()" style="float: right;margin-right:20px;"><span class="fas fa-print"></span> Print</button> 
<button name = "back" id="back"  class="btn btn-primary btn-print"  style="float: left; margin-left:20px;"></span> Back</button> 



<style>

 .rating {
    margin-right:30%;
  
    border:none;
}
.rating:not(:checked) > input {
    position:absolute;
    top:-9999px;
    clip:rect(0, 0, 0, 0);
}
.rating:not(:checked) > label {
    float:right;
    width:1em;
    padding:0 .1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:250%;
    line-height:1.2;
    color:#ddd;
}
.rating:not(:checked) > label:before {
    content:'★ ';
}
.rating > input:checked ~ label {
    color: gold;
}
.rating:not(:checked) > label:hover, .rating:not(:checked) > label:hover ~ label {
    color: #f70;
}
.rating > input:checked + label:hover, .rating > input:checked + label:hover ~ label, .rating > input:checked ~ label:hover, .rating > input:checked ~ label:hover ~ label, .rating > label:hover ~ input:checked ~ label {
    color: #ea0;
}
.rating > label:active {
    position:relative;
  


}    

@media print {
  #print{
    display:none;
  }
  #back{
    display:none;
  }
}
</style>


</body>
</html>