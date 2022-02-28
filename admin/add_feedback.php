
<!DOCTYPE html> 
<?php
	require_once 'validate.php';
	require 'name.php';
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Feedback</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../admin/navstyle.css">
    <link rel="stylesheet" href="../admin/ad_style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Font Link -->
     <link href="https://fonts.googleapis.com/css2?family=Merienda&display=swap" rel="stylesheet">
     <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
<!-- Datatables -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
  <link rel='stylesheet' href='https://cdn.datatables.net/buttons/1.2.2/css/buttons.bootstrap.min.css'>

 </head>
<body>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

 <!-- Navbar -->
 <?php include'navbar.php';?>
  <!-- /.navbar -->


<!-- Blue Background -->
  <div style="height: 340px; background-color: #2234ae;
    background-image: linear-gradient(340deg, #2234ae 0%,  #191714 89%);">
      <br> 
      <span style="color:white;
    margin-left:280px; margin-top:30px;  font-size: 40px; font-family:Monotype Corsiva;
  font-weight: 400;" class="links_name">Inspection and Monitoring</span>



  </div>


  <!-- Main Content -->
   <div class="home_content">
    
   <div id="tbl-contain" style=" margin-top:-240px;
    width: 97%;height:100%; max-height:4000px;
     background-color: white;  border-radius: .4rem;
     border-color:dodgerBlue;
    border:2px solid dodgerBlue;
    box-shadow: 0 0 8px 0 dodgerBlue; margin-left:20px;
      ">



<div class="action">
        <div class="profile" style="margin-top:-100px;
        margin-right:17px;float:right" onclick="menuToggle()">
             <img src = "../photo/<?php echo $fetch['photo']?>" id = "lbl" width = "100%" height = "100%"/>
        </div>
        <div class="menu" style=margin-left:820px;>
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


  <br><br><br><br><br>
   
<form action ="add_query_feedback.php" method = "POST">
  <div class="card" style="margin-left:20px; 
    margin-right:20px; background-color: #eee;
    box-shadow: 1px 2px 5px black;">
    <div class="card-header">
      <div class="container-fluid">
        <div class="card-body p-0">
          <div class="row">
           <div class="col-sm-12"><br>
             <center>
               <h2>EVALUATION REPORT</h2>
              </center><br><br>
                    <hr>
              </div><br><br><br>

  <div class = "col-md-4" >
    <div class = "form-group">
      <b><label>Name: </label></b>
        <select class = "form-control" required = required name = "merchant_id">
          <?php
               $query = "SELECT * FROM merchant";
               $result = $conn->query($query);
           if ($result->num_rows > 0) {
                echo '<option value="">Select Waterstation</option>';
              while ($row = $result->fetch_assoc()) {
                echo '<option value="'.$row['merchant_id'].'">'.$row['business_name'].'</option>';
                }
              }else{
                echo '<option value="">Waterstation not available</option>';
              }
            ?>
          </select>
    </div>
  </div>


<div class = "col-md-4" style="margin-left:310px;" >
  <div class = "form-group">
			<b><label>Date:</label></b>
		<input type = "date" class = "form-control"  name = "date" />
	</div>
</div>


<fieldset class="border p-3" 
          style="width:98%; 
           margin-left:10px;
           margin-right:10px;
           margin-top: 30px;
           box-shadow: 1px 1px 1px 1px black;
           border-color: white ">
      <legend class="w-auto px-2"  style="width:100%;">LEGEND</legend>
            <!----============== 5star =============== -->
        
             <span class="fa fa-star checked" style="color: gold;margin-left:-90px;margin-top: 50px;"></span>
             <span class="fa fa-star checked" style="color: gold;"></span>
             <span class="fa fa-star checked" style="color: gold;"></span>
             <span class="fa fa-star checked" style="color: gold;"></span>
             <span class="fa fa-star checked" style="color: gold;"></span>
            

             <!----============== 4star =============== -->
            
             <span class="fa fa-star checked" style="color: gold; margin-left:60px;" ></span>
             <span class="fa fa-star checked" style="color: gold;"></span>
             <span class="fa fa-star checked" style="color: gold;"></span>
             <span class="fa fa-star checked" style="color: gold;"></span>
             <span class="fa fa-star checked" style="color: #ddd;"></span>
             

              <!----============== 3star =============== -->
             
              <span class="fa fa-star checked" style="color: gold;margin-left:60px; "></span>
             <span class="fa fa-star checked" style="color: gold;"></span>
             <span class="fa fa-star checked" style="color: gold;"></span>
             <span class="fa fa-star checked" style="color: #ddd;"></span>
             <span class="fa fa-star checked" style="color: #ddd;"></span>
             

              <!----============== 2star =============== -->
              
              <span class="fa fa-star checked" style="color: gold;margin-left:60px;"></span>
             <span class="fa fa-star checked" style="color: gold;"></span>
             <span class="fa fa-star checked" style="color: #ddd;"></span>
             <span class="fa fa-star checked" style="color: #ddd;"></span>
             <span class="fa fa-star checked" style="color: #ddd; "></span>
            

              <!----============== 1star =============== -->
             
              <span class="fa fa-star checked" style="color: gold;margin-left:60px; "></span>
             <span class="fa fa-star checked" style="color: #ddd;"></span>
             <span class="fa fa-star checked" style="color: #ddd;"></span>
             <span class="fa fa-star checked" style="color: #ddd;"></span>
             <span class="fa fa-star checked" style="color: #ddd; "></span><br>
             <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Execellent
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  Very Good
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Good
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Fair
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Poor</p> 
                      
  </fieldset>     

  <table id="example" class="table table-bordered border-primary table-hover" style="margin-left:15px; width:97%; margin-top:60px;border:1px solid blue;" >
    <thead>
       <tr>
          <th scope="col" class=" border-primary" style="border:1px solid blue;background:#1E90FF;color:white;text-align:center;">Critea</th>
          <th scope="col" class=" border-primary" style="border:1px solid blue;background:#1E90FF;color:white;text-align:center;"> Rating</th>        
        </tr>
    </thead> 
    <tbody >
        <tr>
           <td class=" border-primary" style="border:1px solid blue;"></td>
           <td class=" border-primary" style="border:1px solid blue;">
           <fieldset class="rating">
              <input  type="radio" id="star5" name="critea_1" value="5" />
              <label for="star5">5 stars</label>
              <input type="radio" id="star4" name="critea_1" value="4" />
              <label for="star4">4 stars</label>
              <input type="radio" id="star3" name="critea_1" value="3" />
              <label for="star3">3 stars</label>
              <input type="radio" id="star2" name="critea_1" value="2" />
              <label for="star2">2 stars</label>
              <input type="radio" id="star1" name="critea_1" value="1" />
              <label for="star1">1 star</label>
          </fieldset>
          </td>
        </tr>
    </tbody>
  </table>

                </div>
              </div>
            </div>
          </div>
        </div>

<br>
     
    <div>
      <button name = "add_feedback"  class = "btn btn-primary" 
              style="background:dodgerBlue; 
                     margin-right:20px;
                     margin-top:13px;
                     float:right; ">
             <i class = ""></i> Submit</button> <br><br><br><br>
     </div>
</form>  
    <br>
    </div>  
  </div>
</div>


<style>
.dataTables_wrapper .dt-buttons {
  
  text-align:center;
  width:350px;
  margin-left:300px;
  margin-bottom:-40px;
}
#addBtn.btn.btn-primary{
  margin-top: 130px;
  margin-left:20px;
 bottom:20px;
 color:white;
}
#table_length.dataTables_length{
        width:120px;
        height: 10px;
        margin-left:13px;
    }

#table_paginate.dataTables_paginate.paging_simple_numbers{
  margin-right:20px;
}

#table_info.dataTables_info{
  width:200px;
        height: 20px;
        margin-left:13px;
}

#table_filter.dataTables_filter{
   
    margin-right: 20px;

}

.rating {
    margin-right:30%;
    border:none;
}
.rating:not(:checked) > input {
    position:absolute;
    clip:rect(0, 0, 0, 0);
}
.rating:not(:checked) > label {
    float:right;
    width:1em;
    padding:0 .1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:250%;
    line-height:1.2;
    color:#ddd;
}
.rating:not(:checked) > label:before {
    content:'★ ';
}
.rating > input:checked ~ label {
    color: gold;
}
.rating:not(:checked) > label:hover, .rating:not(:checked) > label:hover ~ label {
    color: #f70;
}
.rating > input:checked + label:hover, .rating > input:checked + label:hover ~ label, .rating > input:checked ~ label:hover, .rating > input:checked ~ label:hover ~ label, .rating > label:hover ~ input:checked ~ label {
    color: #ea0;
}
.rating > label:active {
    position:relative;


        

</style>

</body>
</html>

