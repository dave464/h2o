<?php 

require_once '../connection.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Merchant</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="main.css">
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
        <link rel = "icon" href = "images/logo.png" type = "image/png">
    </head>
    <body >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  
   
<body>

<div class="vh-200" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h3 fw-bold mb-3 mx-1 mx-md-4 mt-4">Merchant Sign up</p>

                <form class="mx-1 mx-md-4" action="merchant_signup-check.php" method="POST" enctype="multipart/form-data">

                
                <div class="d-flex flex-row align-items-center mb-2">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                        <?php if (isset($_GET['username'])) { ?>
                      <input type="text" name="username" id="form3Example1c" class="form-control" placeholder="Username" value="<?php echo $_GET['username']; ?>" required = "required" />
                         <?php }else{ ?>
                      <input type="text" name="username" id="form3Example1c" class="form-control" placeholder="Username">
                      <?php }?>
                    </div>
                  </div>


                <div class="d-flex flex-row align-items-center mb-2">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" name="password" id="form3Example4c" class="form-control" placeholder="Password"/>

                    </div>
                  </div>

                 <div class="d-flex flex-row align-items-center mb-2">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" name="c_password" id="form3Example4c" class="form-control" placeholder="Confirm Password"/>

                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-2">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                       <?php if (isset($_GET['email'])) { ?>
                      <input type="email" name="email" id="form3Example3c" class="form-control" placeholder="Email"  value="<?php echo $_GET['email']; ?>" required = "required"/>
                       <?php }else{ ?>
                      <input type="email" name="email" id="form3Example1c" class="form-control"
                      placeholder="Email">
                      <?php }?>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-2">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                       <?php if (isset($_GET['business_name'])) { ?>
                      <input type="text" name="business_name" id="form3Example3c" class="form-control" placeholder="Business Name" value="<?php echo $_GET['business_name']; ?>" required = "required"/>
                        <?php }else{ ?>
                      <input type="text" name="business_name" id="form3Example1c" class="form-control" placeholder="Business Name">
                      <?php }?>
                    </div>
                  </div>


                  <div class="d-flex flex-row align-items-center mb-2">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                        <?php if (isset($_GET['owner'])) { ?>
                      <input type="text" name="owner" id="form3Example3c" class="form-control" placeholder="Owner" value="<?php echo $_GET['owner']; ?>" required = "required"/>
                        <?php }else{ ?>
                      <input type="text" name="owner" id="form3Example1c" class="form-control" placeholder="Owner">
                      <?php }?>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-2">
                    <i class="fas fa-map-marker fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                       <?php if (isset($_GET['address'])) { ?>
                      <input type="text" name="address" id="form3Example3c" class="form-control" placeholder="Address" value="<?php echo $_GET['address']; ?>" required = "required"/>
                       <?php }else{ ?>
                      <input type="text" name="address" id="form3Example1c" class="form-control" placeholder="Address">
                      <?php }?>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-2">
                    <i class="fas fa-phone fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                       <?php if (isset($_GET['contact_number'])) { ?>
                      <input type="text" name="contact_number" id="form3Example4cd" class="form-control" placeholder="Phone" value="<?php echo $_GET['contact_number']; ?>" required = "required"/>
                       <?php }else{ ?>
                      <input type="text" name="contact_number" id="form3Example1c" class="form-control" placeholder="Phone">
                      <?php }?>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-2">
                    <i class="fas fa-camera fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <input type="file" name="photo" class="email" required = "required">
      
                    </div>
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" name="submit" class="btn btn-primary btn-md">Sign Up</button>
                  </div>
                  <div class="text-center fs-6"> <h5 href="#">Already have an account?</h5><a href="index.php">Log in</a> </div>
                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="../img/register.webp" class="img-fluid" alt="Sample image">

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



       