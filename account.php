<style>

body{
	background-image:url('bookself.jpg');

}

tr:nth-child(even) {
    background-color: #dddddd;

}

tr:nth-child(odd) {
    background-color: #99ff99;

}

th{
	font-size:20px;
}

td{
	font-size:20px;
	
}
th{
	background-color:#ffff66;
	color:blue;
}


th,td{
	text-align:left;
	padding:8px;
}
h2{
	margin-left:700px
	
}

<!--table,tr,th,td{
	
	
border:1px solid black;	

}-->


table{
	
	border-collapse:collapse;
	width:80%;
	
}

#photo,#tabid{
	height:250px;
	width:250px;
	
	margin-left:0px;
	float:left;	
}
#photo{
	background-color:blue;
	height:250;
	width:200;
}
#tabid
{
margin-left:450px	
}

#about{
	margin-top:300px;
	position:absolute;
	background-color:red;
	height:250;
	width:250;
}



</style>
<html>
<body>
<div id="photo" >

<img src="avatar.png" style="height:250; width:250";  alt="book" class="myslide" />
<img src="image6.png" style="height:250; width:250";  alt="book" class="myslide" />
<img src="image2.png" style="height:250; width:250";  alt="book" class="myslide" />
<img src="image3.png" style="height:250; width:250";  alt="book" class="myslide" />
<img src="image4.png" style="height:250; width:250";  alt="book" class="myslide" />
<img src="image5.png" style="height:250; width:250";  alt="book" class="myslide" />
<img src="image7.png" style="height:250; width:250";  alt="book" class="myslide" />
</div>

<script>
var index=0;
slider();
function slider()
{
var x=document.getElementsByClassName("myslide");

for(var i=0;i<x.length;i++)
{
  x[i].style.display="none";
}

index++;
if(index>x.length)
{
index=1;	
}

x[index-1].style.display="block";
setTimeout(slider,2000);
}

</script>

<div id="about">
<h3>about</h3>
</div>



<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,"bookselfdb");
/*if(!($con))
{
	echo "not connected";
}
if(!(mysql_select_db($con,'bookselfdb')))
{echo "not connected database";
}*/
 
 if(isset($_REQUEST['submit']))
{
$chk=$_REQUEST["chk"];
$a =implode(" ,",$chk);

mysqli_query($con,"delete from bookselftable where sno in ($a)");

}
 

	$query=mysqli_query($con,"select * from bookselftable");
$rowcount=mysqli_num_rows($query);
?>

<h2 style="font-size:40px; font-family:courier;color:green">Your BookShelf</h2>
<form method="post" >
<table >
<tr>
<th>S.no</th>
<th>Genre</th>
<th>Book Title</th>
<th>Publication</th>
<th>Year Of Publication</th>
<th>Edition</th>

<th>Author</th>
<th>Price</th>
<th>Date of Registeration</th>
<th>Edit</th>



<!--<td><input type="submit" value="edit"  name="edit" /></td>-->

<th><input type="submit" value="remove"  name="submit" /></th>
</tr>

<?php
for($i=1;$i<=$rowcount;$i++)
{
$row=mysqli_fetch_array($query);
?>
<tr>
<td><?php echo $i?></td>
<td><?php echo $row['Genre']?></td>
<td><?php echo $row['BookTitle']?></td>
<td><?php echo $row['Publication']?></td>
<td><?php echo $row['year_of_pub']?></td>
<td><?php echo $row['edition']?></td>
<td><?php echo $row['Author']?></td>
<td><?php echo $row['Price']?></td>
<td><?php echo $row['date']?></td>
<!--<td><input type="checkbox" name="chk1" value= /></td>-->
<td><a href="edit.php?id=<?php echo $row["sno"]; ?>">edit</a>
<td><input type="checkbox" name="chk[]" value="<?php echo $row["sno"]?>" /></td>
</tr>
<?php
}
?>



</table>
</form>

</body>
</html>  