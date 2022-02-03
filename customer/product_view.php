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
        <link rel="stylesheet" href="main.css">
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
        <link rel = "icon" href = "images/logo.png" type = "image/png">
    </head>

    <body  style="background-image:url('../img/bg.jpg');background-size:100% 100%;background-repeat:no-repeat;background-attachment:fixed" >
        
     
       

<center>

<?php
  $query = $conn->query("SELECT * FROM `product` WHERE `product_id` = '$_REQUEST[product_id]'") or die(mysqli_error());
  $fetch = $query->fetch_array();
?>

           <div class="content">
          <table>
        
        
        </table>



<h2 style="background-color: #ADD8E6;;color:#000;"><?php echo $fetch['product_name']?> -  &#8369; <?php echo $fetch['price']?> </h2> 
<br>


<?php  
   $query = $conn->query("SELECT product.product_id,product.image,product.product_name,product.product_type,
   product.price,product.description, merchant.merchant_id
              FROM merchant RIGHT JOIN product ON merchant.merchant_id = product.merchant_id WHERE  product_id = '".$_REQUEST['product_id']."'") or die(mysqli_error());
             
 ?>
      <div style="border:1px solid #FFF;width:98%;margin:5px;float:left;background-color:#FFF;padding-bottom:50px"><center>
        <div class="slideshow-container">
          <div class="mySlides fade">  
            <img src="../photo/<?php echo $fetch['image']?>" style="width:100%;height:350px" onclick="window.location='../photo/<?php echo $fetch['image']?>'">
        </div>
            <a class="prev" onclick="plusSlides(-1)" style="left:0">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a></div></center>
            <h3 style="color:#000;margin:5px;margin-left:15px"><?php echo $fetch['product_name']?></h3>
            <h3 style="color:#000;margin:5px;margin-left:15px">  &#8369; <?php echo $fetch['price']?></h3>
            <h3 style="color:#000;margin:5px;margin-left:15px">Type: <?php echo $fetch['product_type']?></h3><hr style="width:90%">
            <h3 style="color:#000;margin:5px;margin-left:15px">Description: <?php echo $fetch['description']?></h3>
            
            <center><br>Ratings:<br><span style="font-size:200%;color:#CCCC00;margin:20px">&starf;</span></center>
            <center><br>Enter Quantity:<br><span style="font-size:200%;color:#CCCC00;margin:20px">
            <input type="number" name="number" class="email" id="number" style="text-align:center"></span></center>
            <center><br><a onclick="addcart();" class="myButton" style="color:#000">Add to Cart</a><br><br>

              Rate Product<br>

          <select name="rate" id="rate" class="email">
            <option></option>
            <option value="1"><span style="font-size:200%;color:#CCCC00;margin:20px">&starf;</span></option>
            <option value="2"><span style="font-size:200%;color:#CCCC00;margin:20px">&starf;&starf;</span></option>
          <option value="3"><span style="font-size:200%;color:#CCCC00;margin:20px">&starf;&starf;&starf;</span></option>
          <option value="4"><span style="font-size:200%;color:#CCCC00;margin:20px">&starf;&starf;&starf;&starf;</span></option>
          <option value="5"><span style="font-size:200%;color:#CCCC00;margin:20px">&starf;&starf;&starf;&starf;&starf;</span></option>
        </select>
        <center><br><a onclick="rateproduct();" class="myButton" style="color:#000">Rate Product</a></div>
  

       
 


   <script>
    function addcart() {
      var number = document.getElementById("number").value;
      
      if(number=="") {
        alert("Please enter quantity first");
      } else {
        window.location='addcart.php?product_id=<?php echo $fetch['product_id']?>&number='+number+' &customer_id=<?php echo $_SESSION['customer_id']?>';
      }
      
    }
    function addpurchase() {
      var number = document.getElementById("number").value;
      
      if(number=="") {
        alert("Please enter quantity first");
      } else {
        window.location='addpurchase.php?item=55&number='+number+'&username=dave&status=1';
      }
      
    }
    function rateproduct() {
      var rate = document.getElementById("rate").value;
      
      if(rate == '') {
        alert("Select ratings to continue..");
      } else {
          window.location='rate.php?item=55&rate='+rate+'';
      }
    }
    </script>
    <br><br><script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
    
      </div>





    </body>
</html>



<style>
* {box-sizing: border-box; color: black}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>


<style>
h2 {
  background-color: #ADD8E6;;
  padding:15px;
  color:#000;
}
.myButton {
  box-shadow:inset 0px 1px 0px 0px #fff6af;
  background:linear-gradient(to bottom, #ffec64 5%, #ffab23 100%);
  background-color:#ffec64;
  border-radius:6px;
  border:1px solid #ffaa22;
  display:inline-block;
  cursor:pointer;
  color:#333333;
  font-family:Arial;
  font-size:15px;
  font-weight:bold;
  padding:6px 24px;
  text-decoration:none;
  text-shadow:0px 1px 0px #ffee66;
}
.myButton:hover {
  background:linear-gradient(to bottom, #ffab23 5%, #ffec64 100%);
  background-color:#ffab23;
}
.myButton:active {
  position:relative;
  top:1px;
}


@import url(https://fonts.googleapis.com/css?family=Open+Sans+Condensed:700);

html, body,form  {
color:#000;
height:100%;
}
body {
  background: #999;
  
  padding: 20px;
  font-family: "Open Sans Condensed", sans-serif;
}

#bg {
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background: url(img/bg.jpg) no-repeat center center fixed;
  background-size: cover;
  -webkit-filter: blur(5px);    
}

form input, form button {
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

.email {
  width: 40%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
</style>