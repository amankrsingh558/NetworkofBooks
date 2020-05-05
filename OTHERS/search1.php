
<style>
tr:nth-child(even) {
	background-color:yellow;
}
tr:nth-child(odd) {
	background-color:#F5FFFA;
}
</style>

<?php
 $con=mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db($con,'searchbar') or die (mysqli_error());
if($con)
	echo "connected <br />";

					
$output='';


//collect
if(isset($_POST['submit'])) {
	$q = $_POST['match'];
	//$c = $_POST['choice'];

//query

	$query = mysqli_query($con,"SELECT * FROM books WHERE  bookname LIKE '%$q%'  ") or die("could not search");
	$count = mysqli_num_rows($query);
	
	if($count==0) {
		$output = 'There are no search results';
	}else { 
				
			$n=$count;
			echo " $count result(s) for $q";
			//while($row = mysqli_fetch_array($query)) {
				for($i=1;$i<=$n;$i++) {
					while($row = mysqli_fetch_array($query)) {
						
						//echo "<td>"."<img src = "data:image/jpeg;base64,'.base64_encode($row['bookname']).'"/>"."</td>";
						
						
						//echo "<img src='data:image;base64,'.$row['bookname'].' ' >";
					
					
					echo "<table border='1' name=''t'.$1' cellspacing='0' >";
					
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
					
					
					
					
					
					."</td>";
					echo "</tr>";
					
					echo "<br>";
				}
					
				
			
				
				
				
				
				
			}
				
				
				
/*echo "<table border='1' cellspacing='0' bgcolor='aqua' name='t1' >";

echo "<tr>";
echo "<th>Sno</th>";
echo "<th>Genre</th>";
echo "<th>Bookname</th>";
echo "<th>Author_Name</th>";
echo "<th>Price</th>";
echo "<th>Ownername</th>";
echo "</tr>";
echo " $count result(s)";$i=1;
	while($row = mysqli_fetch_array($query)) {
	
			
	echo "<tr>";
	echo"<td>".$i."</td>";
	echo"<td>".$row['genre']."</td>";
	echo"<td>".$row['bookname']. "</td>";
	echo"<td>".$row['authorname']. "</td>";
	echo"<td>".$row['price']. "</td>";
	echo"<td>".$row['ownername']."</td>";
 $i++;

	echo "</tr>";
	
		}
		echo "</table>";
	}
	*/
}
}

mysqli_close($con);
?>




