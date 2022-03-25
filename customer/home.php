<?php
require 'validate.php';
require '../connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
    <title>Store Locator</title>
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>      
      <!-- Navbar-->
      <?php include 'navbar.php' ?>

   <center>
      <p class="text-center h1 fw-bold mb-3 mx-1 mx-md-4 mt-4"  
      style="color:#0073ae;text-shadow: 1px 1px #03a9f4;">WATER IS NOTHING BUT LIFE
      </p>
       </center><BR>
 

<div class="container">
  <main class="grid">
    <article>
      <img src="../img/infographics 1.jpeg"  onclick="window.location='../img/infographics 1.jpeg'" 
      alt="Sample photo" style="cursor:pointer;">
     
    </article>
    <article>
      <img src="../img/infographics 2.jpg"  onclick="window.location='../img/infographics 2.jpg'" 
      alt="Sample photo" style="cursor:pointer;">
     
    </article>
    <article>
      <img src="../img/infographics 3.jpg"  onclick="window.location='../img/infographics 3.jpg'" 
      alt="Sample photo" style="cursor:pointer;">
      
    </article>
 
  </main>
</div><br>


<style>
.article{
  box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #fff;
}

.myButton {
  box-shadow:inset 0px 1px 0px 0px #fff6af;
  background:linear-gradient(to bottom,	 #2196F3 5%, #0d6edf 100%);
  border-radius:6px;
  display:inline-block;
  cursor:pointer;
  color:#fff;
  font-family:Arial;
  font-size:15px;
  font-weight:bold;
  padding:6px 24px;
  text-decoration:none;
  border-color:	#0d6edf;
  box-shadow: 3px 3px 3px #b1b1b1, -3px -3px 3px #fff;
}
.myButton:hover {
  background-color: $blue-500;
  background:linear-gradient(to bottom, #0d6edf 5%, #2196F3 100%);
}

.myButton:active {
  position:relative;
  top:1px;
}


.grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
  grid-gap: 20px;
  align-items: stretch;
}

.grid > article {
  border: 1px solid #ccc;
  box-shadow: 2px 2px 6px 0px rgba(0, 0, 0, 0.3);
}

.grid > article img {
  max-width: 100%;

}

.grid .text {
  padding: 20px;
}





</style>


</body>
</html>
