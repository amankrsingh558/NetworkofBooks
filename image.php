<!DOCTYPE html>
<html>
   <head>
   </head>
   <body>
     <form method="POST" enctype="multipart/form-data">
	   <input type="file" name="image">
	   <br>
	   <input type="submit" value="submit" name="submit">
	 </form>
	 
	<style>
	
	div{
		
		width:10px;
		height:10px;
	}
	</style>
	 
   
<?php
if(isset($_POST['submit']))
{
	  if(getimagesize($_FILES['image']['tmp_name'])==FALSE)
	  {
		  echo "failed";
	  }
	  else
	  {
		  $name=addslashes($_FILES['image']['name']);
		  
		  $image=base64_encode(file_get_contents(addslashes($_FILES['image']['tmp_name'])));
		  saveimage($name,$image);
	  }
	
}

function saveimage($name,$image) {
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'imageupload');
	$sql="insert into upload (name,image) values ('$name','$image')";
	$query=mysqli_query($con,$sql);
	if($query)
	{
		echo "success";
	}
	else{
		echo "not upload";
	}
}
display();

function display()
{
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'imageupload');
	$sql="select *from upload";
	$query=mysqli_query($con,$sql);
	$num=mysqli_num_rows($query);
	while($row=mysqli_fetch_assoc($query))
	{
		$img=$row['image'];
		
		echo "<div id='divid'>";
		echo '<img src="data:image;base64,'.$img.' ">';
		echo "</div>";
	}
}

?>
</body>
<html>