
<html>
<body>




<?php
if(isset($_POST['sendotp'])){
require('textlocal.class.php');
require('credintials.php');
$textlocal = new Textlocal(false,false,API_KEY);

$numbers = array($_POST['mobile']);
$sender = 'TXTLCL';
$otp=mt_rand(10000,99999);

$message = "Hello " .$_POST['uname']. "This is your otp from AMAN:" . $otp;

try {
    $result = $textlocal->sendSms($numbers, $message, $sender);
    setcookie('otp',$otp);
	echo "OTP succefully send";
} catch (Exception $e) {
    echo "<script>alert('enter otp');</script>";
	//die('Error: ' . $e->getMessage());
}
}


if((isset($_POST['verify'])))
{
	
	//$otp=$_POST['otp'];       
	echo "<script>alert('enter otp');</script>";
	if($_COOKIE['otp'] == $otp)
	{
		echo  "verified";
		
	}
	else{
		
		echo "<script>alert('please renter otp');</script>";
	}
}
?>






</div>
<div class="col-md-9 col-md-offset-2">
<form role="form" method="post" enctype="multipart/form-data">
<div class="row">
 <div class="col-sm-9 form-group">
 <label for="uname">Name</label>
 <input type="text" class="form-control" id="uname1" name="uname" value="" maxlength="10" placeholder="Enter your name" required="">
 </div>
 </div>
 
 <div class="row">
 <div class="col-sm-9 form-group">
 <label for="mobile">Mobile</label>
 <input type="text" class="form-control" id="mobile"
 name="mobile" value="" maxlength="10" placeholder="enter valid mobile no" required=""/>
 </div>
 </div>
 <div class="row">
 <div class="col-sm-9 form-group">
 <button type="submit" name="sendotp" class="btn btn-lg btn-success btn-block">Send OTP</button>
 
 </div>
 </div>
 </form>
 <form method="POST" action="">
 <div class="row">
 <div class="col-sm-9 form-group">
 <label for="otp">OTP</label>
 
 <input type="text" class="form-control" id="otp" name="otp"
 placeholder="Enter otp" maxlength="5" required="" /> 
 </div>
 </div>
 
 <div class="row">
 <div class="col-sm-9 form-group">

 <button type="submit" name="verify" class="btn btn-lg btn-info btn-block">
 Verify</button>
 </div>
 </div>
 </form>
 </div>
 </div>
 </body>
 </html>
 
 