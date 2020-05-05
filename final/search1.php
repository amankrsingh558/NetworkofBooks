
<style>

table{
	background-color:transparent;
	background-image:url('339484.jpg');
	width:400px;
	
	
	
}

#size{
	height:150px;
	width:120px;
}

#pos{
margin-top:40px;
margin-left:30px;
	float:left;
	
	
}
#fix{
	position:absolute;
	margin-left:20px;
	margin-top:10px;
}


th{


background-color:transparent;
color:red;
font-size:30px;
}


#fix{
	
	color:red;
	font-size:20px;
	
}










</style>

<?php
 $con=mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db($con,'bookselfdb') or die (mysqli_error());
/*if($con)
	echo "connected <br />";

					
$output='';
*/

//collect
if(isset($_POST['submit'])) {
	$q = $_POST['match'];
	//$c = $_POST['choice'];

//query

	$query = mysqli_query($con,"SELECT * FROM bookselftable WHERE  BookTitle LIKE '%$q%' OR Author LIKE '%$q%' ") or die("could not search");
	$count = mysqli_num_rows($query);
	
	if($count==0) {
		$output = 'There are no search results';
	}else { 
				
			$n=$count;
			echo "<div id='fix'>". "$count result(s) for $q"."</div>";
			//while($row = mysqli_fetch_array($query)) {
				for($i=1;$i<=$n;$i++) {
					while($row = mysqli_fetch_array($query)) {
						
						//echo "<td>"."<img src = "data:image/jpeg;base64,'.base64_encode($row['bookname']).'"/>"."</td>";
						
						
						//echo "<img src='data:image;base64,'.$row['bookname'].' ' >";
						echo "<body>";
					
					echo "<div id='edit'>";	
					
					echo "<table border='0' name=''t'.$1' cellspacing='0'  id='pos'>";
					
					echo "<tr>";
					echo "<th colspan='2' >"."<b>"."Title -".$row['BookTitle']."</b>". "</th>";
					echo "</tr>";
					
					echo "<tr>";
					
				
					$img1= $row['image'];
					echo "<td >".'<img id="size" src="data:image;base64,'.$img1.'  ">'."</td>"; 
					
					//echo "<td>"."IMAGE"."</td>";
					
					echo "<td>"."<b>"."Details:-"."</b>" . "<br>"
					
						."<b>"."Author Name -"."</b>"."<b>".$row['Author']."<b>"."<br>"
						."<b>"."Price -"."<b>"."<b>".$row['Price']."<b>"."<br>"
						//."Owner Name - ".$row['ownername']."<br>"
						."<b>"."Date of register-"."<b>". "<b>".$row['date']."<b>"."<br>"
						."<a href=' ' >"."Click to chat "."</a>"
					
					
					
					
					
					."</td>";
					echo "</tr>";
					
					//echo "<br>";
					
					echo "</table>";
						echo "</div>";
					
					echo "</body>";
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




