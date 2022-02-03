<?php 

require_once '../connection.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Index</title>
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="main.css">
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
        <link rel = "icon" href = "images/logo.png" type = "image/png">
    </head>
    <body style="background-image:url('../img/bg.jpg');background-size:100% 100%;background-repeat:no-repeat;background-attachment:fixed">
        
   
       <style>
html, body {
    height:90%;
}
body {
background: url(../img/bg.jpg) no-repeat center center fixed;  
background-size: 100% 100%;
    background-position: contain;
    height: 100vh;
    color:#FFF;
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

form {
  position: relative;
  width: 90%;
  height:80%;
  margin: 0 auto;
  background: rgba(130,130,130,.3);
  padding: 20px 22px;
  border: 1px solid;
  border-top-color: rgba(255,255,255,.4);
  border-left-color: rgba(255,255,255,.4);
  border-bottom-color: rgba(60,60,60,.4);
  border-right-color: rgba(60,60,60,.4);
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

</style>
<body>

<center>

<br><br>


<div id="bg"></div>
 <form action="merchant_signup-check.php" method="POST" enctype="multipart/form-data" >
          
<center><h2>Registration</h2>      </center>
             
              <hr><br>
            <table style="width:100%">
              <tr>
                <td>
                  Username:
                </td>
                <td>
                  <input type="text" name="username"  class="email" required = "required">
                </td>
              </tr>
              <tr>
                <td>
                  Password:
                </td>
                <td>
                  <input type="password" name="password"  class="email"  required = "required">
                </td>
              </tr>

            <tr>
                <td>
              Business Name:
                </td>
                <td>
              <input type="text" name="business_name"  class="email"  required = "required">
              </td>
              </tr>

            <tr>
                <td>
              Owner:
                </td>
                <td>
              <input type="text" name="owner"  class="email"  required = "required">
              </td>
              </tr>
            
            
            <tr>
              <td>
              Address:
              </td>
                <td>
              <input type="text" name="address" class="email" required = "required">
              </td>
              </tr>

             <tr>
              <td>
              Email Address:
              </td>
                <td>
              <input type="text" name="email" class="email" required = "required">
              </td>
              </tr>

            <tr>
              <td>
              Mobile Number:
              </td>
                <td>
              
              
              <input type="number" name="contact_number" class="email"  required = "required">
            </td>
              </tr>

              <tr>
              <td>
              Photo:
              </td>
                <td>
              <input type="file" name="photo" class="email" required>
              </td>
              </tr>

                <tr>
  
  <td colspan="2" >         
          <center>    
          <br><br>
              <input type="submit" value="Submit" name="submit" class="myButton">
              <br>
              <input type="button" value="Back to Login" onclick="window.location='index.php'" class="myButton">
      
    </td>
</tr>
 
              </table>
            
          
       
    </body>
</html>