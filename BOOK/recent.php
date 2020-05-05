<?php
session_start();
$_SESSION['email']=$username;


 $con=mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db($con,'bookselfdb') or die (mysqli_error());
if($con)
	echo "Recently added books :- <br />";

					
$output='';


//collect
/*if(isset($_POST['submit'])) {
	$q = $_POST['match'];
	//$c = $_POST['choice']; */

//query

	$query = mysqli_query($con," SELECT * FROM bookselftable ORDER BY sno DESC LIMIT 3 where email=$_SESSION['email'] ") or die("could not search");
	$count = mysqli_num_rows($query);
	
	if($count==0) {
		$output = 'There are no search results';
	}else { 
				
	
					while($row = mysqli_fetch_array($query)) {
						
						//echo "<td>"."<img src = "data:image/jpeg;base64,'.base64_encode($row['bookname']).'"/>"."</td>";
						
						
						//echo "<img src='data:image;base64,'.$row['bookname'].' ' >";
					
					
					echo "<table border='1'  cellspacing='0' >";
					
					echo "<tr>";
					echo "<td colspan='2'>"."Title -".$row['bookname']. "</td>";
					echo "</tr>";
					
					echo "<tr>";
					
				
					/*$img1= $row['image'];
					echo "<td>".'<img src="data:image;base64,'.$img1.'">'."</td>"; */
					
					echo "<td>"."IMAGE"."</td>";
					
					echo"<td>"."Details:- " . "<br>"
					
					
					
						."Author Name - ".$row['authorname']."<br>"
						."Price - ".$row['price']."<br>"
						."Owner Name - ".$row['ownername']."<br>"
						."Date of register - ".$row['date']."<br>";
					
					
					
					
					
					."</td>";
					echo "</tr>";
					
					echo "<br>";
				}
					
				
			
				
				
				
				
				
			}
		



mysqli_close($con);
?>




