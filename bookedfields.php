<?php 
ob_start();
 ?>
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
      padding-bottom: 20px;
      float: left;
      margin-bottom: 10px;
     }

     .contenttitle{
      color: #66cc00;
      background-color: black;
      text-transform: uppercase;
      width: auto;
      padding: 10px;
      margin-left: -20px;
      font-size: 16px;
    }

    .main:hover{
      transform: scale(1.1);
      transition: 0.4s;

    }

     .cancleb{
      
    margin-right: 100px;
    width: 200px;
       background-color: red;
    color: white;
    padding: 10px;
    font-size: 16px;
    border: none;
    border-radius: 4px;
    margin: 7px;
    cursor: pointer;

     }

     .cancleb:hover{
      transform: scale(1.2);
      transition: 0.4s;
     }

     .viewplayer{
      
    margin-right: 100px;
    width: 200px;
       background-color: #4CAF50;
    color: white;
    padding: 10px;
    font-size: 16px;
    border: none;
    border-radius: 4px;
    margin: 7px;
    cursor: pointer;

     }

     .viewplayer:hover{
      transform: scale(1.2);
      transition: 0.4s;
     }

</style>
</head>
<body>
	<?php 
	include "sidebar.php";
    ?>
	
<h2 align="center">Booked Fields</h2>

<?php
$username = $_SESSION['username'];

$conn = mysqli_connect("localhost","root","","letsromp");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: ".mysqli_connect_error();
  } 

  $uidresult=mysqli_query($conn,"SELECT uid from user where username='$username' ;");
  $uidrow=mysqli_fetch_assoc($uidresult);
  $uid=$uidrow["uid"];

  $x=0;

  if (isset($_POST["cancle"])) 
  {
     $x=1;
     $_SESSION["bid"]=$_POST["cancle"];

  }

  if (isset($_POST["yes"])) 
  {
     $x=2;
  }

  if (isset($_POST["no"])) 
  {
     header('location:homepage.php?page=bf');
  }
   
  if (isset($_POST["back"])) 
  {
    header('location:homepage.php?page=bf');
  }

switch($x)
{
  case 0:
  $result = mysqli_query($conn,"SELECT * from booking where uid='$uid' ");

 
while($row= $result->fetch_assoc())
{ $fid=$row["fid"];
  $fieldresult=mysqli_query($conn,"SELECT * from field where fid='$fid' ;");
  $fieldrow=mysqli_fetch_assoc($fieldresult);
  
  ?>

<div class="main">
 
                <h2 class="contenttitle"> <?php echo $fieldrow["name"] ;?></h2>
                <?php 
               echo "Game : ".$fieldrow["game"];
               echo "<br>";
               echo "Field Address : ".$fieldrow["address"];
               echo "<br>";
               echo "Field Contact Number  : ".$fieldrow["phno"];
               echo "<br>";
               echo "Number of Fields : ".$row["courts"];
               echo "<br>";
               echo "Number of Hours : ".$row["hours"];
               echo "<br>";
               echo "Date : ".$row["bdate"];
               echo "<br>";
               echo "Time : ".$row["btime"];
               echo "<br>";
               ?>
               <h3><?php echo "Total cost is ".$row["cost"]  ; ?></h2>
                <form action="" method="post">
                  <button class="cancleb" type="submit" name="cancle" value=<?php echo $row["bid"] ?>>Cancle Booking</button>
                </form>

                </div>

                  <?php 
                   
                   }
                   break;
               case 1:
                   ?>
                         <div class="main">
                           <p>Are you sure you want to cancle the booking ?</p>
                           <form action="" method="post">
                           <button type="submit" class="viewplayer" name="yes" value="yes" >Yes</button>
                          <button type="submit" class="cancleb" name="no" value="no" >No</button>
                          </form> 
                         </div>
                   <?php      
                   break;
                case 2:
                    $bid=$_SESSION["bid"];
                    $result=mysqli_query($conn,"DELETE FROM booking WHERE bid = '$bid'   ;");
                    ?>
                    <div class="main">
                      <p>You have successfully cancled the booked field</p>
                      <form action="" method="post">
                        <button type="submit" class="viewplayer" name="back" value="back" >Click to go back</button>
                      </form>
                    </div>
                    <?php
                    break;    

                 }
                   ?>
</body>
</html>