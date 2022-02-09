<?php
require 'validate.php';
require '../connection.php';
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Transactions</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="main.css">
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
        <link rel = "icon" href = "images/logo.png" type = "image/png">
    </head>
    <body style="background-image:url('../img/bg.jpg');background-size:100% 100%;background-repeat:no-repeat;background-attachment:fixed">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <!-- Navbar-->
      <?php include 'navbar.php' ?>


       <center>
       <h1 style="color:#FFF;margin:5px;margin-left:15px">TRANSACTIONS</h1>
       <div class="container" > 
  <div class="table-responsive">

<table class="table">
<thead>
  <tr id="tr">
    <!-- <th  scope="col">#</th> -->
    <th class="col" scope="col">PRODUCT NAME</th>
    <th scope="col">SELLER</th>
    <th scope="col">DELIVERY MAN</th>
    <th scope="col">QUANTITY</th>
    <th scope="col">UNIT PRICE</th>
    <th scope="col">TOTAL</th>
    <th scope="col">DATE</th>
  </tr>
</thead> 
<tbody>   

   <?php  
   $query = $conn->query("SELECT product.product_name, product.price, merchant.business_name,deliveryman.name,
   transactions.quantity, transactions.total, transactions.date FROM transactions 
   RIGHT JOIN deliveryman ON transactions.deliveryman_id = deliveryman.deliveryman_id 
   RIGHT JOIN product ON transactions.product_id = product.product_id 
   RIGHT JOIN merchant ON transactions.merchant_id = merchant.merchant_id 
   WHERE  deliveryman.merchant_id = '".$_SESSION['merchant_id']."'") or die(mysqli_error());
              while($fetch = $query->fetch_array()){
 ?>

        <tr>  
            <td class="align-middle"><?php echo strtoupper($fetch['product_name'])?></td>
            <td class="align-middle"><?php echo strtoupper($fetch['business_name'])?></td>
            <td class="align-middle"><?php echo strtoupper($fetch['name'])?></td>
            <td class="align-middle"><?php echo $fetch['quantity']?></td>
            <td class="align-middle"> &#8369; <?php echo $fetch['price']?>.00</td>
            <td class="align-middle"> &#8369; <?php echo $fetch['total']?>.00</td>
            <td class="align-middle"><?php echo $fetch['date']?></td>

           </tr> 

        <?php
            }
          ?>  

      </tbody>
    </table>
      </div>

    </body>
</html>



<style>

.container {
  background-color: white;
  color:black;
}

td{
    //font-size: 10px;
    white-space: nowrap;
  }
  th {
    //font-size: 10px;
    white-space: nowrap;
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
</style>