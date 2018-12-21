
<!DOCTYPE html>
<html>
<head>
	<style>
	
	body{
     	background-color: #F2F4F4;
     }

     .main{
     	background-color: #333333;
       box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
       width: 1270px;
       height: 100%;
       margin-left: 200px;
       padding-left: 20px;
      border-radius: 10px;
      color: white;
      font-family: 'Open Sans', sans-serif;
      font-size: 22px;
      padding-bottom: 20px;
      float: left;

      }

     .contenttitle{
      color: #66cc00;
      background-color: black;
      text-transform: uppercase;
      width: auto;
      padding: 10px;
      margin-left: -20px;
      font-size: 25px;
      padding: 28px;
    }



</style>
</head>
<body>
	<?php 
	include "sidebar.php";
    ?>
	<div  class="main">

<h2 class="contenttitle">Accounts details</h2>

<?php
$username = $_SESSION['username'];

$conn = mysqli_connect("localhost","root","","letsromp");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: ".mysqli_connect_error();
  } 

$result = mysqli_query($conn,"SELECT fullname,dob,gender,email,phno from user where username='$username' ");
$row=mysqli_fetch_assoc($result);
echo "Name  : ".$row["fullname"];
echo "<br>";
echo "Date of birth  : \r\n ".$row["dob"];
echo "<br>";
echo "Gender  : ".$row["gender"];
echo "<br>";
echo "Email  : ".$row["email"];
echo "<br>";
echo "Contact Number  :  ".$row["phno"];

?>

</div>


</body>
</html>