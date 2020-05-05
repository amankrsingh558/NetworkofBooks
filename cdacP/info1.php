<?php
session_start();
$add1=$_POST['add1'];
$add2=$_POST['add2'];
$country=$_POST['country'];
$state=$_POST['state'];
$city=$_POST['city'];
$sq=$_POST['sq'];
$ans=$_POST['ans'];


$email=$_SESSION['email'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'cdac');
$q="update userdata set address1='$add1',address2='$add2',country='$country',state='$state',city='$city',seq='$sq',ans='$ans' where email='$email'";
$t=mysqli_query($con,$q);

mysqli_close($con);
if($t==1)
{
	header('location:signup_page.php');
	die();
}
header('location:info.htm');

?>