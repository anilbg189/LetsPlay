<?php 
ob_start();
session_start();
if (isset($_SESSION['username'])) {
  
}
else
{
  header('location:index.php');
}
 ?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    Home Page
  </title>

  <style>
    .letsplay{
      background-color: black;
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
    }
    .logout{
      position: absolute;
      background-color:#66cc00;
      border: none;
            cursor: pointer;

    }
    .right{
      position: relative;
      float: right;
      margin-top: 25px;
      margin-right: 80px;

        }

    ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333333;
            position: relative;
        }

        li {
          float: left;
        }

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 16px;
    text-decoration: none;
    
}

li a:hover {
    background-color: #66cc00;
}


.sample{
    margin-top: 165px;
  
       }
 .dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    border-radius: 4px;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}

.up{
      background-color: black;
      opacity: 0.5;
      width: 100%;
      height: 200px;
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
    }

    .down{
      background-color: black;
      opacity: 0.5;
      width: 100%;
      height: 50px;
      position: fixed;
      left: 0;
      right: 0;
      bottom: 0;

    }

    .left{
      background-color: black;
      opacity: 0.5;
      width: 28%;
      height:66.9%;
      position: fixed;
      margin-top:35px;
      
      
      left: 0;
      

    }

    .righ{
      background-color: black;
      opacity: 0.5;
      width: 28%;
      height:66.9%;
      position: fixed;
      margin-top:35px;
      
      
      right: 0;
      

    }



    .inner{
      color: black;
      background-color:white;
      
      border: 1px solid white;
      
      



    }

    form {
      border: 3px solid #f1f1f1; 
      width: 670px;
            background-color:#f1f1f1;
            margin-top: 35px;

       
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
.avail{
  background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 200px;
}
       button:hover {
    opacity: 0.8;
}
    

.process{
  display: inline-block;


}
.processcontents{
  float: left;
  background-color: white;
  padding: 10px;
  width: 80px;
}
.rightarrow{
  padding: 10px;
  float: left;
}
.content{
  font-size: 15px;
  margin-top: 30px;
}

.next{
  margin-top: 100px;
}
     
.close{
  width: 50px;
  float: right;
  padding-top: 6px;
  padding-bottom: 6px;
  padding-right: 8px;
  padding-left: 8px;
  background-color: #f1f1f1;
  color: black;
  text-decoration: none;
  margin-top: -20px;
  
}
.close:hover
{
  background-color: #BCBCBC;
}     

.closec{
  width: 50px;
  float: right;
  padding-top: 6px;
  padding-bottom: 6px;
  padding-right: 8px;
  padding-left: 8px;
  background-color: #f1f1f1;
  color: black;
  text-decoration: none;
  
  
}
.closec:hover
{
  background-color: #BCBCBC;
}     



  </style>

</head>
<body style="font-family: 'Open Sans', sans-serif;">


  <div class="letsplay">
  <img src="letsplay1.jpg" width="400" height="100" alt="letsplay">
  

  <div class="right"  >
    
    <div class="dropdown">
  <button class="dropbtn">
    <?php 
    $conn = mysqli_connect("localhost","root","","letsromp");
    $username=$_SESSION['username'];
    $result=mysqli_query($conn,"SELECT fullname from user where username='$username' ");
    $fullname=mysqli_fetch_assoc($result);
echo 'Hi '.$fullname["fullname"].' &#9661';
 ?></button>
  <div class="dropdown-content">
    <a href='?page=myaccount'>My Account</a>
    <a href="logout.php">Logout</a>
    
  </div>
</div>


   </div>


   <ul>
  <li><a href="?page=home">Home</a></li>
  <li><a href="?page=matchs">Matches</a></li>
  <li><a href="?page=tournment">Tournaments</a></li>
  <li><a href="?page=booking">Booking</a></li>
  <li><a href="?page=couching">Coaching</a></li>
</ul>
</div>

<div class="sample">
 
<div class="up">

</div>

<div class="down">

</div>
<div class="left">

</div>

<div class="righ">

</div>
</div>

<div class="inner" align="center">
<form action="" method="post" >


<?php 

 $conn = mysqli_connect("localhost","root","","letsromp");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: ".mysqli_connect_error();
  }
    if (isset($_POST["booking"])) {
      $_SESSION["booking"]=$_POST["booking"];
    }
   
   $fid=$_SESSION["booking"];
   $fieldresult=mysqli_query($conn,"SELECT * from field where fid='$fid' ;");
   $fieldrow=mysqli_fetch_assoc($fieldresult);
   $fieldname=$fieldrow["name"];


