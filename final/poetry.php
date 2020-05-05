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
	background-color:yellow;
	color:red;
	font-size:20px;
	
}



</style>

<?php
 $con=mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db($con,'bookselfdb') or die (mysqli_error());


//query

	$query = mysqli_query($con,"SELECT * FROM bookselftable WHERE  Genre='poetry'  ") or die("could not search");
	$count = mysqli_num_rows($query);
	
	if($count==0) {
		$output = 'There are  search results';
	}else { 
				
			$n=$count;
			
				for($i=1;$i<=$n;$i++) {
					while($row = mysqli_fetch_array($query)) {
						
					
					
					echo "<body>";
					
					
					echo "<table border='0' name='t'.$1' cellspacing='0'  id='pos'>";
					
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
						."<br>"
						."<a href=' ' >"."Click to chat "."</a>";
					
					
					
					echo "</td>";
					echo "</tr>";
					
					
					
					echo "</table>";
						echo "</body>";
					
				}
					
				
			
				
				
				
				
				
			}
				
				
				

			
	
}


mysqli_close($con);
?>




