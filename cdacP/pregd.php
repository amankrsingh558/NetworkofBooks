<?php
  session_start();
$_SESSION['p']='b';
if( $_SESSION['p']=='a') 
	echo "hello";
else
	echo "bye";
	

?>
<form action="gd.php" method="post">
  <input type="text" name="e" placeholder="Enter your email">
  
  <input type="submit" >
  </form>