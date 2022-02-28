
<!DOCTYPE html> 
<?php
	require_once 'validate.php';
	require 'name.php';
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Calendar</title>
     <!-- CSS -->
     <link rel="stylesheet" href="../admin/navstyle.css">
     <link rel="stylesheet" href="../admin/ad_style.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Boxicons CDN Link -->
     <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Font Link -->
     <link href="https://fonts.googleapis.com/css2?family=Merienda&display=swap" rel="stylesheet">
   </head>

<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

 <!-- Navigation Bar -->   
 <?php include'navbar.php';?>
  <!-- /.navbar -->

<!-- Blue Background -->
  <div style="height: 340px; background-color: #2234ae;
    background-image: linear-gradient(340deg, #2234ae 0%,  #191714 89%);">
      <br> 
      <span style="color:white;
    margin-left:280px; margin-top:30px; font-size: 40px; font-family:Monotype Corsiva;
  font-weight: 400;" class="links_name">Calendar</span>
 </div>


<!-- Main Content -->
<div class="home_content">
    
   <div class="action">
        <div class="profile" style="margin-top:-340px;
        margin-right:17px;float:right" onclick="menuToggle()">
             <img src = "../photo/<?php echo $fetch['photo']?>" id = "lbl" width = "100%" height = "100%"/>
        </div>
        <div class="menu">
            <h3><?php echo $name;?> <br> <span>Administrator</span></h3>
            <ul style="margin-left: -40px;">            
            <li><img src="../img/edit.png" alt=""><a href="edit_account.php">Edit Account</a></li> <li><img src="../img/user.png" alt=""><a href="account.php">User Profile</a></li>
            <li><img src="../img/log-out.png" alt=""><a href="logout.php">Log-Out</a></li>
            </ul>
        </div>
    </div>
    <script>
        function menuToggle() {
            const toggleMenu = document.querySelector(".menu");
            toggleMenu.classList.toggle('active')
        }
    </script> 


<div id="tbl-contain" style=" margin-top:-240px;
    width: 97%; height:510px;
     background-color: white;  border-radius: .4rem;
     border-color:dodgerBlue;
    border:2px solid dodgerBlue;
    box-shadow: 0 0 8px 0 dodgerBlue; margin-left:20px;
      ">

 
<!-- Calendar -->     
<div class="calendar">
 
 <iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23ffffff&ctz=Asia%2FManila&showNav=1&showTitle=0&showPrint=1&showCalendars=1&src=cnYwNTE5M2pyOWo0aWljdGU1ZXZsajUxbzhAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&src=cHRuaGc2aTdqdjVkbXFrczBnaDQ1Z3JjZjhAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&src=ZW4ucGhpbGlwcGluZXMjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&color=%23C0CA33&color=%23F4511E&color=%230B8043" 
    style="border:solid 5px white
    " width="940" height="420" frameborder="0" scrolling="no"></iframe>
</div>

   
   </div>
 </div>



 <style type="text/css">
    
      .calendar{
      margin-top: -220px;
      height: 465px;
      width: 985px;
      background-color: white;
      float: left;
      transition: all .4s;
     
      margin-left:20px;
      background: #1E90FF ; 
      margin-bottom: 30px;
      border:2px solid dodgerBlue;
    box-shadow: 0 0 8px 0 dodgerBlue; 
    }
    
    iframe {
    
    margin-top: 20px;
    margin-left: 20px;
    border-left-color: aqua
       
  }   
</style>





</body>
</html>

