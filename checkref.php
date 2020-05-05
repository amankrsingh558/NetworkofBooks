<html>

<?php
if(isset($_POST['submitbtn']))
{
	echo "hello";
}
?>

<form action="" method="post">
<input type="text" name="name" value="<?php
if(isset($_POST['name']))
{
	echo ($_POST['name']);
}
?>" />
<input type="submit" value="kepp this" name="keep" required />
<input type="text" />
</form>

<?php
if(isset($_POST['keep']))
	echo "<script>alert('Hello'); </script>";

?>
</html>