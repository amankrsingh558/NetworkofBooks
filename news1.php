<style>
#op { background-color:yellow;
}

</style>
<div id="op" >
<?php
//create connection

$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,'bookselfdb') or die(mysqli_error($con));

//check connection

if(!$con) {
	die("Connection failed:".mysqli_connect_error());
}


	
	
$query="SELECT * FROM bookselftable";

$result = mysqli_query($con,$query );
$k = mysqli_num_rows($result);

//k is no of rows	
	
//$p = "select * from books
 //where sno=(select max(sno) from books)";
 
 
$p = "SELECT * FROM bookselftable ORDER BY sno DESC LIMIT 1";
 
//$p="SELECT * FROM books WHERE Sno=$k ";//error with $k
$result = mysqli_query($con,$p );



while($row = mysqli_fetch_assoc($result)) {
	
	$bookname = $row['BookTitle'];
	$authorname = $row['Author'];
	$price = $row['Price'];
	
echo  "<marquee behavior='scroll' direction='left' onmouseover='this.stop();' onmouseout='this.start();'>".
"&#9758;".$bookname ."  written  by " .$authorname." cost of which is ".$price." is for sale"

	."</marquee>";
 




}
mysqli_close($con);
?>
</div>