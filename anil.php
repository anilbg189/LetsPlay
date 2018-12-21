<?php 
if (!sset($_GET["page"]) ) {
	
	include "home.php";
}
else

{
	switch ($_GET["page"]) {
	case 'home': include "home.php";
		         break;
	case 'matchs': include "matchs.php";
		         break;
	case 'tournments': include "tournemnts.php";
		         break;
	case 'couching': include "couching.php";
		         break;	         	         
	default: include "home.php";
		     break;
}
}

 ?>


 <div class="letsplay">
	<img src="letsplay1.jpg" width="400" height="100" alt="letsplay">
	<div class="right"  >
<?php 
echo 'Hi '.$_SESSION['username'];
 ?>
<div>
 <button class="logout" onclick="location.href='logout.php';" > logout</button>
 </div>
   </div>
   <ul>
  <li><a href="?page=home">Home</a></li>
  <li><a href="?page=matchs">Matchs</a></li>
  <li><a href="?page=tournment">Tournments</a></li>
  <li><a href="?page=couching">Couching</a></li>
</ul>
</div>