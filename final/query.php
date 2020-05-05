<?php
$prob=$_POST['txar'];
$uname=$_SESSION['username'];

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'probquery');
$q="INSERT INTO `prob`(`username`, `problem`, `solution`) VALUES ('$uname','$prob','')";
$y=mysqli_query($con,$q);
if($y==1)
header ('location:home.php');
else
header('location:query.html');

mysqli_close($con);
?>