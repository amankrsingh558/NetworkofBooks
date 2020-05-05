<?php
session_start();
$newsq=$_POST['chngsq'];
$answer=$_POST['answer'];

$email=$_SESSION['email'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'cdac');

$q="update userdata set seq='$newsq',ans='$answer' where email='$email'";
$j=mysqli_query($con,$q);
   
if($j==1)
{
	echo "<script> alert('your security question has been change successfully')</script>";
	header('location:home.html');
	
}


?>