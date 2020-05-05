<?php
session_start();
$seq=$_POST['seq'];
$ans=$_POST['answer'];


$email=$_SESSION['email'];

$_SESSION['ee']="Sorry , We couldn't confirm it's YOU"; 
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'cdac');

$q="select  *from userdata where email='$email' && seq='$seq' && ans='$ans'";
$j=mysqli_query($con,$q);
   $l=mysqli_num_rows($j);
   
 
 
if($l==1)
{
	header('location:VALIDATEchngpass.php');
	
}
else {
	echo "<script> alert('your Question or answer is incorrect');

	window.location.href='chngpass'
	</script>";
	
	die();
}

?>