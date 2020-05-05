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
<?php
$con=mysqli_connect('localhost','root','');
//$con1=mysqli_connect('localhost','root','');
mysqli_select_db($con,"cdac");
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

//mysqli_query($con,"delete from bookselftable where sno in ($a)");

}
 

	$query=mysqli_query($con,"select * from userdata");
$rowcount=mysqli_num_rows($query);
?>

<h2 style="font-size:40px; font-family:courier;color:green">Your BookShelf</h2>
<form method="post" >
<table >
<tr>
<th></th>
<th>Genre</th>
<th>Book Title</th>
<th>Publication</th>
<th>Year Of Publication</th>
<th>Edition</th>

<th>Author</th>
<th>Price</th>
<th>Date of Registeration</th>
<!--<td><input type="submit" value="edit"  name="edit" /></td>-->
</tr>

<?php

?>


<!--<td><input type="checkbox" name="chk1" value= /></td>-->
<td><a href="peopleacount.php?id=<?php echo $row["sno"]; ?>">Go to Profile</a>
<!--<td><input type="checkbox" name="chk[]" value="<?php// echo $row["sno"]?>" /></td>-->
</tr>
<?php
}
?>



</table>
</form>

</body>
</html>  