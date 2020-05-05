<?php
session_start();
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['mail'];
$phone=$_POST['mobile'];
$password=$_POST['pass'];
$year=$_POST['year'];
$month=$_POST['month'];
$day=$_POST['date'];
$gender=$_POST['gender'];

$_SESSION['email']=$email;
$_SESSION['fname']=$fname;
$_SESSION['lname']=$lname;
$_SESSION['signup1']=0;

//connecting to database
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'cdac');
$q="insert into userdata (fname,lname,email,phone,password,year,month,day,gender) values ('$fname','$lname','$email','$phone','$password',$year,'$month',$day,'$gender')";
$y=mysqli_query($con,$q);
if($y==1)
{
	$_SESSION['signup']=0;
header('location:info.php');
}
else
header('location:signup_Page.php');

mysqli_close($con);



?>