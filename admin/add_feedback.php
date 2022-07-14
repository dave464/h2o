<!DOCTYPE html>
<?php
    require_once 'validate.php';
    require 'name.php';
?>

<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, materialpro admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, materialpro admin lite design, materialpro admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Material Pro Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Add Feedback</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/materialpro-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js" crossorigin="anonymous"></script>
    <!-- Datatables -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
 <link rel='stylesheet' href='https://cdn.datatables.net/buttons/1.2.2/css/buttons.bootstrap.min.css'>

<link rel='stylesheet' href='https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css'>
<link rel='stylesheet' href='https://cdn.datatables.net/datetime/1.0.3/css/dataTables.dateTime.min.css'>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                   <a class="navbar-brand ms-4" href="adminhome.php">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="assets/images/logo.png" style="height: 60px; margin-top: 15px; margin-left:-20px" alt="homepage" class="dark-logo" />

                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="assets/images/H3.png" style="width: 150px; margin-left: -10px;margin-top:-10px" alt="homepage" class="dark-logo" />

                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-white d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-lg-none d-md-block ">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white "
                                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav me-auto mt-md-0 ">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->

                        <li class="nav-item search-box">
                            <a class="nav-link text-muted" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search" style="display: none;">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a
                                    class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li>
                    </ul>

                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src = "photo/<?php echo $fetch['photo']?>" alt="user" class="profile-pic me-2">
                                <?php echo $fetch['name']?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown"></ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                 <?php include 'navbar.php' ?>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <div class="sidebar-footer">
                <div class="row">
                    <div class="col-4 link-wrap">
                        <!-- item-->
                        <a href="logout.php" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>                   
                    </div>
                    <div class="col-4 link-wrap" style="margin-left:-50px; margin-top: 3px">
                          Logout                    
                    </div>                   
                </div>
            </div>
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="page-title mb-0 p-0">Inspection Report</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Inspection Report</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <!--<h4 class="card-title">Basic Table</h4>
                                <h6 class="card-subtitle">Add class <code>.table</code></h6>-->
                                <div class="table-responsive">






    

  <!--<a class = "btn btn-primary"  id ="addBtn" href="add_inspection.php" > Add Data</a> </div>-->
     <br>

<!----------------------------- DATATABLE DATE FILTER ---------------------->

                                    
   
<form action ="add_query_feedback.php?admin_id=<?php echo $fetch['admin_id']?>" method = "POST">


           <input type="hidden" value="<?php echo $fetch['admin_id']?>" name="admin_id">





<div class="card" style="margin-left:20px; margin-right:20px;">
          <div class="card-header">
            <div class="container-fluid">
              <div class="card-body p-0">
                <div class="row">
                  <div class="col-sm-12"><br>
                    <center>
                      <h2>INSPECTION REPORT</h2>
                    </center><br><br>
                    <hr>
                  </div><br><br><br>

                  


                  <div class = "col-md-4" >
        <div class = "form-group">

     <strong>   <label>Business Name: </label></strong>

                            <select class = "form-control" required = required name = "merchant_id" style=" margin-top: -35px; margin-left: 130px">
              
              <?php
 $query = "SELECT * FROM merchant";
 $result = $conn->query($query);
 if ($result->num_rows > 0) {
  echo '<option value="">Select Waterstation</option>';
 while ($row = $result->fetch_assoc()) {
 echo '<option value="'.$row['merchant_id'].'">'.$row['business_name'].'</option>';
 }
 }else{
 echo '<option value="">Waterstation not available</option>';
 }
 ?>
              </select>

</div>

</div>


<div class = "col-md-4" >
        <div class = "form-group">
            <strong><label style=" margin-left: 250px">Date:</label></strong>
        <input type = "date" class = "form-control"  name = "date" required="required" style="margin-top: -35px; margin-left: 300px"/>
                        
</div>

</div>

  <p style="margin-top: 20px">Instruction: (✓) Check the appropriate box (Pass/Fail), in the following statements.
 </p> 

       <table id="example"   class="table table-bordered border-primary table-hover "   style="margin-left:15px; width:97%; margin-top:10px;border:1px solid blue;" >
    <thead>
        <tr >
            <th scope="col" class=" border-primary" style="border:1px solid blue;background:#1E90FF;color:white;text-align:center;">Inspection Criteria</th>
            <th scope="col" class=" border-primary" style="border:1px solid blue;background:#1E90FF;color:white;text-align:center;"> Pass</th>
            <th scope="col" class=" border-primary" style="border:1px solid blue;background:#1E90FF;color:white;text-align:center;"> Fail</th>
             
           
        </tr>
    </thead>
    
    <tbody >

        <tr>
           
           <td>1. Valid Business Permit/Mayor’s Permit.</td>
            <td ><center><input type="checkbox" name="criteria1" value="5"></center> </td>
              <td ><center><input type="checkbox" name="criteria1" value="0"></center> </td>           
 </tr>


 <tr>
             <td>2. Storage tanks have tight fitting covers, are vented and are protected from 
