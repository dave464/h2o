<?php
require 'validate.php';
require '../connection.php';
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Product</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../main.css">
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>

    <body style="background-color: #eee"  >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <!-- Navbar-->
      <?php include 'navbar.php' ?>

      <p class="text-center h1 fw-bold mb-3 mx-1 mx-md-4 mt-4"
      style="color:#0073ae;text-shadow: 1px 1px #03a9f4;">RATING AND REVIEWS
      </p>


<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

<!------ Include the above in your HEAD tag ---------->

<!-- http://www.jquery2dotnet.com/ -->
<div class="container">
    <div class="row">


      <?php
       $query = $conn->query("SELECT product.product_id,product.image,product.product_name,
        product.price,product.product_type, merchant.merchant_id, merchant.business_name
          FROM merchant RIGHT JOIN product ON merchant.merchant_id = product.merchant_id WHERE  product_id = '".$_REQUEST['product_id']."'") or die(mysqli_error());

              while($fetch = $query->fetch_array()){
                  $std_num= 0;
                  $counter =0;
                $productId = $fetch['product_id'];
                $query2 = $conn->query("SELECT product_rating.rating, product_rating.comment
                FROM product_rating WHERE  product_rating.product_id = $productId ");

                while($fetch2 = $query2->fetch_array()){

                  $std_num += $fetch2['rating'];
                  $counter++;
                }
                if($std_num > 0) {
                  $average = $std_num / $counter;

                }
                else {
                  $average = 0;
                }






      ?>



        <div class="col-xs-12 col-md-6">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-xs-12 col-md-6 text-center">
                        <h1 class="rating-num">
                             <?php if($average==0) {
                                  echo 'No Rating';
                                    } else{
                                        echo round($average,2);
                                            } ?></h1>
                        <div class="rating">
        
                              <?php if($average==0) {
              
              } else{
               
                
                      if($average == 5){
                        echo '<i class="fa fa-star" style="color:yellow;font-size: 18px;"></i>';
                        echo '<i class="fa fa-star" style="color:yellow;font-size: 18px;"></i>';
                        echo '<i class="fa fa-star" style="color:yellow;font-size: 18px;"></i>';
                        echo '<i class="fa fa-star" style="color:yellow;font-size: 18px;font-size: 18px;"></i>';
                        echo '<i class="fa fa-star" style="color:yellow;font-size: 18px;"></i>';
                      }else if($average <5  && $average >4 ){
                        echo '<i class="fa fa-star" style="color:yellow;font-size: 18px;"></i>';
                        echo '<i class="fa fa-star" style="color:yellow;font-size: 18px;"></i>';
                        echo '<i class="fa fa-star" style="color:yellow;font-size: 18px;"></i>';
                        echo '<i class="fa fa-star" style="color:yellow;font-size: 18px;"></i>';
                        echo '<i class="fa fa-star-half-alt" style="color:yellow;font-size: 18px;"></i>';
                      }else if($average == 4 ){
                        echo '<i class="fa fa-star" style="color:yellow;font-size: 18px;"></i>';
                        echo '<i class="fa fa-star" style="color:yellow;font-size: 18px;"></i>';
                        echo '<i class="fa fa-star" style="color:yellow;font-size: 18px;"></i>';
                        echo '<i class="fa fa-star" style="color:yellow;font-size: 18px;"></i>';
                        echo '<i class="fa fa-star" style="color:#cbced1;font-size: 18px;"></i>';
                      }else if($average <4  && $average >3 ){
                        echo '<i class="fa fa-star" style="color:yellow;font-size: 18px;"></i>';
                        echo '<i class="fa fa-star" style="color:yellow;font-size: 18px;"></i>';
                        echo '<i class="fa fa-star" style="color:yellow;font-size: 18px;"></i>';
                        echo '<i class="fa fa-star-half-alt" style="color:yellow;font-size: 18px;"></i>';
                        echo '<i class="fa fa-star" style="color:#cbced1;font-size: 18px;"></i>';       
                      }else if($average == 3 ){
                        echo '<i class="fa fa-star" style="color:yellow;font-size: 18px;"></i>';
                        echo '<i class="fa fa-star" style="color:yellow;font-size: 18px;"></i>';
                        echo '<i class="fa fa-star" style="color:yellow;font-size: 18px;"></i>';
                        echo '<i class="fa fa-star" style="color:#cbced1;font-size: 18px;"></i>';
                        echo '<i class="fa fa-star" style="color:#cbced1;font-size: 18px;"></i>';
                      }else if($average <3  && $average >2 ){
                        echo '<i class="fa fa-star" style="color:yellow;font-size: 18px;"></i>';
                        echo '<i class="fa fa-star" style="color:yellow;font-size: 18px;"></i>';
                        echo '<i class="fa fa-star-half-alt" style="color:yellow;font-size: 18px;"></i>';
                        echo '<i class="fa fa-star" style="color:#cbced1;font-size: 18px;font-size: 18px;"></i>';
                        echo '<i class="fa fa-star" style="color:#cbced1;font-size: 18px;"></i>';       
                      }else if($average == 2 ){
                        echo '<i class="fa fa-star" style="color:yellow;font-size: 18px;"></i>';
                        echo '<i class="fa fa-star" style="color:yellow;font-size: 18px;"></i>';
                        echo '<i class="fa fa-star" style="color:#cbced1;font-size: 18px;"></i>';
                        echo '<i class="fa fa-star" style="color:#cbced1;font-size: 18px;"></i>';
                        echo '<i class="fa fa-star" style="color:#cbced1;font-size: 18px;"></i>';
                      }else if($average <2  && $average >1 ){
                        echo '<i class="fa fa-star" style="color:yellow;font-size: 18px;"></i>';
                        echo '<i class="fa fa-star-half-alt" style="color:yellow;"></i>';                    
                        echo '<i class="fa fa-star" style="color:#cbced1;font-size: 18px;"></i>';
                        echo '<i class="fa fa-star" style="color:#cbced1;font-size: 18px;"></i>';
                        echo '<i class="fa fa-star" style="color:#cbced1;font-size: 18px;"></i>';       
                      }else if($average == 1 ){
                        echo '<i class="fa fa-star" style="color:yellow;font-size: 18px;"></i>';
                        echo '<i class="fa fa-star" style="color:#cbced1;font-size: 18px;"></i>';
                        echo '<i class="fa fa-star" style="color:#cbced1;font-size: 18px;"></i>';
                        echo '<i class="fa fa-star" style="color:#cbced1;font-size: 18px;"></i>';
                        echo '<i class="fa fa-star" style="color:#cbced1;font-size: 18px;"></i>';
                      }


                } ?>

                        </div>
                        <div>
                            <span class="glyphicon glyphicon-user"></span><?php echo $counter?> total  
                        </div>

                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="row rating-desc">
                            <div class="col-xs-3 col-md-3 text-right">
                               <i class="fa fa-star" style="color:yellow;"></i>  5
                            </div>
                            <div class="col-xs-8 col-md-9">
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                        <span class="sr-only">80%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end 5 -->
                            <div class="col-xs-3 col-md-3 text-right">
                                <i class="fa fa-star" style="color:yellow;"></i> 4
                            </div>
                            <div class="col-xs-8 col-md-9">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="20"
                                        aria-valuemin="0" aria-valuemax="100" style="width:  <?php echo '50'; ?>%">
                                        <span class="sr-only">60%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end 4 -->
                            <div class="col-xs-3 col-md-3 text-right">
                               <i class="fa fa-star" style="color:yellow;"></i> 3
                            </div>
                            <div class="col-xs-8 col-md-9">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                        <span class="sr-only">40%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end 3 -->
                            <div class="col-xs-3 col-md-3 text-right">
                               <i class="fa fa-star" style="color:yellow;"></i> 2
                            </div>
                            <div class="col-xs-8 col-md-9">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="20"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                        <span class="sr-only">20%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end 2 -->
                            <div class="col-xs-3 col-md-3 text-right">
                                <i class="fa fa-star" style="color:yellow;"></i> 1
                            </div>
                            <div class="col-xs-8 col-md-9">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 15%">
                                        <span class="sr-only">15%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end 1 -->
                        </div>
                        <!-- end row -->
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>




<div class="container mt-5">
    <div class="d-flex justify-content-center row">
        <div class="col-md-6">
            <div class="p-3 bg-white rounded">
                <h6>Reviews[8]</h6>
                <div class="review mt-4">
                    <div class="d-flex flex-row comment-user"><img class="rounded" src="https://i.imgur.com/xxJl1D7.jpg" width="40">
                        <div class="ml-2">
                            <div class="d-flex flex-row align-items-center"><span class="name font-weight-bold">Hui jhong</span><span class="dot"></span><span class="date">12 Aug 2020</span></div>
                            <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                        </div>
                    </div>
                    <div class="mt-2">
                        <p class="comment-text"><?php echo $fetch['product_name']?></p>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
</div>

 <?php
       }
    ?>


    </body>
</html>

<style>
.card{
  box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #fff;
}

.glyphicon { margin-right:5px;}
.rating .glyphicon {font-size: 22px;}
.rating-num { margin-top:0px;font-size: 54px; }
.progress { margin-bottom: 5px;}
.progress-bar { text-align: left; }
.rating-desc .col-md-3 {padding-right: 0px;}
.sr-only { margin-left: 5px;overflow: visible;clip: auto; }


</style>