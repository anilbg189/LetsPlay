<?php 
 
 $conn = mysqli_connect("localhost","root","","letsromp");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: ".mysqli_connect_error();
  }

    $game=$_SESSION["game"];
    $tournmentdate=$_SESSION["tournmentdate"];
    $tournmenttime=$_SESSION["tournmenttime"];
    $tournmentfield=$_SESSION["tournmentfield"];
    $tournmententryfee=$_SESSION["tournmententryfee"];
    $tournmentprize1=$_SESSION["tournmentprize1"];
    $tournmentprize2=$_SESSION["tournmentprize2"];

    $username=$_SESSION["username"];

    $queryuid = mysqli_query($conn,"SELECT uid from user where username='$username' ");
    $uidrow=mysqli_fetch_assoc($queryuid);
    $uid=$uidrow["uid"];

    $queryfid = mysqli_query($conn,"SELECT fid from field where name='$tournmentfield' ");
    $fidrow=mysqli_fetch_assoc($queryfid);
    $fid=$fidrow["fid"];


  $query = mysqli_query($conn,"INSERT INTO tournmenttable(uid,fid,game,tdate,ttime,entryfee,prize1,prize2) VALUES( '$uid','$fid','$game','$tournmentdate','$tournmenttime','$tournmententryfee','$tournmentprize1','$tournmentprize2') ; " );
?>
<!DOCTYPE html>
<html>
<head>
	<style>
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
.done{
    float: left;
  background-color: #66cc00;
  padding: 10px;
  width: 80px;
}
.rightarrow{
	padding: 10px;
	float: left;
}

p{
  font-size: 25px;

}
span{
  font-size: 25px;
  font-weight: bold;
  padding-left: 30px;
}

.next{
  margin-top: 346px;
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
}
.close:hover
{
  background-color: #BCBCBC;
}
	</style>
</head>
<body>
<form action="homepage.php?page=tournment" method="post" >
<a class="close" href="homepage.php?page=tournment">&#x2716;</a>

  <div>
    <h2 style="margin-left: 70px">Host a tournament</h2> 
  </div>
 
  <div align="left" class="container">
  
<h4>Your tournament has been hosted succesfully</h4>


    <button type="submit" class="next" >Click to go back</button>

    </form>

   
</body>
</html>