contamination.</td>
            <td ><center><input type="checkbox" name="criteria2" value="5"></center> </td>
              <td ><center><input type="checkbox" name="criteria2" value="0"></center> </td> 
             
</tr>

<tr>
             <td>3. Employees always wear facemasks, glooves, apron and hairnet.</td>
            <td ><center><input type="checkbox" name="criteria3" value="5"></center> </td>
              <td ><center><input type="checkbox" name="criteria3" value="0"></center> </td> 
             
</tr>

<tr>
             <td>4. Water dispenser and Water container are clean .</td>
            <td ><center><input type="checkbox" name="criteria4" value="5"></center> </td>
              <td ><center><input type="checkbox" name="criteria4" value="0"></center> </td> 
             
</tr>

<tr>
             <td>5. Keep the refilled water at room temperature (25C-28C).</td>
            <td ><center><input type="checkbox" name="criteria5" value="5"></center> </td>
              <td ><center><input type="checkbox" name="criteria5" value="0"></center> </td> 
             
</tr>

<tr>
             <td>6. There must be no unpleasant taste, odor or color in drinking water..</td>
            <td ><center><input type="checkbox" name="criteria6" value="5"></center> </td>
              <td ><center><input type="checkbox" name="criteria6" value="0"></center> </td> 
             
</tr>
       
           

    </tbody>
</table>



                </div>
              </div>
            </div>
          </div>
        </div>

<br>
     
<div>
     <button name = "add_feedback"  class = "btn btn-primary" style="background:dodgerBlue; 
       margin-right:20px; margin-top:13px; float:right; ">
             <i class = ""></i> Submit</button> <br><br><br><br>
     </div>
</form> 





                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer"> © 2022 H2ORDER </a>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>


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

         "order": [[ 1, 'asc' ]],

        "dom": 'Blfrtip',
                "buttons": [  
                  
                  {  
                        extend: 'copy',  
                        className: 'btn btn-info rounded-0',  
                        text: '<i class="far fa-file-excel"></i> Copy',
                        title:'Alpha Lab Test',
                        exportOptions: {
                            columns: ':visible:not(:last-child)'
                        }  
                    }, 
                    {  
                        extend: 'excel',  
                        className: 'btn btn-info rounded-0',  
                        text: '<i class="far fa-file-excel"></i> Excel',
                        title:'Alpha Lab Test',
                        exportOptions: {
                            columns: ':visible:not(:last-child)'
                        }  
                    },  
                   
                    {  
                        extend: 'pdf',  
                        className: 'btn btn-info rounded-0',  
                        text: '<i class="far fa-file-pdf"></i> Pdf',
                        title:'Alpha Lab Test',
                        exportOptions: {
                            columns: ':visible:not(:last-child)'
                        }  
                    },  
                    
                    {  
                        extend: 'print',  
                        className: 'btn btn-info rounded-0',  
                        text: '<i class="fas fa-print"></i> Print' ,
                        title:'Alpha Lab Test',
                        exportOptions: {
                            columns: ':visible:not(:last-child)'
                            
                        } 
                    },
                   
                ]  ,

          
                "createdRow": function (row, data, index) {
                    if (data[3] == 'APPROVED') {
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

table.on( 'order.dt search.dt', function () {
        let i = 1;
 
        table.cells(null, 0, {search:'applied', order:'applied'}).every( function (cell) {
            this.data(i++);
        } );
    } ).draw();

       // Refilter the table
    $('#min, #max').on('change', function () {
        table.draw();
    });

    });
</script> 


<style>
.dataTables_wrapper .dt-buttons {
  background-color: white;
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
table.dataTable.no-footer {
    border-bottom: 0px solid #111;
}
tbody, td, tfoot, th, thead, tr {
    border-color: #DCDCDC;
    border-style:solid;
    border-width: 0;

}

.btn-info {
    color: white;
}
 .table th {
    padding: .6rem; 
}
</style>

</body>

</html>