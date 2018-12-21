
<!DOCTYPE html>
<html>
<head>
	<title>Matchs</title>
	<style>
	.matchhost{
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

     .matchhost a{
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
     .book{
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
    cursor: pointer;
    text-decoration: none;
     }

     .book:hover{
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
    .details
    {

       box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
       width: 1270px;
       height: 100%;
       margin-left: 200px;
       padding-left: 20px;
      border-radius: 10px;
      color: black;
      font-family: 'Open Sans', sans-serif;
      float: left;
      margin-bottom: 10px;
    }
    .content{
  font-size: 15px;
  margin-top: 30px;
}


</style>
</head>
<body>
 
 <?php 
include "sortsidebar.php" ;

$conn = mysqli_connect("localhost","root","","letsromp");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: ".mysqli_connect_error();
  }

  $fieldsresult=mysqli_query($conn,"SELECT * from field ");
  $x=0;
  $bdate=null;
  $btime=null;
  $hours=null;
  $courts=null;
  $fid=null;

  if (isset($_POST["gameselect"])) 
  { 
    $game=$_POST["gameselect"];
    $x=1;
  }

  if (isset($_POST["book"]))
  { 
    $_SESSION["fid"]=$_POST["book"];
    $x=2;
    
  }

switch ($x) {
  case 0:
         $result=mysqli_query($conn,"SELECT * from field ");

          while($row= $result->fetch_assoc())
          {
            ?>
            <div class="main">
              <form action="bookingprocess.php" method="post" >

                <button align="center" name="booking" class="book" value=<?php echo $row["fid"] ; ?> >Book</button>
              </form>
              
              <h2 class="contenttitle"><?php echo $row["name"] ?></h2>
              <p><?php echo "Game : ".$row["game"]; ?></p>
              <p><?php echo "Address : ".$row["address"]; ?></p>
              <p><?php echo "No Of Courts : ".$row["courts"]; ?></p>
              <p><?php echo "Cost Per Hour : ".$row["costperhour"]; ?></p>
              <p><?php echo "Contact number : ".$row["phno"]; ?></p>
            </div>

            <?php  
          }
    
    break;
  
  case 1:
         $result=mysqli_query($conn,"SELECT * from field where game='$game' ");

          while($row= $result->fetch_assoc())
          {
            ?>
            <div class="main">
              
              <form action="bookingprocess.php" method="post">
                <button align="center" class="book" name="booking"  value=<?php echo $row["fid"] ; ?> >Book</button>
              </form>
              
              <h2 class="contenttitle"><?php echo $row["name"] ?></h2>
              <p><?php echo "Game : ".$row["game"]; ?></p>
              <p><?php echo "Address : ".$row["address"]; ?></p>
              <p><?php echo "No Of Courts : ".$row["courts"]; ?></p>
              <p><?php echo "Cost Per Hour : ".$row["costperhour"]; ?></p>
              <p><?php echo "Contact number : ".$row["phno"]; ?></p>
            </div>
            
             <?php 
             } 
         break; 

   case 2: 
   ?>
      <div class="main">
       <?php
        include "xxx.php" ;
        ?>
      </div>  
      <?php     
 
        }
?>



</body>
</html>