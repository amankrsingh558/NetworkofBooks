<?php
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
$_SESSION['email']=$username;

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'cdac');

$q="select *from userdata where email='$username' && password='$password'";
$t=mysqli_query($con,$q);

$j=mysqli_num_rows($t);


if($j==1)
{$_SESSION['q']=$username;
$d="select fname, lname from userdata where email='$username'";
$result1=mysqli_query($con,$d);
while($row=mysqli_fetch_assoc($result1))
{
	$_SESSION['myfname']=$row['fname'];
	$_SESSION['mylname']=$row['lname'];
}
	header('location:home1.php');	//  Enter next home paage here

	}
else
{
	
	
	header('location:signup_page.php');
	die();
}
mysqli_close($con);

?>
