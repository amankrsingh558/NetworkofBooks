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
	 echo "<script> alert('your password has been change successfully')</script>";
	 if(!isset($_SESSION['frgtpass']))
	 {

        header('location:home1.php');
		
	 }	
	 else
	 {  session_destroy();
		 header('location:signup_page.php');
}
}
mysqli_close($con);

?>