$x=0;
if (isset($_POST["done"]) && isset($_POST["bookingcourts"]))
 {
   $x=1;
 }
 if (isset($_POST["confirm"])) {
   $x=2;
 }
 if (isset($_POST["back"])) {
   header('location:homepage.php?page=booking');
 }
 
    switch($x)
    {
      case 0:
  
 ?>


  <div>
    <a class="close" href="homepage.php?page=booking">&#x2716;</a>
    <?php 
   
   $maxcourts=$fieldrow["courts"];
   ?>
    <h2 style="margin-left: 70px"><?php echo $fieldname ?></h2> 
   
  </div>
 
 <div align="left" class="container">
 
    <label class="content" for="bookingdate" ><b>Select a Date : </b></label>
    <input type="date" class="content" required  placeholder="Enter Booking Date" name="bookingdate" value=<?php if (isset($_POST["bookingdate"])) {
      echo $_POST["bookingdate"]; } ?>  ><br>
    <label class="content" for="bookingtime"><b>Select a Time : </b></label>
    <input type="time" class="content" required placeholder="Enter Booking Time" name="bookingtime" value=<?php if (isset($_POST["bookingtime"])) {
      echo $_POST["bookingtime"]; } ?> required> <br>
    <label class="content" for="bookinghours"><b>Number of Hours : </b></label>
    <input type="number" class="content" required placeholder="Number of Hours" name="bookinghours" value=<?php if (isset($_POST["bookinghours"])) {
      echo $_POST["bookinghours"]; } ?>  required>
         
    <button type="submit" class="avail" name="available" >Check number of courts available</button><br>

    <label class="content" for="bookingcourt"><b>Number of courts : </b></label>
    
    <select class="content" name="bookingcourts" >
      <?php 
         
   $_SESSION["date"]=$_POST["bookingdate"];
   $_SESSION["time"]=$_POST["bookingtime"];
   $_SESSION["hours"]=$_POST["bookinghours"];
   $date=$_SESSION["date"];
  $max=$maxcourts;

  $hours=$_SESSION["hours"];
  $t=date("h:i:sa",strtotime($_SESSION["time"]));
  $min=999;
  $failed=0;
  
for ($i=0; $i<$hours ; $i++)
    { 
        $b=strtotime($_SESSION["time"].'+'.$i.' hour'); 
        $result = mysqli_query($conn,"SELECT * from booking where bdate='$date' and fid='$fid' ");
        $count=0;

        while($row= $result->fetch_assoc()) 
         { 

            $time=$row["btime"];
         $n=$row["hours"];
         
         $time1=date("h:i:sa",strtotime($time));
         $a=strtotime($time);

         $time2=date("h:i:sa",strtotime($time.'+'.$n.' hour'));
         $c=strtotime($time.'+'.$n.' hour');

           if($a<=$b ) 
            {  
              if($b<$c) 
              {
                $cort=$row["courts"];
                $count=$count+$cort;
              }
               
            } 


         }

         $avail=$max-$count;
          if ($avail<$min)
           {
            if ($avail>=0) 
            {
              $min=$avail;
            }
           
          }
  
      }         
         
          if($min>0 && isset($_POST["available"]) && $hours>0)
          { 
             for ($i=1; $i <=$min ; $i++) 
              { 
                ?>

                 <option> <?php echo $i; ?> </option>
              <?php
              }
          }
      else
      {
         $failed=1;
      }

       ?>
       
    </select>
    <?php 
    if ($failed==1 && isset($_POST["available"])) 
    {
      echo "Sorry no courts available"; 
      $_SESSION['nocourts']="nocourts";
     } 


    
     ?>
    
    <button type="submit" style="margin-top: 135px;"  name="done">Done</button>
    
    

   <?php 
   break;

case 1:
     $_SESSION["date"]=$_POST["bookingdate"];
     $_SESSION["time"]=$_POST["bookingtime"];
     $_SESSION["hours"]=$_POST["bookinghours"];
     $_SESSION["courts"]=$_POST["bookingcourts"];
     $costperhour=$fieldrow["costperhour"];

     $cost= $_SESSION["hours"]*$costperhour*$_SESSION["courts"];
    ?>
    <a class="closec" href="homepage.php?page=booking">&#x2716;</a>
    <h2 style="margin-left: 70px ;"><?php echo $fieldname ?></h2>
    <h2>Confirmation</h2>
    <div align="left">
    <p>Game : <?php echo $fieldrow["game"]; ?></p>
    <p>Date : <?php echo $_POST["bookingdate"]; ?></p>
    <p>Time : <?php echo $_POST["bookingtime"]; ?></p>
    <p>Number of Hours : <?php echo $_POST["bookinghours"]; ?></p>
    <p>Number Of Courts : <?php echo $_POST["bookingcourts"] ?></p>
    <p>Cost per Hour : <?php echo $fieldrow["costperhour"]; ?></p>
    <p>Address : <?php echo $fieldrow["address"]; ?></p>
    <h2>Total Cost is <?php echo $cost; ?></h2>
    <button type="submit" style="margin-top: 49px;" name="confirm">Confirm</button>
    </div>


   <?php 
   break;

  case 2: 
       $username=$_SESSION["username"];
       $fid=$_SESSION["booking"];
       $time=$_SESSION["time"];
       $date=$_SESSION["date"];
       $hours=$_SESSION["hours"];
       $courts=$_SESSION["courts"];
       $costperhour=$fieldrow["costperhour"];
       $cost= $hours*$costperhour*$courts;

       $uidresult=mysqli_query($conn," SELECT uid from user where username='$username' ;");
       $uidrow=mysqli_fetch_assoc($uidresult);
       $uid=$uidrow["uid"];
       $result=mysqli_query($conn,"INSERT into booking(uid,fid,bdate,btime,hours,courts,cost) values('$uid','$fid','$date','$time','$hours','$courts','$cost' ) ;");
    ?>
       <a class="closec" href="homepage.php?page=booking">&#x2716;</a>
       <h2 style="margin-left: 70px ; "><?php echo $fieldname ?></h2>
        <p>Your Booking is successfull</p> 
        <button type="submit" style="margin-top: 353px;" name="back">Click to go back</button>     
    <?php  
         break;
   }

    ?>








</form>
</div>

</body>
</html>