<?php 
session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
	font-family: Arial, Helvetica, sans-serif;
    background-image:url("sportwallpaper.jpg");
    background-size: cover;
      }
form {border: 3px solid #f1f1f1; width: 500px;
      background-color:#f1f1f1;
      margin-top: 130px; 
      background: rgba(0, 0, 0, 0.7);
      color: white;
      }

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
     
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}



.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
</head>
<body >


<div align="center">
<form action="loginprocess.php" method="post"  >

  <div>
    <h2>Login</h2> 
  </div>
<img src="LetsPlayLogo.png" style="margin-left: 40px" width="100px" height="140px">

  <div align="left" class="container">
  	<?php 
     if(isset($_SESSION['loginfailed']))
     {
     	?>
     	<p style="color: red">Sorry you have entered wrong username or password</p>
     	<?php  
     }
      
       unset($_SESSION['loginfailed']);
  	 ?>
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit" name="login">Login</button>
    <button onclick="location.href='register.php';">Creat Account</button>
   
  </div>

 </form>

</div>


</body>
</html>
