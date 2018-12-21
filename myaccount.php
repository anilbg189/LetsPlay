<!DOCTYPE html>
<html>
<head>
	<title>My Account</title>

<style>
	
	.sidebar{
		width: 200px;
		height: 100%;
		background-color: black;
		position: fixed;
		margin-top: -12px;
		left: 0;

}

	

	.sidebar a {
    color: white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    background-color: #333333;
    border: 3px solid black;
    margin-left: -3px;


}

.sidebar a:hover{
	background-color: #66cc00;
}

.maincontent{
	margin-left: 200px;
}



</style>

</head>
<body>
	 
 
<div class="sidebar">
	 
     <a href="?page=ad" style="margin-top: 3px;">Account Details</a>
     <a href="?page=hm">Hosted Matchs</a>
     <a href="?page=ht">Hosted Tournment</a>
     <a href=">page=jm">Joined Matchs</a>
     <a href=">page=bf">Fields Booked</a>
    
  </div>
	
<div class="maincontent">
	<?php
	include "accountdetails.php"; 
	 ?>

</div>

</body>
</html>