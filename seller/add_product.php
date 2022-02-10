<?php
require 'validate.php';
require '../connection.php';
?>




<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Add Product</title>
        <meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes">
        <link rel="stylesheet" href="../main.css">
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
    </head>
    <body style="background-color: #eee;">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
      <!-- Navbar-->
      <?php include 'navbar.php' ?>

      <p class="text-center h1 fw-bold mb-3 mx-1 mx-md-4 mt-4"  
      style="color:#0073ae;text-shadow: 1px 1px #03a9f4;">ADD PRODUCT 
      </p>

 <!-- 

<?php  
   $query = $conn->query("SELECT product.product_id,product.image,product.product_name,
   product.price, merchant.merchant_id
              FROM merchant RIGHT JOIN product ON merchant.merchant_id = product.merchant_id WHERE  product.merchant_id = '".$_SESSION['merchant_id']."'") or die(mysqli_error());
   $fetch = $query->fetch_array();
              
 ?>

<form action="add_query_product.php" method="POST" enctype="multipart/form-data" >
                    
<input type="hidden" value="<?php echo $_SESSION['merchant_id']?>" name="merchant_id">


                            <h3>Item Information:</h3><br>
                            <hr><br>
                        <table style="width:100%">
                            <tr>
                                <td>
                                    Item Name:
                                </td>
                                <td>
                                    <input type="text" name="product_name"  class="email" required = "required" >
                                </td>
                            </tr>
                            <tr>
                                <td valign="top">
                                    Type:
                                </td>
                                <td>
                                    <select name="product_type" class="email" required = "required"  >
                                        <option></option>
                                        <option>Mineral Water</option>
                                        <option>Purified Water</option>
                                        <option>Alkaline Water</option>
                                        <option>Distilled Water</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                            Price:
                                </td>
                                <td>
                            <input type="number" name="price"  class="email" required = "required" >
                            </td>
                            </tr>
                        <tr>
                                <td valign="top">
                            Item Description:
                                </td>
                                <td valign="top">
                                <textarea required = "required"  name="description" style="height:200px; "></textarea>
                            
                            </td>
                            </tr>
                        <tr>
                            <td valign="top">
                        Item Image:
                            </td>
                                <td>
                            <input type="file" name="photo"  class="email" required multiple>
                            </td>
                            </tr>
                        
                    
                    
                    
                        <tr>
    <td colspan="2" >                   
                    <center>        
                    
                            <input type="submit" value="Add Product" name="submit" class="myButton">
                            </td>
</tr>
</table>        
            <br><br><br>                
                            
                            
                            
                        
                            </form>

         <br><br><br> -->




         <div class="vh-200" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <form class="mx-1 mx-md-4" action="add_query_product.php" method="POST" enctype="multipart/form-data">
                
                <input type="hidden" value="<?php echo $_SESSION['merchant_id']?>" name="merchant_id">
                <p class="text-left h4 fw-bold mb-3 mx-1 mx-md-4 mt-4">Item Information</p>

                <label class="labels" style=" font-size: 11px; margin-left:50px;">Product Name</label>
                <div class="d-flex flex-row align-items-center mb-2">
                    <i class="fas fa-tint fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="product_name" id="form3Example3c" class="form-control" 
                      placeholder="Product Name" required = "required"/>
                    </div>
                  </div>

                <label class="labels" style=" font-size: 11px; margin-left:50px;">Product Type</label>
                <div class="d-flex flex-row align-items-center mb-2">
                    <i class="fa-solid fa-hand-holding-droplet fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <select name="product_type" class="form-select" required = "required"  >
                         <option value = "">Choose an option</option>
                         <option>Alkaline Water</option>
                         <option>Distilled Water</option>
                         <option>Mineral Water</option>
                         <option>Purified Water</option>
                      </select>   
                    </div>
                </div>

                <label class="labels" style=" font-size: 11px; margin-left:50px;">Price</label>
                <div class="d-flex flex-row align-items-center mb-2">
                    <i class="fa-solid fa-tags fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="number" name="price" id="form3Example3c" class="form-control" 
                      placeholder="Price" required = "required"/>
                    </div>
                  </div>

                  <label class="labels" style=" font-size: 11px; margin-left:50px;">Description</label>
                <div class="d-flex flex-row align-items-center mb-2">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <textarea required = "required"  name="description" class="form-control" style="height:100px;" placeholder="Description">
                    </textarea> 
                    </div>
                  </div>

                  <label class="labels" style=" font-size: 11px; margin-left:50px;"></label>
                <div class="d-flex flex-row align-items-center mb-2">
                    <i class="fas fa-camera fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <input type="file" name="photo" class="email" required="required">
                    </div>
                  </div>
                  
                

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" name="submit" class="btn btn-primary btn-lg">ADD PRODUCT</button>
                  </div>
                  
                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="../img/addPro.jpg" class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>










<!--
<style>
*{
  color:white;
}

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
</style>-->
    </body>
</html>