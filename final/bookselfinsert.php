
<?php
session_start();
$email=$_SESSION['email'];



$con=mysqli_connect('localhost','root','');

if(!($con))
{
	echo "not connected";
}



if(!(mysqli_select_db($con,'bookselfdb')))
{echo "not connected database";
}


	  if(getimagesize($_FILES['image']['tmp_name'])==FALSE)
	  {
		  echo "failed";
	  }
	  else
	  {
		  $name=addslashes($_FILES['image']['name']);
		  
		  $image=base64_encode(file_get_contents(addslashes($_FILES['image']['tmp_name'])));
		  //saveimage($image);
	  }
	


/*function saveimage($image) {
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'imageupload');
	$sql="insert into bookselftable (image) values ('$image')";
	$query=mysqli_query($con,$sql);
	
}*/

$genre =$_POST['genre'];
$booktitle=$_POST['booktitle'];
$publication =$_POST['publication'];
$year_of_pub=$_POST['selectpub'];
$edition=$_POST['edition'];

$author=$_POST['author'];
$price =$_POST['price'];
$date=$_POST['date'];
$img_name = $_FILES['image']['name'];
$img_size = $_FILES['image']['size'];
$img_tmp = $_FILES['image']['tmp_name'];

//$directory = 'uploads1/';.
//$target_file = $directory.$img_name;
$target_file = $img_name;








$sql="INSERT INTO bookselftable (Genre,BookTitle,Publication,year_of_pub,edition,Author,Price,date,img,image,email) values('$genre','$booktitle','$publication','$year_of_pub','$edition','$author','$price','$date','$target_file','$image','$email')";


if(!(mysqli_query($con,$sql)))
{
	echo "not inserted";
}

else 
{
 echo '<script type="text/javascript">alert("your book have been added");</script>';
 
}

header("refresh:1;url=home1.php");
?>