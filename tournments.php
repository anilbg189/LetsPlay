
<!DOCTYPE html>
<html>
<head>
	<title>Tournments</title>
	<style>
	.tournmenthost{
                  position: fixed;
                  right: 0;
                  background-color: #66cc00;
                  color: white;
                  padding:20px;
                  border: 1px solid black;
                  border-radius: 5px;
                  margin-top: 40px; 
                  
              }
     .host{
     	float: right;
     } 

     .tournmenthost a{
     	display: block;
     	background-color: #66cc00;
     	text-decoration: none;
     	color: white;

     }
        
     body{
      background-color: #F2F4F4;
          color: black;
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
      float: left;
      margin-bottom: 10px;
    

     }
     h2{
          padding-top:5px;
     }
     .join{
      background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    border-radius: 4px;
    float: right;
    margin-top: 70px;
    margin-right: 100px;
    width: 120px;


     }

     .join:hover{
      transform: scale(1.2);
      transition: 0.4s;
     }
     .button{
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    border-radius: 4px;
    margin-bottom: 20px;

     }
     .button:hover{
      transform: scale(1.2);
      transition: 0.4s;
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


</style>
</head>
<body>
 
 <?php 
include "sortsidebar.php" ;
?>
<h2 align="center" >Available Tournments</h2>
<div class="tournmenthost">
<a href="?page=hostatournment">Host a tournment</a>
</div>

<?php 
$x=0;
$conn = mysqli_connect("localhost","root","","letsromp");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: ".mysqli_connect_error();
  }

  if (isset($_POST["gameselect"])) 
  {
    $x=1;
  }
  if (isset($_POST["joinrequest"])) 
  {
    $x=2;
  }
  if (isset($_POST["tournmentjoinconfirm"])) {
    $x=3;
  }

