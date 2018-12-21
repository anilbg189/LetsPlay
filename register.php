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
      margin-top: 40px; 
      background: rgba(0, 0, 0, 0.7);
      color: white;
}

input[type=text], input[type=password] ,input[type=email] {
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
<form action="registerprocess.php" method="post" >

  <div>
    <h2> Create an Account</h2> 
  </div>

  <div align="left" class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="user" required>

     <label for="fname"><b>Full Name</b></label>
    <input type="text" placeholder="Enter Fullname" name="fname" required>

    <label for="dob"><b>Date Of Birth</b></label>
    <input type="text" placeholder="Enter date of birth" name="dob" required><br><br>

    <label for="psw"><b>Gender</b></label>
   
    <input type="radio" name="gender" value="male" checked> Male
    <input type="radio" name="gender" value="female"> Female
    <input type="radio" name="gender" value="other"> Other<br><br>
   


    <label for="psw"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Contact Number</b></label>
    <input type="text" placeholder="Enter Contact Number" name="contact" required>
        
    <label for="psw"><b>Enter the pasword</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit">Creat Account</button>
    
  </div>

 </form>

</div>

</body>
</html>
