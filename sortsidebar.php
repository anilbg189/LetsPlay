<!DOCTYPE html>
<html>
<head>
	<style >
		
		.sidebar{
		width: 200px;
		height: 100%;
		background-color: black;
		position: fixed;
		margin-top: -12px;
		left: 0;

}


.sidebar button:hover{
	background-color: #66cc00;
}

.sideoptions {
    background-color: #333333;
    color: white;
    width: 200px;
    border: 3px solid black;
    padding: 12px 16px;
    position: relative;

}

.dropdown {
    position: relative;
    display: inline-block;
}

.options {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    position: absolute;
    z-index: 1;
    margin-left: 200px;
    top: 0;
    
}

.options form button {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    background-color: #f1f1f1;
    border: none;
    width: 160px;
  
}

.options form button:hover {background-color: #ddd;}

.dropdown:hover .options {display: block;}



	</style>


</head>
<body>
<div class="sidebar">
	 
     <div class="dropdown">
  <button class="sideoptions" style="margin-top: 3px">Game</button>
  <div class="options" >
   
    <form action="" method="post" >
    	<button type="submit" value="Badminton" name="gameselect">Badminton</button>
    	<button type="submit" value="Cricket" name="gameselect">Cricket</button>
        <button type="submit" value="Football" name="gameselect">Football</button>
        <button type="submit" value="Tennis" name="gameselect">Tennis</button>
        <button type="submit" value="Table Tennis" name="gameselect">Table Tennis</button>
    </form>
    
  </div>
   
</div>

    
  </div>
</body>
</html>