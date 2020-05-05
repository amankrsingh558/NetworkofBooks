<?php


//create connection
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,'searchbar') or die(mysqli_error($con));

//check connection

if(!$con) {
	die("Connection failed:".mysqli_connect_error());
}


//$sql ="INSERT INTO books(genre,bookname,authorname,price) VALUES ('youth','two states','chetan bhagat','210')";
$sql = "";
if(mysqli_query($con,$sql)){
	$last_id = mysqli_insert_id($con);
	
if(isset($_GET['part'])){
	$partid=$_GET['part'];
$sql1="SELECT * FROM $usertable WHERE PartNumber=$partid";
$result = mysqli_query($con,$sql1 );

while($row=mysqli_fetch_assoc($result)) {
	$bookname = $row['bookname'];
	echo $bookname;
	echo "hi";
}
}
	//echo "Last Id is ".$last_id;
}else {
	echo "Error ".$sql ."<br />" .mysqli_error($con);
}
mysqli_close($con);
?>
