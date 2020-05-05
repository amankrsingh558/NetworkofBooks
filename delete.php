<?php
$con=mysqli_connect('localhost','root','');

if(!($con))
{
	echo "not connected";
}
else echo "connected";

if(!(mysqli_select_db($con,'bookselfdb')))
{echo "not connected database";
}


if(isset($_POST['submit']))
{
$chk=$_POST["chk"];
$a =implode(",",$chk);
echo $a;

}
?>