switch ($x) 
{
  case 0:

   $result = mysqli_query($conn,"SELECT * from tournmenttable;");
   while($row= $result->fetch_assoc())
   {
   $uid=$row["uid"];
   $userresult=mysqli_query($conn,"SELECT username,fullname from user where uid='$uid' ;");
   $userrow=mysqli_fetch_assoc($userresult);
   $user=$userrow["username"];
   $fullname=$userrow["fullname"];
   
   $fid=$row["fid"];
   $fieldresult=mysqli_query($conn,"SELECT name from field where fid='$fid' ;");
   $fieldrow=mysqli_fetch_assoc($fieldresult);
   $field=$fieldrow["name"];

    $addressresult=mysqli_query($conn,"SELECT address from field where fid='$fid' ;");
   $addressrow=mysqli_fetch_assoc($addressresult);
   $address=$addressrow["address"];

   $tid=$row["tid"];
   $countquery = mysqli_query($conn,"SELECT * from tournmentsenrolled where tid='$tid' ;");
   $count = mysqli_num_rows($countquery);

   ?>
   <div class="main">
    <form action="" method="post">
     <button class="join" type="submit" name="joinrequest" value=<?php echo $row["tid"] ?>>Join</button>
   </form>
   <h2 class="contenttitle"><?php echo $row["game"]." tournment" ; ?></h2>
   <p>Hosted by <?php echo $fullname ?></p>
   <p><?php echo "Date : ".$row["tdate"] ?></p>
   <p><?php echo "Time : ".$row["ttime"] ?></p>  
   <p><?php echo "Field : ".$field ?></p> 
   <p><?php echo "Address : ".$address ?></p> 
   <p><?php echo "Entry Fee : ".$row["entryfee"] ?></p>
   <p><?php echo "1st Prize : ".$row["prize1"] ?></p>
   <p><?php echo "2nd Prize : ".$row["prize2"] ?></p>
   <p><?php echo "On Going Players : ".$count ?></p>


   
   </div>
<?php  
    }
   break;


case 1:

 $game=$_POST["gameselect"];
 $result = mysqli_query($conn,"SELECT * from tournmenttable where game='$game' ;");

while($row= $result->fetch_assoc())
{ $uid=$row["uid"];
  $userresult=mysqli_query($conn,"SELECT username from user where uid='$uid' ;");
  $userrow=mysqli_fetch_assoc($userresult);
  $user=$userrow["username"];
  $fid=$row["fid"];
   $fieldresult=mysqli_query($conn,"SELECT name from field where fid='$fid' ;");
   $fieldrow=mysqli_fetch_assoc($fieldresult);
   $field=$fieldrow["name"];

   $addressresult=mysqli_query($conn,"SELECT address from field where fid='$fid' ;");
   $addressrow=mysqli_fetch_assoc($addressresult);
   $address=$addressrow["address"];

   $tid=$row["tid"];
   $countquery = mysqli_query($conn,"SELECT * from tournmentsenrolled where tid='$tid' ;");
   $count = mysqli_num_rows($countquery);

 ?>

<div class="main">
  <form action="" method="post">
     <button class="join" type="submit" name="joinrequest" value=<?php echo $row["tid"] ?>>Join</button>
   </form>
<h2 class="contenttitle"><?php echo $game." tournment" ; ?></h2>
<p>Hosted by <?php echo $user ?></p>
<p><?php echo "Date : ".$row["tdate"] ?></p>
<p><?php echo "Time : ".$row["ttime"] ?></p>
<p><?php echo "Field : ".$field ?></p> 
<p><?php echo "Address : ".$address ?></p>  
 <p><?php echo "Entry Fee : ".$row["entryfee"] ?></p>
   <p><?php echo "1st Prize : ".$row["prize1"] ?></p>
   <p><?php echo "2nd Prize : ".$row["prize2"] ?></p>
   <p><?php echo "On Going Players : ".$count ?></p>
</div>


 <?php 
}
 break;


case 2:
 
  $tid=$_POST["joinrequest"];
  $tournmentresult=mysqli_query($conn,"SELECT * from tournmenttable where tid='$tid' ;");
  $row=mysqli_fetch_assoc($tournmentresult);
  $uid=$row["uid"];
  $userresult=mysqli_query($conn,"SELECT username from user where uid='$uid' ;");
  $userrow=mysqli_fetch_assoc($userresult);
  $user=$userrow["username"];
  $fid=$row["fid"];
   $fieldresult=mysqli_query($conn,"SELECT name from field where fid='$fid' ;");
   $fieldrow=mysqli_fetch_assoc($fieldresult);
   $field=$fieldrow["name"];

    $tid=$row["tid"];
   $countquery = mysqli_query($conn,"SELECT * from tournmentsenrolled where tid='$tid' ;");
   $count = mysqli_num_rows($countquery);
  ?>
  
   <div class="main">
    <h2>Confirm join</h2>
     <p>Hosted by <?php echo $user ?></p>
     <p><?php echo "Date : ".$row["tdate"] ;?></p>
     <p><?php echo "Time : ".$row["ttime"] ;?></p>
     <p><?php echo "Field : ".$field ;?></p>
      <p><?php echo "Entry Fee : ".$row["entryfee"] ?></p>
   <p><?php echo "1st Prize : ".$row["prize1"] ?></p>
   <p><?php echo "2nd Prize : ".$row["prize2"] ?></p>
   <p><?php echo "On Going Players : ".$count ?></p>
     <form action="" method="post">
       <button class="button" value=<?php echo $tid; ?> type="submit" name="tournmentjoinconfirm">Confirm</button>
     </form>
   </div>

  <?php 
  break;

  case 3:
  $tid=$_POST["tournmentjoinconfirm"];
  $username=$_SESSION["username"];
  $uidresult=mysqli_query($conn,"SELECT uid from user where username='$username' ;");
  $uidrow=mysqli_fetch_assoc($uidresult);
  $uid=$uidrow["uid"];

  if(mysqli_query($conn," INSERT into tournmentsenrolled(uid,tid) values ('$uid','$tid');"))
  {
   
 ?>
 <div class="main">
 <form action="homepage.php?page=tournment" method="post" >

  <div>
    <h2 class="contenttitle">Succesfull !</h2> 
  </div>
 
  <div align="left" class="container">
  
<h4>You have succesfully joined the selected tournment</h4>

    <button type="submit" class="button" >Click to go back</button>

    </form>
    </div>
<?php 
}
else
{
  ?>

  <div class="main">
  <h2 class="contenttitle">ERROR !</h2>
  <h4 class="container"><?php  echo  mysqli_error($conn); ?></h4>
  <form action="homepage.php?page=matchs" method="post">
  <button type="submit" class="button"  >Click to go back</button>
  </form>
</div>

<?php 
}
    break;
   }

     ?>

</body>
</html>