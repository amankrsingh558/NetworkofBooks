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
   echo $l;
   echo $email."  ".$seq."  ".$ans;
 
if($l>0)
{
	header('location:VALIDATEchngpass.php');
	
}
else {
	$_SESSION['bb']=1;
	header('location:chngpass.php');
	die();
}

?>