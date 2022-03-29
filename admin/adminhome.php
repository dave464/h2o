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
    <title>Home</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/materialpro-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <!-- chartist CSS -->
    <link href="assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!--This page css - Morris CSS -->
    <link href="assets/plugins/c3-master/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js" crossorigin="anonymous"></script>
    <!-- Google chart Link -->
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
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
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
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
                            <img src="assets/images/logo-light-icon.png" alt="homepage" class="dark-logo" />

                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="assets/images/logo-light-text.png" alt="homepage" class="dark-logo" />

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
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="adminhome.php" aria-expanded="false"> <i class="fa-solid fa-gauge"></i> <span
                                    class="hide-menu" style="margin-left: 5px"> Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="map.php" aria-expanded="false"> <i class="fa-solid fa-map-location-dot"></i>
                                    <span class="hide-menu" style="margin-left: 5px">Map</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="calendar.php" aria-expanded="false"><i class="fa-regular fa-calendar-days" style="margin-top:-3px"></i>
                                <span class="hide-menu" style="margin-left:5px">Calendar</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="announcement.php" aria-expanded="false"><i class="fa-solid fa-bullhorn" style="margin-top:-3px"></i><span class="hide-menu" style="margin-left: 5px">Announcement</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="inspection.php" aria-expanded="false"><i class="fa-solid fa-flask"  style="margin-top:-3px"></i>
                                 <span class="hide-menu" style="margin-left: 5px">Alpha Lab Test</span></a>
                        </li>
                         <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="badge.php" aria-expanded="false"><i class="fa-solid fa-certificate" style="margin-top:-1px"></i>
                                 <span class="hide-menu" style="margin-left: 5px">Badge</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="profile.php" aria-expanded="false"><i class="fa-solid fa-user"  style="margin-top:-3px"></i>
                                <span class="hide-menu"  style="margin-left: 5px">Profile</span></a>
                        </li>      
                    </ul>

                </nav>
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
                        <h3 class="page-title mb-0 p-0">Dashboard</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div id="piechart_3d"style="width: 650px; height: 425px;margin-top:-20px;transition: all .4s;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <!--<h3 class="card-title">Our Visitors </h3>
                                <h6 class="card-subtitle">Different Devices Used to Visit</h6>
                                <div id="visitor"
                                    style="height: 290px; width: 100%; max-height: 290px; position: relative;"
                                    class="c3">
                                    <div class="c3-tooltip-container"
                                        style="position: absolute; pointer-events: none; display: none;">
                                    </div>
                                </div>-->
                                    <?php 
      $q_wstation = $conn->query("SELECT COUNT(merchant_id) as total FROM `merchant` ") or die(mysqli_error());
        $f_wstation = $q_wstation->fetch_array(); 
      ?>

 <div 
            style="
             width: 285px;         
             box-shadow: 1px 2px 5px black;
             transition: all .4s;
             background: #1E90FF;
             border:5px solid #fff;
             height: 170px">
  <div >
    <h4 class="card-title"
            style="color:#fff;
            text-shadow: 1px 1px black;
            font-weight: 600; 
            padding: 10px;
            margin-left: 10px;
            font-family: 'Federo', sans-serif;

         ">
            Total Waterstation
    </h4>

      <span style="float: left; 
             margin-left: 15px;
             margin-top: 10px;
             font-weight: 600;
             font-size: 55px; 
             font-family:  RoxboroughCF Bold; 
             color:white;
             text-shadow: 2px 2px black; ">
            <?php echo $f_wstation['total']?>
          <br>
      </span>
     <i class="fas fa-store fa-3x "
            style="font-size:65px;
            margin-top: 10px;
            margin-left: 140px;
            text-shadow: 2px 2px black;
            color: white;">
           
     </i>
    </div>
  </div>
                            </div>
                          <!--  <div>
                                <hr class="mt-0 mb-0">
                            </div>
                            <div class="card-body text-center ">
                                <ul class="list-inline d-flex justify-content-center align-items-center mb-0">
                                    <li class="me-4">
                                        <h6 class="text-info"><i class="fa fa-circle font-10 me-2 "></i>Mobile</h6>
                                    </li>
                                    <li class="me-4">
                                        <h6 class=" text-primary"><i class="fa fa-circle font-10 me-2"></i>Desktop</h6>
                                    </li>
                                    <li class="me-4">
                                        <h6 class=" text-success"><i class="fa fa-circle font-10 me-2"></i>Tablet</h6>
                                    </li>
                                </ul>
                            </div>-->
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
               

                
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer"> © 2021 Material Pro Admin by <a href="https://www.wrappixel.com/">wrappixel.com </a>
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
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- chartist chart -->
    <script src="assets/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!--c3 JavaScript -->
    <script src="assets/plugins/d3/d3.min.js"></script>
    <script src="assets/plugins/c3-master/c3.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/pages/dashboards/dashboard1.js"></script>
    <script src="js/custom.js"></script>

