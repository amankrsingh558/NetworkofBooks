<!DOCTYPE html>
<?php
$x=0;

?>
<?php
if(isset($_POST['sendotp']))
{
	
require('textlocal.class.php');
require('credintials.php');
$textlocal = new Textlocal(false,false,API_KEY);

$numbers = array($_POST['mobile']);
$sender = 'TXTLCL';
$otp=mt_rand(10000,99999);

$message = "Hello This is your otp from AMAN:" . $otp;

try {
    $result = $textlocal->sendSms($numbers, $message, $sender);
    setcookie('otp',$otp);
	echo  "<script>alert('otp successfully sent');</script>";
	
	
} catch (Exception $e) {
	
echo "<script>alert('otp not sent');</script>";
	$GLOBALS['x']++;
    //die('Error: ' . $e->getMessage());
}
}


if((isset($_POST['verify'])))
{
	$otp=$_POST['otp'];
	if($_COOKIE['otp'] == $otp)
	{
		echo  "<script>alert('otp verified');</script>";
		
	}
	else{
		$GLOBALS['x']++;
		echo "<script>alert('please renter otp');</script>";
	}
}
?>
<html>
<head>
	<title>add Information</title>
	<link rel="stylesheet" type="text/css" href="infostyle.css">
</head>
<body>
	<div id="showbox1"></div>
	<div id="showbox2"> profile</div><br>
	<div id="showbox4"></div>
	<div id="showbox3">copyright &copy; bookipedia pvt. ltd</div>
	<div id="showbox5"></div>
	<div id="showbox6">
		
		<div id="showbox7">
		  <?php 
		   //       echo "<h1>Hello Mr ".$_GET['fname']." ".$_GET['lname']."</h1>";
		  ?>
		  
		  <form action="<?php if((isset($_POST['submitbtn']))) {echo ("checkref.php");} else echo ""; ?>" method="post" enctype="multipart/form-data">
			<p style="font-size: 30px;">Add Your Details</p><br>
			Address Line 1:<input type="text" value="<?php  if(isset($_POST['add1'])){echo ($_POST['add1']);}?>"  placeholder="e.g.- street address,p.o.box,company name,c/o.." name="add1" class="add" /><br/>
			<!--<p style="font-size: 15px;">e.g.- street address,p.o.box,company name,c/o..</p>-->
			<br>Address Line 2:<input type="text" value="<?php  if(isset($_POST['add2'])){echo ($_POST['add2']);}?>"   placeholder="e.g.- Apartment,suite,unit,building,floor.. etc." name="add2" class="add"/><br>
		<!--	<p style="font-size: 15px;">e.g.- Apartment,suite,unit,building,floor.. etc.</p>-->
			<br>Country:<select class="address" id="country" name="selectcountry" value="<?php  if(isset($_POST['selectcountry'])){echo ($_POST['selectcountry']);}?>" >
				<option>india</option>
				<option>usa</option>
				<option>canada</option>
			</select>
			&nbsp&nbsp&nbspState:<select class="address" id="state">
				<option>bihar</option>
				<option>jharkhand</option>
				<option>odisha</option>
			</select>
			&nbsp&nbsp&nbsp&nbspCity:<select class="address" id="city">
				<option>bbsr</option>
				<option>ctc</option>
				<option>khorda</option>
			</select><br><br>

			Security Question:<select id="sq" class="add" name="security" value="<?php  if(isset($_POST['security'])){echo ($_POST['security']);}?>" >
				<option>what is your pet name</option>
				<option>what is your favourite dish</option>
				<option>what is your favourite color</option>
				<option>what is your nick name</option>
			</select><br><br>
			Answer:<input type="text" name="ans" id="ans" class="address"  value="<?php  if(isset($_POST['ans'])){echo ($_POST['ans']);}?>"><br><br>
			
			<label>Mobno:</label>
			<input type="text" placeholder="Enter Mobile No" class="add" id="otp" name="mobile" value="<?php  if(isset($_POST['mobile'])){echo ($_POST['mobile']);}?>" required/>
			 <input type="submit" name="sendotp" id="submit2" value="send otp" style="background-color:#b3ffff; height:15px;";/>
		                               
			<br>
			                                                     
			<label>Enter OTP:</label>   
			<input type="text"  name="otp" value="<?php  if(isset($_POST['otp'])){echo ($_POST['otp']);}?>"   placeholder="Enter OTP" class="add" id="verify"   />
		    <input type="submit" name="verify" id="submit3" value="verify" style="background-color:#b3ffff;  height:15px;";/>
			<br>
			
            <input type="submit" name="submitbtn" id="submit1" value="finish" title="click to go for sign in"/>
             </form>
		</div>
	</div>
</body>
</html>