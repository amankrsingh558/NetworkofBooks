<?php
$prob=$_POST['txarea'];
$uname=$_SESSION['username'];

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'probreport');
$q="INSERT INTO `report`(`username`, `problem`, `solution`) VALUES ('$uname','$prob','')";
$y=mysqli_query($con,$q);
if($y==1)
header ('location:home.php');
else
header('location:report.html');

mysqli_close($con);
?>