<?php
session_start();
$password=$_POST['passwd'];

$email=$_SESSION['email'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'cdac');

$q="update  userdata set password='$password' where email='$email'";
$j=mysqli_query($con,$q);
   
if($j==1)
{
	 echo "<script> alert('your security question has been change successfully')</script>";
	 if($_SESSION['jj']==9){
		 $_SESSION['q']=0;
	header('location:signup_page.php');
	 }
	else
		header('location:home.html');
}

?>