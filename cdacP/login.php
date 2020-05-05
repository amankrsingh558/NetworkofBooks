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
$_SESSION['q']=1;
$_SESSION['w']="Incorrect user "."<br>"."name or password  !!!!!!";
if($j==1)
{
	header('location:home.html');    //  Enter next home paage here
}
else
{
	
	
	header('location:signup_page.php');
	die();
}
mysqli_close($con);

?>
