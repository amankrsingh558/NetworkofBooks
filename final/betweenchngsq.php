<?php
session_start();
$pass=$_POST['password'];

$email=$_SESSION['email'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'cdac');

$q="select  ans from userdata where email='$email' && password='$pass'";
$j=mysqli_query($con,$q);
   $_SESSION['dd']++;
   $l=mysqli_num_rows($j);
   echo $l;
   
if($l>0)
{
	header('location:VALIDATEchngpsq.php');
	
}
else {
	
	echo "<script> alert('your Password is incorrect');
	window.location.href='chngSQ.php'
	</script>";
	
	die();
}

?>