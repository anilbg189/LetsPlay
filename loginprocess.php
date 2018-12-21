<?php 

session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>

<?php 

$username=$_POST["uname"];
$password=$_POST["psw"];

$conn = mysqli_connect("localhost","root","","letsromp");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: ".mysqli_connect_error();
  }

  $query = mysqli_query($conn," SELECT * from user where username='$username' and password='$password'");
  $row = mysqli_num_rows($query);

  if($row==1)
  { $_SESSION["username"]=$username;
  	header('location:homepage.php');
  } 
  else
  {
  	header('location:index.php');
    $_SESSION["loginfailed"]="true";

  }


 ?>


</body>
</html>