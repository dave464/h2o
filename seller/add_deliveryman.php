<?php
require 'validate.php';
require '../connection.php';
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Add Deliveryman</title>
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="../main.css">
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel = "icon" href = "images/logo.png" type = "image/png">
    </head>
    <body style="background-color: #eee;" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
        
      <!-- Navbar-->
      <?php include 'navbar.php' ?>

      <p class="text-center h1 fw-bold mb-3 mx-1 mx-md-4 mt-4"  
      style="color:#0073ae;text-shadow: 1px 1px #03a9f4;">DELIVERYMAN REGISTRATION
      </p>

 <!-- <center>
   <div class="content">


<?php  
   $query = $conn->query("SELECT deliveryman.deliveryman_id, deliveryman.name, deliveryman.contact_number,
   deliveryman.plate_number, deliveryman.username, deliveryman.password, merchant.merchant_id
   FROM merchant RIGHT JOIN deliveryman ON merchant.merchant_id = deliveryman.merchant_id WHERE  deliveryman.merchant_id = '".$_SESSION['merchant_id']."'") or die(mysqli_error());
   $fetch = $query->fetch_array();
              
 ?>

<form action="add_query_deliveryman.php" method="POST" style="color:#FFF">

  <input type="hidden" value="<?php echo $_SESSION['merchant_id']?>" name="merchant_id">

              <table style="width:100%">
              <tr>
                <td>
                  Name:
                </td>
                <td>
                  <input type="text" name="name"  class="email" required = "required" >
                </td>
              </tr>
              <tr>
                <td>
                  Contact Number:
                </td>
                <td>
                  <input type="text" name="contact_number"  class="email" required = "required" >
                </td>
              </tr>
              <tr>
                <td>
                  Plate Number:
                </td>
                <td>
                  <input type="text" name="plate_number"  class="email" required = "required" >
                </td>
              </tr>
              <tr>
                <td>
                  Username:
                </td>
                <td>
                  <input type="text" name="username"  class="email" required = "required" >
                </td>
              </tr>
              <tr>
                <td>
                  Password:
                </td>
                <td>
                  <input type="password" name="password"  class="email" required = "required" >
                </td>
              </tr>
              <tr>
                <td>
                  Confirm Password:
                </td>
                <td>
                  <input type="password" name="cpassword"  class="email" required = "required" >
                </td>
              </tr>
              </table>
              <center>
<input type="submit" value="Add Delivery Man" name="submit" class="myButton">
</form>
    <br><br>
    
      </div>-->



      <div class="vh-200" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
               
                <?php  
                    $query = $conn->query("SELECT deliveryman.deliveryman_id, deliveryman.name, deliveryman.contact_number,
                    deliveryman.plate_number, deliveryman.username, deliveryman.password, merchant.merchant_id
                    FROM merchant RIGHT JOIN deliveryman ON merchant.merchant_id = deliveryman.merchant_id WHERE  deliveryman.merchant_id = '".$_SESSION['merchant_id']."'") or die(mysqli_error());
                   $fetch = $query->fetch_array();             
                ?>

                <form class="mx-1 mx-md-4" action="add_query_deliveryman.php" method="POST" enctype="multipart/form-data">
                
                <input type="hidden" value="<?php echo $_SESSION['merchant_id']?>" name="merchant_id">

                <div class="d-flex flex-row align-items-center mb-2">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="name" id="form3Example3c" class="form-control" placeholder="Fullname"
                       required = "required"/>
                    </div>
                  </div>

                
                <div class="d-flex flex-row align-items-center mb-2">
                    <i class="fas fa-phone fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="contact_number" id="form3Example4cd" class="form-control"
                       placeholder="Phone" required = "required" />     
                    </div>
                </div>

                <div class="d-flex flex-row align-items-center mb-2">
                    <i class="fas fa-id-card fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="plate_number" id="form3Example3c" class="form-control" 
                      placeholder="Plate Number" required = "required"/>
                    </div>
                  </div>


                <div class="d-flex flex-row align-items-center mb-2">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="username" id="form3Example1c" class="form-control" 
                      placeholder="Username" required = "required"/> 
                    </div>
                  </div>


                <div class="d-flex flex-row align-items-center mb-2">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" name="password" id="form3Example4c" class="form-control" 
                      placeholder="Password" required = "required"/>
                    </div>
                  </div>
                  
                <div class="d-flex flex-row align-items-center mb-2">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" name="cpassword" id="form3Example4c" class="form-control" 
                      placeholder="Confirm Password" required = "required"/>
                    </div>
                </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" name="submit" class="btn btn-primary btn-lg">Register</button>
                  </div>
                  
                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="../img/watDel.webp" class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




    </body>
</html>


<!--
<style>

h2 {
    background-color: #ADD8E6;
    padding:13px;
    color:#000;
    font-size:19px;
    margin-right: 23px;
     
    margin-left:23px;
}
.myButton {
width:95%;
    opacity:0.8;
    -moz-box-shadow:inset 0px 1px 0px 0px #cf866c;
    -webkit-box-shadow:inset 0px 1px 0px 0px #cf866c;
    box-shadow:inset 0px 1px 0px 0px #cf866c;
    background-color:#FFF;
    -moz-border-radius:3px;
    -webkit-border-radius:3px;
    border-radius:3px;
    border:1px solid #942911;
    display:inline-block;
    cursor:pointer;
    color:#000000;
    font-family:Arial;
    font-size:15px;
    padding:15px;
    text-decoration:none;
    text-shadow:0px 1px 0px #854629;
}


@import url(https://fonts.googleapis.com/css?family=Open+Sans+Condensed:700);

html  {
color:#000;
height:100%;
}
body {
  
  font-family: "Open Sans Condensed", sans-serif;
}

#bg {
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background: url(../img/bg.jpeg) no-repeat center center fixed;
  background-size: cover;
  -webkit-filter: blur(5px);    
}

form {
  position: relative;
  width: 90%;
  height:100%;
  margin: 0 auto;
  background: rgba(130,130,130,.3);
  padding: 20px 22px;
  border: 1px solid;
  border-top-color: rgba(255,255,255,.4);
  border-left-color: rgba(255,255,255,.4);
  border-bottom-color: rgba(60,60,60,.4);
  border-right-color: rgba(60,60,60,.4);
  color: white;
}

form input, form select, form textarea, form button {
  width: 87%;
  border: 1px solid;
  border-bottom-color: rgba(255,255,255,.5);
  border-right-color: rgba(60,60,60,.35);
  border-top-color: rgba(60,60,60,.35);
  border-left-color: rgba(80,80,80,.45);
  background-color: rgba(0,0,0,.2);
  background-repeat: no-repeat;
  padding: 8px 24px 8px 10px;
  font: bold .875em/1.25em "Open Sans Condensed", sans-serif;
  letter-spacing: .075em;
  color: #fff;
  text-shadow: 0 1px 0 rgba(0,0,0,.1);
  margin-bottom: 19px;
}

form input:focus { background-color: rgba(0,0,0,.4); }



::-webkit-input-placeholder { color: #ccc; text-transform: uppercase; }
::-moz-placeholder { color: #ccc; text-transform: uppercase; }
:-ms-input-placeholder { color: #ccc; text-transform: uppercase; }

form button[type=submit] {
  width: 248px;
  margin-bottom: 0;
  color: #3f898a;
  letter-spacing: .05em;
  text-shadow: 0 1px 0 #133d3e;
  text-transform: uppercase;
  background: #225556;
  border-top-color: #9fb5b5;
  border-left-color: #608586;
  border-bottom-color: #1b4849;
  border-right-color: #1e4d4e;
  cursor: pointer;
}
form button {
  width: 248px;
  margin-bottom: 0;
  color: #3f898a;
  letter-spacing: .05em;
  text-shadow: 0 1px 0 #133d3e;
  text-transform: uppercase;
  background: #225556;
  border-top-color: #9fb5b5;
  border-left-color: #608586;
  border-bottom-color: #1b4849;
  border-right-color: #1e4d4e;
  cursor: pointer;
}
p {
color:#FFF;
}
h1 {
color:#FFF;

}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
}

.dropdown:hover .dropdown-content {
  display: block;
}


.datagrid table { 
border-collapse: collapse; 
text-align: left; 
width: 100%; } 
.datagrid { 
font: normal 12px/150% Arial, Helvetica, sans-serif; 
background: #fff; 
overflow: hidden; 
border: 1px solid #652299; 
-webkit-border-radius: 3px;
 -moz-border-radius: 3px; border-radius: 3px; 
}
.datagrid table td, .datagrid table th { 
padding: 3px 10px; 
}
.datagrid table thead th {
  background-color:#461326; 
  color:#FFFFFF; 
  font-size: 15px; 
  font-weight: bold; 
  border-left: 1px solid #714399; } 
.datagrid table thead th:first-child { 
border: none; }
.datagrid table tbody td { 
color: #000; 
border-left: 1px solid #E7BDFF;
font-size: 12px;
font-weight: normal; }
.datagrid table tbody  td { 

color: #000; 
border:1px solid #652299;
}
.datagrid table tbody td:first-child { 
border-left: none; }
.datagrid table tbody tr:last-child td { 
border-bottom: none; 
}
.datagrid table tfoot td div { 
border-top: 1px solid #652299;
background: #F4E3FF;
} 
.datagrid table tfoot td { 
padding: 0; font-size: 12px 
} 
.datagrid table tfoot td div { 
padding: 2px; 
}
</style>-->