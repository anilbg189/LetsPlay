<!DOCTYPE html>
<html>
<head>
  <style>
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
  width: 60px;
}
.done{
    float: left;
  background-color: #66cc00;
  padding: 10px;
  width: 60px;
}
.rightarrow{
  padding: 10px;
  float: left;
}

p{
  font-size: 20px;

}
span{
  font-size: 20px;
  font-weight: bold;
  padding-left: 30px;
}

.next{
  margin-top: 142px;
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
<a class="close" href="homepage.php?page=tournment">&#x2716;</a>

  <div>
    <h2 style="margin-left: 70px">Host a tournament</h2> 
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
     <div class="done" >Prize</div>
      <div class="rightarrow">&#8658</div>
      <div class="done" >Confirm</div>
 </div>

  <div align="left" class="container">
  

   <?php 

    $game=$_SESSION["game"];
    $tournmentdate=$_SESSION["tournmentdate"];
    $tournmenttime=$_SESSION["tournmenttime"];
    $tournmentfield=$_SESSION["tournmentfield"];
    $tournmententryfee=$_SESSION["tournmententryfee"];
    $tournmentprize1=$_SESSION["tournmentprize1"];
    $tournmentprize2=$_SESSION["tournmentprize2"];

    $_POST["tournmentconfirm"]="done";

    ?>
<p>
        Game:           <span style="padding-left: 90px">  <?php echo $game ?></span> <br>
        tournment Date:      <span><?php echo $tournmentdate ?></span><br>
        tournment Time:    <span>  <?php echo $tournmenttime ?></span> <br>
        tournment Field:      <span><?php echo $tournmentfield ?></span><br>
        tournment Entry Fee:      <span><?php echo $tournmententryfee ?></span><br>
        tournment 1st Prize:      <span><?php echo $tournmentprize1 ?></span><br>
        tournment 2nd Prize:      <span><?php echo $tournmentprize2 ?></span><br>
    </p>

    <button class="next" type="submit" value="done" name="tournmentconfirm">Done</button>


    </form>

   
</body>
</html>