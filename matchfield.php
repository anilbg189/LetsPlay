<!DOCTYPE html>
<html>
<head>
	<style >
		form {
			border: 3px solid #f1f1f1; 
			width: 670px;
      min-height: 500px;
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
.done{
    float: left;
  background-color: #66cc00;
  padding: 10px;
  width: 80px;
}
.content{
  font-size: 15px;
  margin-top: 30px;
}

.next{
  margin-top: 294px;
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
<form action="" method="post" >
<a class="close" href="homepage.php?page=matchs">&#x2716;</a>
  <div>
    <h2 style="margin-left: 60px">Host a match</h2> 
  </div>
 

<div class="process" align="left">
  <div class="done" >Sport</div>
  <div class="rightarrow">&#8658</div>
   <div class="done" >Date</div>
   <div class="rightarrow">&#8658</div>
    <div class="done" >Time</div>
    <div class="rightarrow">&#8658</div>
     <div class="done" >Field</div>
     <div class="rightarrow">&#8658</div>
      <div class="processcontents" >Confirm</div>
 </div>


  <div align="left" class="container">

    <label class="content" for="matchfield"><b>Select Field : </b></label>
    
    <select class="content" name="matchfield">
    	<?php 
          $conn = mysqli_connect("localhost","root","","letsromp");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: ".mysqli_connect_error();
  }
   $game=$_SESSION["game"];
  $result = mysqli_query($conn,"SELECT * from field where game='$game' ;");
  
  $n=mysqli_num_rows($query);

         while($row= $result->fetch_assoc()) {

       	?>
            <option> <?php echo $row["name"]; ?> </option>
         	<?php 


           }

    	 ?>
    </select>
    <button class="next" type="submit" >Done</button>

 </form>
</body>
</html>