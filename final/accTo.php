<?php
$email="a@gmail.com";
//$email=$_SESSION['email'];           Enter the Session email
$ad1=$_POST['add1'];
$mob=$_POST['m'];
$ad2=$_POST['add2'];
$cont=$_POST['c'];
$stat=$_POST['s'];
$city=$_POST['ct'];
  $con=mysqli_connect('localhost','root');
mysqli_select_db($con,'cdac');
$q="UPDATE userdata SET address1='$ad1',address2='$ad2',country='$cont',
state='$stat',city='$city' WHERE email='$email'";
$y=mysqli_query($con,$q);
if($y>0)
	header('location:home1.php');
else
	header('location:acc.php');
mysqli_close($con);
?>