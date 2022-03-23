<?php
require 'validate.php';
require '../connection.php';
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Home</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../main.css">
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
       
    </head>
    <body >
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
      <!-- Navbar-->
      <?php include 'navbar.php' ?>
       
  <p class="text-center h1 fw-bold mb-3 mx-1 mx-md-4 mt-4"  
      style="color:#0073ae;text-shadow: 1px 1px #03a9f4;">Dashboard
  </p>



     <?php
        $q_p = $conn->query("SELECT COUNT(*) as total FROM `orderlist` WHERE orderlist.status = 'pending' && orderlist.merchant_id = '".$_SESSION['merchant_id']."' ") or die(mysqli_error());
        $f_p = $q_p->fetch_array();

        $q_s = $conn->query("SELECT COUNT(*) as total FROM `orderlist` WHERE orderlist.status = 'accepted' && orderlist.merchant_id = '".$_SESSION['merchant_id']."'") or die(mysqli_error());
        $f_s = $q_s->fetch_array();

        $q_d = $conn->query("SELECT COUNT(*) as total FROM `orderlist` WHERE orderlist.status = 'dispatched' && orderlist.merchant_id = '".$_SESSION['merchant_id']."'") or die(mysqli_error());
        $f_d = $q_d->fetch_array();

          $q_del = $conn->query("SELECT COUNT(*) as total FROM `deliveryman` WHERE  deliveryman.merchant_id = '".$_SESSION['merchant_id']."'") or die(mysqli_error());
        $f_del = $q_del->fetch_array();
      ?>

<div class="container-fluid"  style="margin-top:30px;">
  <section>
    <!--<div class="row">
      <div class="col-12 mt-3 mb-1">
        <h5 class="text-uppercase">Minimal Statistics Cards</h5>
        <p>Statistics on minimal cards.</p>
      </div>
    </div>-->
    <div class="row">
      <div class="col-xl-3 col-sm-6 col-12 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-1">
              <div class="align-self-center">
                <i class="fas fa-history text-info fa-3x"></i>
              </div>
              <div class="text-end">
                <h3><?php echo $f_p['total']?></h3>
                <p class="mb-0">Pending Orders</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-12 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-1">
              <div class="align-self-center">
                <i class="fas fa-clipboard-check text-warning fa-3x"></i>
              </div>
              <div class="text-end">
                <h3><?php echo $f_s['total']?></h3>
                <p class="mb-0">Accepted Orders</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-12 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-1">
              <div class="align-self-center">
                <i class="fas fa-truck text-success fa-3x"></i>
              </div>
              <div class="text-end">
                <h3><?php echo $f_d['total']?></h3>
                <p class="mb-0">Dispatched Items</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-12 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-1">
              <div class="align-self-center">
                <i class="far fa-user text-danger fa-3x"></i>
              </div>
              <div class="text-end">
                <h3><?php echo $f_del['total']?></h3>
                <p class="mb-0">Delivery Man</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </section>
</div>



    </body>
</html>

<style type="text/css">
  /*body {
  background-color: #f5f7fa;
}*/
.card{
  box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #fff;
}
</style>