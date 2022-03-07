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

    <body   >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <!-- Navbar-->
      <?php include 'navbar.php' ?>

      <p class="text-center h1 fw-bold mb-3 mx-1 mx-md-4 mt-4"
      style="color:#0073ae;text-shadow: 1px 1px #03a9f4;">PRODUCT LIST
      </p>

<!--------- SECTION Start-------->
<section >
  <div class="container py-5">
    <div class="row">


      <?php
       $query = $conn->query("SELECT product.product_id,product.image,product.product_name,
        product.price,product.product_type, merchant.merchant_id, merchant.business_name
          FROM merchant RIGHT JOIN product ON merchant.merchant_id = product.merchant_id WHERE  product.merchant_id = '".$_REQUEST['merchant_id']."'") or die(mysqli_error());

              while($fetch = $query->fetch_array()){
                  $std_num= 0;
                  $counter =0;
                $productId = $fetch['product_id'];
                $query2 = $conn->query("SELECT product_rating.rating
                FROM product_rating WHERE product_rating.product_id = $productId");

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

            <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">
        <div class="card">
          <div class="d-flex justify-content-between p-3">
            <p class="lead mb-0"><?php echo $fetch['business_name']?>'s Offer</p>
            <a href="#!">
              <div class="mask">
                <div class="d-flex justify-content-start align-items-end h-100">
                  <h2><span class="badge bg-warning ms-2">Sale</span></h2>
                </div>
              </div>
              <div class="hover-overlay">
                <div
                  class="mask"
                  style="background-color: rgba(251, 251, 251, 0.15);"
                ></div>
              </div>
            </a>
          </div>

          <img src = "../photo/<?php echo $fetch['image']?>"
          onclick="window.location='product_view.php?product_id=<?php echo $fetch['product_id']?>'"
           class="card-img-top"/>

          <div class="card-body">

            <div class="d-flex justify-content-between">
              <p class="small"><?php echo $fetch['product_type']?></p>

            </div>


            <div class="d-flex justify-content-between mb-3">
              <h5 class="mb-0"><?php echo $fetch['product_name']?></h5>
              <h5 class="text-dark mb-0">&#8369; <?php echo $fetch['price']?>.00</h5>
            </div>
            <div class="d-flex justify-content-between mb-2">
              <p class="text-muted mb-0">Rating:  <h5 class="text-dark mb-0">
                <?php if($average==0) {
                echo 'No Rating';
              } else{
                echo $average;
                } ?></h5> 
              </p>


        </div>
          </div>
        </div>
      </div>

 <?php
       }
    ?>


        </div>
      </div>
    </div>
  </div>
</section>
<!--------- SECTION END-------->

    </body>
</html>

<style>
.card{
  box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #fff;
}
</style>