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
   if (isset($_POST["tournmentdate"])) {

   $_SESSION["tournmentdate"]=$_POST["tournmentdate"];
  
    $x=2;
   }

   if (isset($_POST["tournmenttime"])) {
  
   $_SESSION["tournmenttime"]=$_POST["tournmenttime"];
    
    $x=3;
   }


   if (isset($_POST["tournmentfield"])) {
    
   $_SESSION["tournmentfield"]=$_POST["tournmentfield"];
    
    $x=4;
   }

   if (isset($_POST["tournmentprize"])) {
    
   $_SESSION["tournmententryfee"]=$_POST["tournmententryfee"];
   $_SESSION["tournmentprize1"]=$_POST["tournmentprize1"];
   $_SESSION["tournmentprize2"]=$_POST["tournmentprize2"];
    $x=5;
   }

   if (isset($_POST["tournmentconfirm"])) {
    $x=6;
   }

   switch ($x) {
    case 0:
      include "tournmentgame.php";
      break;
    case 1:
      include "tournmentdate.php";
      break;
    case 2:
      include "tournmenttime.php";
      break;
    case 3:
      include "tournmentfield.php";
      break;
    case 4:
      include "tournmentprize.php";
      break;  
    case 5:
      include "tournmentconfirm.php";
      break;
    case 6:
        include "tournmentprocess.php";
        break;    
    default:
      include "tournmentgame.php";
      break;
   }
    
    
   
   ?>
  


</div>
</body>
</html>