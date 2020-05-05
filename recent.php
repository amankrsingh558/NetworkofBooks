
<style>

table{
	background-color:dodgerblue;
	
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

background-color:#ffffcc;
}


#fix{
	background-color:yellow;
	color:red;
	font-size:20px;
	
}



body{
	
background-image:url('booksearch.jpg');
background-repeat:no-repeat;
background-size:cover;	

}


</style>








<?php
 $con=mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db($con,'bookselfdb') or die (mysqli_error());
 session_start();
  if(!isset($_SESSION['q']))
  {
	  header('location:signup_page.php');
	  die();
  }
$username=$_SESSION['email'];


 $con=mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db($con,'bookselfdb') or die (mysqli_error());
if($con)
	echo "Recently added books :- <br />";

					


//collect
/*if(isset($_POST['submit'])) {
	$q = $_POST['match'];
	//$c = $_POST['choice']; */

//query

	$query = mysqli_query($con,' SELECT * FROM bookselftable ORDER BY sno DESC LIMIT 3  ') or die("could not search");
	$count = mysqli_num_rows($query);
	
	if($count==0) {
		$output = 'There are no search results';
	}else { 
				
	
					while($row = mysqli_fetch_array($query)) {
						
						//echo "<td>"."<img src = "data:image/jpeg;base64,'.base64_encode($row['bookname']).'"/>"."</td>";
						
						
						//echo "<img src='data:image;base64,'.$row['bookname'].' ' >";
					
					
					echo "<table border='1'  cellspacing='0' >";
					
					echo "<tr>";
					echo "<td colspan='2'>"."Title -".$row['BookTitle']. "</td>";
					echo "</tr>";
					
					echo "<tr>";
					
				
					//$img1= $row['image'];
					//echo "<td>".'<img src="data:image;base64,'.$img1.'">'."</td>"; 
					echo "<tr>";
					
				
					$img1= $row['image'];
					echo "<td >".'<img id="size" src="data:image;base64,'.$img1.'  ">'."</td>"; 
					
					
					
					echo"<td>"."Details:- " . "<br>"
					
					
					
						."Author Name - ".$row['Author']."<br>"
						."Price - ".$row['Price']."<br>"
						."Date of register - ".$row['date']."<br>";
					
					
					
					
					
					echo "</td>";
					echo "</tr>";
					
					echo "<br>";
				}
					
				
			
				
				
				
				
				
			}
		



mysqli_close($con);
?>




