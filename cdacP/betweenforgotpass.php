<?php

 session_start();
$ans=$_POST['answer'];
$_SESSION['email']=$ans;
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'cdac');

$q="select  *from userdata where email='$ans'";
$j=mysqli_query($con,$q);
$l=mysqli_num_rows($j);
echo $_SESSION['email'];

if($l>0)
{
	header('location:chngpass.php');
	
}
else {
	
	  $_SESSION['aa']=1;
$_SESSION['e']="Email does not exist";
	header('location:forgotpass.php');
	die();
}

?>