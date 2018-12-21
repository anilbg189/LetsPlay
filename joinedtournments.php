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
      .playersmain{
      background-color: #333333;
       box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
       width: 400px;
       height: 100%;
       margin-left: 20px;
      padding-left: 20px;
      float: left;
      margin-top: 20px;
      border-radius: 10px;
       color: white;
       font-family: 'Open Sans', sans-serif;
       padding-bottom: 10px;
     }

</style>
</head>
<body>
	<?php 
	include "sidebar.php";
    ?>
	
<h2 align="center">Tournments Joined</h2>

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

  if (isset($_POST["unjoin"])) 
    { 
      $_SESSION["tid"]=$_POST["unjoin"];
      $x=1;
    }

    if (isset($_POST["yes"])) 
    { 
      
      $x=2;
    }

    if (isset($_POST["no"])) 
    { 
  
     header('location:homepage.php?page=jt');
    }

    if (isset($_POST["back"])) 
    { 
  
     header('location:homepage.php?page=jt');
    }

     if (isset($_POST["viewplayer"])) 
      { $_SESSION["tid"]=$_POST["viewplayer"];
        $x=3;
      }

      switch($x)
      {
        case 0:

  $tidresult = mysqli_query($conn,"SELECT tid from tournmentsenrolled where uid='$uid' ");
 
while($tidrow= $tidresult->fetch_assoc())
{ $tid=$tidrow["tid"];
  $tournmentresult=mysqli_query($conn,"SELECT * from tournmenttable where tid='$tid' ;");
  $tournmentrow=mysqli_fetch_assoc($tournmentresult);
  
  ?>

<div class="main">
  <?php  
               $game=$tournmentrow["game"];

               $countquery = mysqli_query($conn,"SELECT * from tournmentsenrolled where tid='$tid' ;");
               $count = mysqli_num_rows($countquery);
               $hostuid=$tournmentrow["uid"];

               $userresult=mysqli_query($conn,"SELECT * from user where uid='$hostuid' ;");
               $userrow=mysqli_fetch_assoc($userresult);
               $user=$userrow["fullname"];
               $phno=$userrow["phno"];
               $email=$userrow["email"];
               
               $fid=$tournmentrow["fid"];
                
               $fieldquery = mysqli_query($conn,"SELECT name from field where fid='$fid' ;");
               $rowfield= mysqli_fetch_assoc($fieldquery);
               $field=$rowfield["name"];

               $addressquery = mysqli_query($conn,"SELECT address from field where fid='$fid' ;");
               $rowaddress= mysqli_fetch_assoc($addressquery);
               $address=$rowaddress["address"];

                ?>
                <h2 class="contenttitle"> <?php echo $game." tournment" ?></h2>
                <?php 
               echo "Hosted by : ".$user;
               echo "<br>";
               echo "Host Contact number : ".$phno;
               echo "<br>";
               echo "Hosted email  : ".$email;
               echo "<br>";
               echo "Field : ".$field;
               echo "<br>";
               echo "Location : ".$address;
               echo "<br>";
               echo "Date : ".$tournmentrow["tdate"];
               echo "<br>";
               echo "Time : ".$tournmentrow["ttime"];
               echo "<br>";
               echo "Entry Fee : ".$tournmentrow["entryfee"];
               echo "<br>";
               echo "1st Prize : ".$tournmentrow["prize1"];
               echo "<br>";
               echo "2nd Prize : ".$tournmentrow["prize2"];
               echo "<br>";
               echo "Ongoing players : ".$count;

               ?>
                <form action="" method="post">
                  <button type="submit" class="viewplayer" name="viewplayer" value=<?php echo $tid ;?> >View Players</button>
                  <button type="submit" class="cancleb" name="unjoin" value=<?php echo $tid ;?> >Unjoin this tournment</button>
                </form>
                </div>
               </div>

              <?php 
              }
                 break;
            case 1:
                    ?>
                  <div class="main">
                    <p> Are you sure you want to unjoin this tournment </p>
                    <form action="" method="post">
                    <button type="submit" class="viewplayer" name="yes" value="yes" >Yes</button>
                    <button type="submit" class="cancleb" name="no" value="no" >No</button>
                    </form> 
                  </div>
                  
                  <?php 
                  
                  break;
            case 2:
                  $tid=$_SESSION["tid"];
                    $result=mysqli_query($conn,"DELETE FROM tournmentsenrolled WHERE tid = '$tid' and uid='$uid'  ;");
                    ?>
                    <div class="main">
                      <p>You have successfully unjoined the selected match</p>
                      <form action="" method="post">
                        <button type="submit" class="viewplayer" name="back" value="back" >Click to go back</button>
                      </form>
                    </div>
                    <?php
                    break; 
            case 3:
                    $tid=$_POST["viewplayer"] ;
              $uidresult = mysqli_query($conn,"SELECT uid from tournmentsenrolled where tid='$tid' ;");
?>
<div style="margin-left: 190px">

  <?php  

while($uidrow= $uidresult->fetch_assoc())
{
  $uid=$uidrow["uid"];
  $userresult=mysqli_query($conn," SELECT * from user where uid='$uid' ;");
  $userrow=mysqli_fetch_assoc($userresult);
  
  
  ?>
  
  <div class="playersmain" >
    <h2 class="contenttitle"><?php echo $userrow["fullname"] ?></h2>
    <?php  
    
  echo "Date of birth :  ".$userrow["dob"];
  echo "<br>";
  echo "Gender  : ".$userrow["gender"];
  echo "<br>";
  echo "Email  : ".$userrow["email"];
  echo "<br>";
  echo "Contact Number  : ".$userrow["phno"];  
  ?>
  </div>
  
<?php 
} 

?>
</div>
<?php  

          break;
          }        
              ?>
</body>
</html>