<!-------------------------------- Barangay Queries-------------------------------------->
      <?php  
      $q_b1= $conn->query("SELECT COUNT(address) as total FROM `merchant` WHERE address LIKE '%Brgy.1%'") or die(mysqli_error());
        $f_b1 = $q_b1->fetch_array(); 
      ?>

      <?php  
      $q_b2= $conn->query("SELECT COUNT(address) as total FROM `merchant` WHERE address LIKE '%Brgy.2%'") or die(mysqli_error());
        $f_b2 = $q_b2->fetch_array(); 
      ?>

      <?php  
      $q_b3= $conn->query("SELECT COUNT(address) as total FROM `merchant` WHERE address LIKE '%Brgy.3%'") or die(mysqli_error());
        $f_b3 = $q_b3->fetch_array(); 
      ?>

     <?php  
      $b4_wstation = $conn->query("SELECT COUNT(address) as total FROM `merchant` WHERE address LIKE '%Brgy.4%'") or die(mysqli_error());
        $br4_wstation = $b4_wstation->fetch_array(); 
      ?>

      <?php  
      $q_b5= $conn->query("SELECT COUNT(address) as total FROM `merchant` WHERE address LIKE '%Brgy.5%'") or die(mysqli_error());
        $f_b5 = $q_b5->fetch_array(); 
      ?>

      <?php  
      $q_b6= $conn->query("SELECT COUNT(address) as total FROM `merchant` WHERE address LIKE '%Brgy.6%'") or die(mysqli_error());
        $f_b6 = $q_b6->fetch_array(); 
      ?>

      <?php  
      $q_b7= $conn->query("SELECT COUNT(address) as total FROM `merchant` WHERE address LIKE '%Brgy.7%'") or die(mysqli_error());
        $f_b7 = $q_b7->fetch_array(); 
      ?>

      <?php  
      $q_b8= $conn->query("SELECT COUNT(address) as total FROM `merchant` WHERE address LIKE '%Brgy.8%'") or die(mysqli_error());
        $f_b8 = $q_b8->fetch_array(); 
      ?>

      <?php  
      $q_b9= $conn->query("SELECT COUNT(address) as total FROM `merchant` WHERE address LIKE '%Brgy.9%'") or die(mysqli_error());
        $f_b9 = $q_b9->fetch_array(); 
      ?>

      <?php  
      $q_b10= $conn->query("SELECT COUNT(address) as total FROM `merchant` WHERE address LIKE '%Brgy.10%'") or die(mysqli_error());
        $f_b10 = $q_b10->fetch_array(); 
      ?>

      <?php  
      $q_b11= $conn->query("SELECT COUNT(address) as total FROM `merchant` WHERE address LIKE '%Brgy.11%'") or die(mysqli_error());
        $f_b11 = $q_b11->fetch_array(); 
      ?>

      <?php  
      $q_b12= $conn->query("SELECT COUNT(address) as total FROM `merchant` WHERE address LIKE '%Brgy.12%'") or die(mysqli_error());
        $f_b12 = $q_b12->fetch_array(); 
      ?>

      <?php  
      $q_wawa= $conn->query("SELECT COUNT(address) as total FROM `merchant` WHERE address LIKE '%Brgy.wawa%'") or die(mysqli_error());
        $f_wawa = $q_wawa->fetch_array(); 
      ?>


    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
         //----------- Pie Graph-----------//
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Brgy 1',<?php echo $f_b1['total']?>], ['Brgy 2',<?php echo $f_b2['total']?>], ['Brgy 3',<?php echo $f_b3['total']?>], ['Brgy 4',<?php echo $br4_wstation['total']?>], ['Brgy 5',<?php echo $f_b5['total']?>], ['Brgy 6',<?php echo $f_b6['total']?>], 
          ['Brgy 7', <?php echo $f_b7['total']?>], ['Brgy 8',<?php echo $f_b8['total']?>], ['Brgy 9',<?php echo $f_b9['total']?>], ['Brgy 10',<?php echo $f_b10['total']?>], ['Brgy 11',<?php echo $f_b11['total']?>], ['Brgy 12',<?php echo $f_b12['total']?>], ['Brgy Wawa',<?php echo $f_wawa['total']?>]
        
        ]);

        var options = {
          title: 'Number of Waterstation per Barangay',
          is3D: true,
          colors: ['#0382ff','#50a8ff','#77bbff','#9fcfff','#13c3ef','#38ccf1','#6fdaf5','#a6e8f9',
                   '#00b300','#008000','#009a00','#00b300','#a2d142','#aad552','#b1d961','#b9dc71',
                   '#ffff00','#ffff4e','#ffff62','#ffff76','#ff9507','#ff9d1b','#ffa62e','#ffae42',
                   '#ffac14','#ffb327','#ffba3b','#ffc14e','#ff5314','#ff6227','#ff703b','#ff7e4e',
                   '#d80000','#ff1414','#ff2727','#ff3b3b','#820e57','#991066','#b01376','#c71585',
                   '#800080','#9a009a','#b300b3','#cd00cd','#8a2be2','#9641e5','#a257e8','#bb84ee'] 
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }

    </script>
   
</body>

</html>