
<!DOCTYPE html> 
<?php
	require_once 'validate.php';
	require 'name.php';
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Inspection and Monitoring</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../admin/navstyle.css">
    <link rel="stylesheet" href="../admin/ad_style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Font Link -->
    <link href="https://fonts.googleapis.com/css2?family=Merienda&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
<!-- Datatables -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
 <link rel='stylesheet' href='https://cdn.datatables.net/buttons/1.2.2/css/buttons.bootstrap.min.css'>

<link rel='stylesheet' href='https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css'>
<link rel='stylesheet' href='https://cdn.datatables.net/datetime/1.0.3/css/dataTables.dateTime.min.css'>
   </head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

 <!-- Navbar -->
 <?php include'navbar.php';?>
  <!-- /.navbar -->

<!-- Blue Background -->
  <div style="height: 340px; background-color: #2234ae;
    background-image: linear-gradient(340deg, #2234ae 0%,  #191714 89%);">
      <br> 
      <span style="color:white;
    margin-left:280px; margin-top:30px; font-size: 40px; font-family:Monotype Corsiva;
  font-weight: 400;" class="links_name">Inspection and Monitoring</span>
  </div>

  <!-- Main Content -->
<div class="home_content">   
   <div id="tbl-contain" style=" margin-top:-240px;
    width: 97%;height:100%; max-height:4000px;
    background-color: white;  border-radius: .4rem;
    border-color:dodgerBlue;
    border:2px solid dodgerBlue;
    box-shadow: 0 0 8px 0 dodgerBlue; margin-left:20px;
      ">


<div class="action">
        <div class="profile" style="margin-top:-100px;
        margin-right:17px;float:right" onclick="menuToggle()">
            <img src = "../photo/<?php echo $fetch['photo']?>" id = "lbl" width = "100%" height = "100%"/>
        </div>
        <div class="menu" style=margin-left:820px;>
            <h3><?php echo $name;?> <br> <span>Administrator</span></h3>
            <ul style="margin-left: -40px;">            
            <li><img src="../img/edit.png" alt=""><a href="edit_account.php">Edit Account</a></li> <li><img src="../img/user.png" alt=""><a href="account.php">User Profile</a></li>
            <li><img src="../img/log-out.png" alt=""><a href="logout.php">Log-Out</a></li>
            </ul>
        </div>
    </div>
    <script>
        function menuToggle() {
            const toggleMenu = document.querySelector(".menu");
            toggleMenu.classList.toggle('active')
        }
    </script> 


<!-----------------Inspection Menu ----------->
<a  class = "btn btn-default  " href = "../admin/inspection.php"
  style="border:2px solid black ;margin-left:20px;margin-top:20px;
  background-image: linear-gradient(315deg, #2234ae 0%, #191714 95%);color:white;" >
                   Alpha Lab Test <i class = "fa fa-flask"></i></a> 

<a  class = "btn btn-default focus" href = "../admin/badge.php"
 style="background-color:#3366ff; color:white;margin-top:20px;">
                    Badge <i class = "fa fa-certificate"></i></a>

<a  class = "btn btn-default focus" href = "../admin/feedback.php"
 style="background-color:#3366ff; color:white;margin-top:20px;">
                    Feedback <i class = "fa fa-commenting"></i></a>



<!----------------------------------DATATABLE --------------------------------------> 
<div class="container">

  <!-- Button to Open the Modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal"
 style="margin-left: 20px; margin-top: 40px;margin-bottom: 20px;">
  Add Data
</button>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        
        <form action ="add_query_inspection.php" method = "POST"> 
            <div class = "form-group">
              <label>Name </label>
              <select  class = "form-control" required = required name = "merchant_id">              
              <?php
                $query = "SELECT * FROM merchant";
                $result = $conn->query($query);
                
                if ($result->num_rows > 0) {
                    echo '<option value="">Select Waterstation</option>';
                    while ($row = $result->fetch_assoc()) {
                    echo '<option value="'.$row['merchant_id'].'">'.$row['business_name'].'</option>';
                   }
                }
                else{
                    echo '<option value="">Country not available</option>';
                  }
               ?>
              </select>
            </div>
            <div class = "form-group">
              <label>Status</label>
              <select class = "form-control" required = required name = "status">
                <option value = "">Choose an option</option>
                <option value = "Passed">Passed</option>
                <option value = "Failed">Failed</option>
              </select>
            </div>
            <br />
            <div class = "form-group">
              <button name = "add_inspection" class = "btn btn-info form-control" style="background:dodgerBlue;"><i class = ""></i> Saved</button>
            </div>
            <?php require_once 'add_query_inspection.php'?>
          </form>
        </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

  <!--<a class = "btn btn-primary"  id ="addBtn" href="add_inspection.php" > Add Data</a> </div>-->
     <br>

<!----------------------------- DATATABLE DATE FILTER ---------------------->
<table border="0" cellspacing="5" cellpadding="5" style="margin-left: 15px; margin-bottom:30px;">
        <tbody><tr>
            <td>Minimum date:</td>
            <td><input type="text" id="min" name="min"></td>
        </tr>
        <tr>
            <td>Maximum date:</td>
            <td><input type="text" id="max" name="max"></td>
        </tr>
    </tbody>
</table>
<!-------------------------------- DATATABLE ---------------------->
<table id="table" class="table" style="margin-left:15px; width:97%; margin-top:60px;border:1px solid blue;" >
  <thead>
    <tr>
      <th scope="col" class=" border-primary" style="background:#1E90FF;color:white;">ID</th>
      <th scope="col" class=" border-primary" style="background:#1E90FF;color:white;">NAME</th>
      <th scope="col" class=" border-primary" style="background:#1E90FF;color:white;">DATE</th>
      <th scope="col" class=" border-primary" style="background:#1E90FF;color:white;">STATUS</th>
      <th scope="col" class=" border-primary" style="background:#1E90FF;color:white;">ACTION</th>
    </tr>
  </thead>
  <tbody>

  <?php  
			$query = $conn->query("SELECT inspection.inspection_id, merchant.business_name, inspection.date,inspection.status 
        FROM merchant RIGHT JOIN inspection ON merchant.merchant_id = inspection.merchant_id ") or die(mysqli_error());
				while($fetch = $query->fetch_array()){
	 ?>

    <tr>
      <td scope="row" class=" border-primary"  ><?php echo $fetch['inspection_id']?></th>
      <td class=" border-primary" ><?php echo $fetch['business_name']?></td>
      <td class="border-primary"><?php echo date("M d, Y", strtotime($fetch['date']))?></td>
      <td class=" border-primary" ><?php echo $fetch['status']?> </td>
      <td class=" border-primary" style=" color:white;">
       <a class = "btn btn-danger" href="delete_inspection.php?inspection_id=<?php echo $fetch['inspection_id']?>" onclick = "confirmationDelete(this); return false;" ><i class = "" ></i> Delete</a></td>    
    </tr>
    <?php
				}
		 ?>
</table><br><br>
        
 <!--    <?php

$expire = 100;
$today =  80;

if($today >= $expire){
    echo "expired";
} else {
    echo "active";
}
?>   -->
    
     </div>  
    </div> 
  </div><!-- End of main content -->

<!-----------------------------------SCRIPTS-------------------------------------------->   
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script src='https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js'></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script src='https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js'></script>
<script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.colVis.min.js'></script> 
<script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js'></script>
<script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
 
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js'></script>
<script src='https://cdn.datatables.net/datetime/1.0.3/js/dataTables.dateTime.min.js'></script>


<script type = "text/javascript">
	function confirmationDelete(anchor){
		var conf = confirm("Are you sure you want to delete this record?");
		if(conf){
			window.location = anchor.attr("href");
		}
	} 
</script>
   
<script type = "text/javascript">

 var minDate, maxDate;
// Custom filtering function which will search data in column four between two values
$.fn.dataTable.ext.search.push(
    function( settings, data, dataIndex ) {
        var min = minDate.val();
        var max = maxDate.val();
        var date = new Date( data[2] );
 
        if (
            ( min === null && max === null ) ||
            ( min === null && date <= max ) ||
            ( min <= date   && max === null ) ||
            ( min <= date   && date <= max )
        ) {
            return true;
        }
        return false;
    }
);


  $(document).ready(function(){
     // Create date inputs
    minDate = new DateTime($('#min'), {
        format: 'MMMM Do YYYY'
    });
    maxDate = new DateTime($('#max'), {
        format: 'MMMM Do YYYY'
    });

  var table = $('#table').DataTable(
		{
		
      pageLength: 10,
        lengthMenu: [[10, 20, 30, 40, 50 - 1], [10, 20, 30, 40, 50, 'all']],
       
        "columnDefs": [ {
            "searchable": false,

            "orderable": false,
           
            type:'title-string', targets: 0,
        } ],

        "dom": 'Blfrtip',
                "buttons": [  
                  
                  {  
                        extend: 'copy',  
                        className: 'btn btn-primary rounded-0',  
                        text: '<i class="far fa-file-excel"></i> Copy',
                        title:'Alpha Lab Test',
                        exportOptions: {
                            columns: ':visible:not(:last-child)'
                        }  
                    }, 
                    {  
                        extend: 'excel',  
                        className: 'btn btn-primary rounded-0',  
                        text: '<i class="far fa-file-excel"></i> Excel',
                        title:'Alpha Lab Test',
                        exportOptions: {
                            columns: ':visible:not(:last-child)'
                        }  
                    },  
                   
                    {  
                        extend: 'pdf',  
                        className: 'btn btn-primary rounded-0',  
                        text: '<i class="far fa-file-pdf"></i> Pdf',
                        title:'Alpha Lab Test',
                        exportOptions: {
                            columns: ':visible:not(:last-child)'
                        }  
                    },  
                    
                    {  
                        extend: 'print',  
                        className: 'btn btn-primary rounded-0',  
                        text: '<i class="fas fa-print"></i> Print' ,
                        title:'Alpha Lab Test',
                        exportOptions: {
                            columns: ':visible:not(:last-child)'
                            
                        } 
                    },
                   
                ]  ,

          
                "createdRow": function (row, data, index) {
                    if (data[3] == 'Passed') {
                      $('td', row).eq(3).css({
                      'color': 'green',
                      });
                    }
                    else if (data[3] == 'Failed') {
                      $('td', row).eq(3).css({
                       'color': 'red',
                     });
                   }
                }
		}
	);
       // Refilter the table
    $('#min, #max').on('change', function () {
        table.draw();
    });

	});
</script> 


<style>
.dataTables_wrapper .dt-buttons {
  
  text-align:center;
  width:350px;
  margin-left:300px;
  margin-bottom:-40px;
}
#addBtn.btn.btn-primary{
  margin-top: 130px;
  margin-left:20px;
 bottom:20px;
 color:white;
}
#table_length.dataTables_length{
        width:120px;
        height: 10px;
        margin-left:13px;
    }

#table_paginate.dataTables_paginate.paging_simple_numbers{
  margin-right:20px;
}

#table_info.dataTables_info{
  width:200px;
        height: 20px;
        margin-left:13px;
}

#table_filter.dataTables_filter{
   
    margin-right: 20px;
    margin-bottom:10px;

}
.dataTables_wrapper .dataTables_paginate .paginate_button{
  padding: 0;
}
tr:hover {
          background-color: #b2f8ff;
        }

</style>


</body>
</html>

