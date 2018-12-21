<!DOCTYPE html>
<html>
<head>
	
	<style>
		
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
			width: 660px;
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

	</style>
</head>
<body>

<div class="up">

</div>

<div class="down">

</div>
<div class="left">

</div>

<div class="righ">

</div>

<div class="inner" align="center">


  <?php 
   

   $x=0;
 
   if (isset($_POST["sportselect"])) {
   $x=1;

   $_SESSION["game"]=$_POST["sportselect"];
  
   	
   }
   if (isset($_POST["matchdate"])) {

   $_SESSION["matchdate"]=$_POST["matchdate"];
  
    $x=2;
   }

   if (isset($_POST["matchtime"])) {
  
   $_SESSION["matchtime"]=$_POST["matchtime"];
   	
   	$x=3;
   }

   if (isset($_POST["matchfield"])) {
   	
   $_SESSION["matchfield"]=$_POST["matchfield"];
   	
   	$x=4;
   }
   if (isset($_POST["matchconfirm"])) {
   	$x=5;
   }

   switch ($x) {
   	case 0:
   		include "matchgame.php";
   		break;
   	case 1:
   		include "matchdate.php";
   		break;
   	case 2:
   		include "matchtime.php";
   		break;
   	case 3:
   		include "matchfield.php";
   		break;
   	case 4:
   		include "matchconfirm.php";
   		break;
   	case 5:
   	    include "matchprocess.php";
   	    break;		
   	default:
   		include "matchgame.php";
   		break;
   }
    
    
   
   ?>
  


</div>
</body>
</html>