<style>

body {
	background-color:yellow;
}

#tab {background-color:#ffff99;
}
</style>

<?php
 $con=mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db($con,'searchbar') or die (mysqli_error());
if($con)
	echo "Recently added books :- <br />";

					
$output='';


//collect
/*if(isset($_POST['submit'])) {
	$q = $_POST['match'];
	//$c = $_POST['choice']; */

//query

	$query = mysqli_query($con," SELECT * FROM books ORDER BY sno DESC LIMIT 3") or die("could not search");
	$count = mysqli_num_rows($query);
	
	if($count==0) {
		$output = 'There are no search results';
	}else { 
				
	
					while($row = mysqli_fetch_array($query)) {
						
						//echo "<td>"."<img src = "data:image/jpeg;base64,'.base64_encode($row['bookname']).'"/>"."</td>";
						
						
						//echo "<img src='data:image;base64,'.$row['bookname'].' ' >";
					echo "<body>";
					
					echo "<table border='1'  cellspacing='0' id='tab'>";
					
					echo "<tr>";
					//echo "<ul>";
					echo "<th colspan='2'>"."Title- ".$row['bookname']."</th>";
					//echo "</ul>";
					//echo "</tr>";
					
					echo "<tr>";
					
				
					$img1= $row['image'];
					echo "<td>".'<img src="data:image;base64,'.$img1.'">'."</td>"; 
					
					//echo "<td>"."IMAGE"."</td>";
					
					echo"<td>"."Details:- " . "<br>"
					
						."Author Name - ".$row['authorname']."<br>"
						."Price - ".$row['price']."<br>"
						."Owner Name - ".$row['ownername']."<br>"
					
					
					
					
					
					."</td>";
					echo "</tr>"; 
					
					echo "<br>";
					echo "</table>";
					
					echo "</body>";
				}
					
				
			
				
				
				
				
				
			}
		



mysqli_close($con);
?>




