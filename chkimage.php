<html>
<title>
Upload Image
</title>

<form  method="post" enctype="multipart/form-data" >
<input type="file" name="image" />
<input type="submit" name="submit" />

</form>



<?php
if(isset($_POST['submit']))
{
$con=mysqli_connect("localhost","root","","imageupload");
	
	
	$imagename=addslashes($_FILES["image"]["name"]);
	$imageData=base64_encode(addslashes(file_get_contents($_FILES["image"]["tmp_name"])));

	

	$sql="insert into upload (name,image) values('$imagename','$imageData') ";
	if(mysqli_query($con,$sql))
     echo "inserted";
	else
		echo "not inserted";
	
	mysqli_close($con);
}
	display();
	function display()
	{
		$con1=mysqli_connect("localhost","root","","imageupload");
	
	$query="select * from upload ";

    $result=mysqli_query($con1,$query);
	
    while($row=mysqli_fetch_assoc($result))
	{
           $img=$row['image'];
     echo '<img src="data:image;base64,'.$img.'">';
	}
	
	}
	

?>

<script>








</script>



</html>