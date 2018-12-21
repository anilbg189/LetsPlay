<?php 
ob_start();
 ?>
<!DOCTYPE html>
<html>
<head>
     <style>
     
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
     include "sidebar.php";
     ?>
     <h2 align="center" >Hosted tournments</h2>

     <?php 
     $conn = mysqli_connect("localhost","root","","letsromp");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: ".mysqli_connect_error();
  }  
      $username=$_SESSION["username"];
      $queryuid = mysqli_query($conn,"SELECT uid from user where username='$username' ");
      $uidrow=mysqli_fetch_assoc($queryuid);
      $uid=$uidrow["uid"];
      

    $x=0;

      if (isset($_POST["viewplayer"])) 
      { $_SESSION["tid"]=$_POST["viewplayer"];
        $x=1;
      }

      if (isset($_POST["cancle"])) 
      { $_SESSION["tid"]=$_POST["cancle"];
        $x=2;
      }

      if (isset($_POST["yes"])) 
      {
         $x=3;
      }

      if (isset($_POST["no"])) 
      {
         header('location:homepage.php?page=ht');
      }
      if (isset($_POST["back"])) 
      {
         header('location:homepage.php?page=ht');
      }



          switch($x)
          {
          
           case 0:
          $result = mysqli_query($conn,"SELECT * from tournmenttable where uid='$uid' ");

          

          while($row= $result->fetch_assoc())
          {
               ?>
               
               <div class="main">
               <h2 class="contenttitle"><?php echo $row["game"]." tournment" ; ?></h2>
               <?php 

               $fid=$row["fid"];
               $addressquery = mysqli_query($conn,"SELECT address from field where fid='$fid' ;");
               $rowaddress= mysqli_fetch_assoc($addressquery);
               $address=$rowaddress["address"];

               $fieldquery = mysqli_query($conn,"SELECT name from field where fid='$fid' ;");
               $rowfield= mysqli_fetch_assoc($fieldquery);
               $field=$rowfield["name"];

               $tid=$row["tid"];
               $countquery = mysqli_query($conn,"SELECT * from tournmentsenrolled where tid='$tid' ;");
               $count = mysqli_num_rows($countquery);
               $_SESSION["tid"]=$tid;
               
               echo "Field : ".$field;
               echo "<br>"; 
               echo "Location : ".$address;
               echo "<br>";
               echo "Date : ".$row["tdate"];
               echo "<br>";
               echo "Time : ".$row["ttime"];
               echo "<br>";
               echo "Entry Fee : ".$row["entryfee"];
               echo "<br>";
               echo "1st Prize : ".$row["prize1"];
               echo "<br>";
               echo "2nd Prize : ".$row["prize2"];
               echo "<br>";
               echo "Ongoing players : ".$count;
              ?>
              <form action="" method="post">
                <button type="submit" class="viewplayer" name="viewplayer" value=<?php echo $tid ;?> >View Players</button>
                <button type="submit" class="cancleb" name="cancle" value=<?php echo $tid ;?> >Cancle this match</button>
              </form>
              
               
               </div>


                <?php  
          }

          break;
          case 1:
           
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
          case 2:
                   ?>

                   <div class="main">
                     <p>Are you sure you want to cancle this hosted tournment of yours ?</p>
                     <form action="" method="post">
                       <button type="submit" class="viewplayer" name="yes" value="yes" >Yes</button>
                       <button type="submit" class="cancleb" name="no" >No</button>
                     </form>
                   </div>

                   <?php 
                  break;

          case 3:
                  $tid=$_SESSION["tid"];
                  $result=mysqli_query($conn,"DELETE FROM tournmenttable WHERE tid = '$tid'  ;");
          ?>
                  <div class="main">
                    <p>You have successfully cancled the selected hosted match of yours</p>
                    <form action="" method="post">
                    <button type="submit" class="viewplayer" name="back" >Click to go back</button>
                    </form>
                  </div>

          <?php          

                  break;

          }

          ?>
           
     
     
</body>
</html>

