<?php
require 'validate.php';
require '../connection.php';
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Settings</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">    
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="../main.css">
  
    </head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 

    <body >
        
      <!-- Navbar-->
      <?php include 'navbar.php' ?>
  
      <p class="text-center h2 fw-bold mb-3 mx-1 mx-md-4 mt-4"  
      style="color:#0073ae;text-shadow: 1px 1px #03a9f4;">Edit Account
      </p>

      
      <?php
            $query = $conn->query("SELECT * FROM `customer`") or die(mysqli_error());
            $fetch = $query->fetch_array();
          ?>  


  
<div class="vh-100" >
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-left h4 fw-bold mb-3 mx-1 mx-md-4 mt-4">Personal Information</p>

                <form class="mx-1 mx-md-4" action="settings_query.php?customer_id=<?php echo $fetch['customer_id']?>" method="POST" enctype="multipart/form-data">

                  <label class="labels" style=" font-size: 11px; margin-left:50px;">Username</label>
                <div class="d-flex flex-row align-items-center mb-2">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="username" value="<?php echo $fetch['username']?>" id="form3Example1c" class="form-control" placeholder="Username" />
  
                    </div>
                  </div>

                    <label class="labels" style=" font-size: 11px; margin-left:50px;">Email</label>
                  <div class="d-flex flex-row align-items-center mb-2">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="email" name="email" value="<?php echo $fetch['email']?>" id="form3Example3c" class="form-control" placeholder="Email"/>

                    </div>
                  </div>

                     <label class="labels" style=" font-size: 11px; margin-left:50px;">Firstname</label>
                  <div class="d-flex flex-row align-items-center mb-2">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="firstname" value="<?php echo $fetch['firstname']?>" id="form3Example3c" class="form-control" placeholder="First Name"/>

                    </div>
                  </div>

                    <label class="labels" style=" font-size: 11px; margin-left:50px;">Lastname</label>
                  <div class="d-flex flex-row align-items-center mb-2">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="lastname" value="<?php echo $fetch['lastname']?>" id="form3Example3c" class="form-control" placeholder="Last Name"/>

                    </div>
                  </div>

                  <label class="labels" style=" font-size: 11px; margin-left:50px;">Address</label>
                  <div class="d-flex flex-row align-items-center mb-2">
                    <i class="fas fa-map-marker fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="address" value="<?php echo $fetch['address']?>" id="form3Example3c" class="form-control" placeholder="Address"/>
          
                    </div>
                  </div>

                  <label class="labels" style=" font-size: 11px; margin-left:50px;">Phone</label>
                  <div class="d-flex flex-row align-items-center mb-2">
                    <i class="fas fa-phone fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="contact_number" value="<?php echo $fetch['contact_number']?>" id="form3Example4cd" class="form-control" placeholder="Phone" />
      
                    </div>
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button style="width:250px;" type="submit" name="editProfile" class="btn btn-primary btn-lg">Save Changes</button>
                  </div>
                  </form>
<hr style="color:black;">
<p class="text-left h4 fw-bold mb-3 mx-1 mx-md-4 mt-4">Change Password</p>

            <form class="mx-1 mx-md-4" action="change-pass.php?customer_id=<?php echo $_SESSION['customer_id']?>" method="POST" enctype="multipart/form-data">
                  <label class="labels" style=" font-size: 11px; margin-left:50px;">Current Password</label>
                  <div class="d-flex flex-row align-items-center mb-2">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" name="op" id="form3Example4c" class="form-control" placeholder="Current Password"/>

                    </div>
                  </div>

                  <label class="labels" style=" font-size: 11px; margin-left:50px;">New Password</label>
                  <div class="d-flex flex-row align-items-center mb-2">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" name="np" id="form3Example4c" class="form-control" placeholder="New Password"/>

                    </div>
                  </div>

                  <label class="labels" style=" font-size: 11px; margin-left:50px;">Confirm Password</label>
                  <div class="d-flex flex-row align-items-center mb-2">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" name="c_np" id="form3Example4c" class="form-control" placeholder="Confirm Password"/>

                    </div>
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button style="width:250px;" type="upPass" name="" class="btn btn-primary btn-lg">Update Password</button>
                  </div>
                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="../img/accset.webp" class="img-fluid" alt="Sample image">

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