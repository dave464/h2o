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
        <link rel="stylesheet" href="main.css">
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
        <link rel = "icon" href = "images/logo.png" type = "image/png">
    </head>
    <body style="background-image:url('../img/bg.jpg');background-size:100% 100%;background-repeat:no-repeat;background-attachment:fixed">
        
      <!-- Navbar-->
      <?php include 'navbar.php' ?>

  <center>
   <div class="content">


<?php  
   $query = $conn->query("SELECT deliveryman.deliveryman_id, deliveryman.name, deliveryman.contact_number,
   deliveryman.plate_number, deliveryman.username, deliveryman.password, merchant.merchant_id
   FROM merchant RIGHT JOIN deliveryman ON merchant.merchant_id = deliveryman.merchant_id WHERE  deliveryman.merchant_id = '".$_SESSION['merchant_id']."'") or die(mysqli_error());
   $fetch = $query->fetch_array();
              
 ?>

<h2>Delivery Man</h2><br>
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
    
      </div>

    </body>
</html>



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