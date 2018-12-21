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
.content{
  font-size: 15px;
  padding-top: 30px;
  margin-left: 10px;
}

.next{
  margin-top: 99px;
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
    <h2 style="margin-left: 70px">Host a tournment</h2> 
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
      <div class="processcontents" >Confirm</div>
 </div>

  <div align="left" class="container">
    <br>
    <label class="content" for="entryfee"><b>Enter the entry fee</b></label>
    <input type="number" class="content" placeholder="Enter the entry fee" name="tournmententryfee" ><br><br>
    <label class="content" for="prize1"><b>Enter 1st prize</b></label>
    <input type="text" class="content" placeholder="Enter 1st prize" name="tournmentprize1" >
    <label class="content" for="prize2"><b>Select 2nd prize</b></label>
    <input type="text" class="content" placeholder="Enter 2nd prize" name="tournmentprize2" >

    <button type="submit" class="next" value="tournmentprize" name="tournmentprize" >Done</button>

    </form>

   
</body>
</html>