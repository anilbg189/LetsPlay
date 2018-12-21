<?php 
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
			z-index: 1;
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
  <li><a href="?page=tournment">tournaments</a></li>
  <li><a href="?page=booking">Booking</a></li>
  
</ul>
</div>

<div class="sample">
	
	<?php 
if (!isset($_GET["page"]) ) {
	
	include "home.php";
}
else

{
	switch ($_GET["page"]) 
	{
	case 'home': include "home.php";
		         break;
	case 'matchs': include "matchs.php";
		         break;
	case 'tournment': include "tournments.php";
		         break;
	case 'booking': include "booking.php";
		         break;	         
	case 'couching': include "couching.php";
		         break;
	case 'myaccount':include "accountdetails.php";
	             break;
    case 'ad':include "accountdetails.php";
	             break;
	case 'hm':include "hostedmatchs.php";
	             break;
	case 'ht':include "hostedtournments.php";
	             break;   
	case 'hostamatch' : include "matchhost.php";
	             break;      
	case 'jm' : include "joinedmatchs.php";
	             break;    
	case 'jt' : include "joinedtournments.php";
	             break;
	case 'bf' : include "bookedfields.php";
	             break ;              
	case 'hostatournment'  : include "tournmenthost.php";
	             break;
	case 'bookingprocess' : include "bookingprocess.php";   
	             break; 

	           	         	         	         
	default: include "home.php";
		     break;
    }
}

 ?>
 </div>
 
 

</body>
</html>