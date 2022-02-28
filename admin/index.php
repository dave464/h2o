<!DOCTYPE html>
<?php require_once "connect.php"?>

<html>
<head>
 <title>Login</title>
 <link rel="stylesheet" type="text/css" href="../css/loginstyle.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<script src="https://kit.fontawesome.com/a81368914c.js"></script>
</head>
<body>

   
    <header class="site-header clearfix">
     
        <section>

         <div class="leftside"> 
            <img style="margin-left:40px; margin-top: 40px;" src="../img/Log.gif">
         </div>
         

         <div class="login-content">
			<form method = "POST">
				<img  style="clip-path: circle(); margin-left: 130px;" src="../img/admin.jfif">
				<h2 class="title" style=" font-family:Georgia;">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" class="input" class = "form-control"  name = "username" required = "required" >
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" class = "form-control"  name = "password"  required = "required">
            	   </div>
            	</div>
                
            	<input type="submit"  name = "login"  class="btn" value="Login">
            </form>
			<?php require_once 'login.php'?>
        </div>

        <script type="text/javascript" src="../js/main.js"></script>


        </section>
       
       </header>     



        
</body>
</html>