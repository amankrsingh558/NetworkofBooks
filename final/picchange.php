<?php

<?php session_start();
$user=$_SESSION['email'];
 ?>
<script src= "https://unpkg.com/sweetalert/dist/sweetalert.min.js" >
</script>



<?php
//session_start();
//$_SESSION['email']=$username;


$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'cdac');
	
	



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
		  
	  }
	
	
$sql=" update  userdata set image1='$image' where email='$user'";
$q=mysqli_query($con,$sql);
if($q)
{
	header("location:home1.php");
	
}

else{
	
	header("location:picchange.php");
}

}

?>