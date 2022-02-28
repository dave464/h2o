
<!DOCTYPE html> 
<?php
	require_once 'validate.php';
	require 'name.php';
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Dashboard</title>

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
    
      <!-- Google chart Link -->
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      
   </head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Navigation Bar -->   
  <?php include'navbar.php';?>
  <!-- /.navbar -->


<!-- Blue Background -->
 <div style="height: 340px; background-color: #2234ae;
    background-image: linear-gradient(340deg, #2234ae 0%,  #191714 89%);">
      <br> 
      <span style="color:white;
    margin-left:280px; margin-top:30px; font-size: 40px; font-family:Monotype Corsiva;
  font-weight: 400;" class="links_name">Dashboard</span>
 <?php 
      $q_wstation = $conn->query("SELECT COUNT(merchant_id) as total FROM `merchant` ") or die(mysqli_error());
        $f_wstation = $q_wstation->fetch_array(); 
      ?>

 <div class="card" 
            style="margin-left:320px;
             width: 330px;
             margin-top:30px;
             box-shadow: 1px 2px 5px black;
             transition: all .4s;
             background: #1E90FF;
             border:5px solid #fff;">
  <div class="card-body">
    <h4 class="card-title"
            style="color:#fff;
            text-shadow: 1px 1px black;
            font-weight: 600; 
            font-family:georgia;">
            Total Waterstation
    </h4>

      <span style="float: left; 
             margin-left: 10px;
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
            style="font-size:60px;
            margin-top: 10px;
            margin-top:400;
            margin-left: 170px;
            text-shadow: 4px 4px black; 
            color: white;">
           
     </i>
    </div>
  </div>
</div>
   
<!-- Main Content -->
 <div class="home_content">

<!-- Charts-->
 <!-- <div id="top_x_div" style="margin-left:20px; margin-top:-40px;width: 980px; height: 500px;
             border: 25px solid white; box-shadow: 1px 2px 5px black;"></div>    -->
                             
  <div id="piechart_3d"style="width: 980px; height: 500px;margin-left: 20px;margin-top:-40px;
  box-shadow: 1px 1px 1px 7px  #1E90FF;
             transition: all .4s;">
  </div>

<!-- user profile -->
   <div class="action">
        <div class="profile" 
             style="margin-top:-800px;
                    margin-right:17px;
                    float:right"
                    onclick="menuToggle()">
            <img src = "../photo/<?php echo $fetch['photo']?>" 
                id = "lbl" width = "100%" height = "100%"/>
        </div>
        <div class="menu">
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


</body>
</html>


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
    /*  google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
        
          ['Barangay', 'No. of Waterstation'],
          ["Brgy.1", <?php echo $f_wstation['total']?>], ["Brgy.2",2], ["Brgy.3", 1], ["Brgy.4", 4],  ['Brgy.5', 3],
          ["Brgy.6", 4], ["Brgy.7", 1], ["Brgy.8", 2], ["Brgy.9", 1], ["Brgy.10", 3]
         
        ]);

        var options = {
          title: 'Number of Waterstation Per Barangay',
          width: 930,
          legend: { position: 'none' },
          chart: { title: 'Number of Waterstation Per Barangay',
                   subtitle: '' },
          bars: 'horizontal', // Required for Material Bar Charts.
          axes: {
            x: {
              0: { side: 'top', label: 'No. of Waterstation'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        chart.draw(data, options);
      }; */


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
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }


    </script>


    