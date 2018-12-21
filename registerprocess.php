<?php 

session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php 

$conn = mysqli_connect("localhost","root","","letsromp");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


$username=$_POST["user"];
$fullname=$_POST["fname"];
$gender=$_POST["Gender"];
$email=$_POST["email"];
$number=$_POST["contact"];
$password=$_POST["password"];
$dob=$_POST["dob"];
echo $username.' '.$gender.' '.' '.$email.' '.$number.' '.$password.' ';

$query = mysqli_query($conn,"INSERT INTO user (username,password,fullname,dob,gender,email,phno) VALUES ('$username','$password','$fullname','$dob','$gender','$email','$number')");

if($query)
{
    $_SESSION["username"]=$username;
	header('location:homepage.php');
}
else
{

echo "couldnt insert data".$query;
}

?>

</body>
</html>