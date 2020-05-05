<?php
//create connection

$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,'searchbar') or die(mysqli_error($con));

//check connection

if(!$con) {
	die("Connection failed:".mysqli_connect_error());
}

$query = "select * from books
 where sno=2";


$result = mysqli_query($con,$query);

$row = $mysqli_fetch_row($result);



while($row = mysqli_fetch_assoc($result)) {
	
	$bookname = $row['bookname'];
	$authorname = $row['authorname'];
	$ownername = $row['ownername'];
echo  $ownername." want to sell ".$bookname ."  written  by " .$authorname;
 
	
}



mysqli_close($con);
?>