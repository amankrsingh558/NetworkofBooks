<?php

  session_start();
 
   if(isset($_SESSION['scn'])){
	   $_SESSION['q']=0;
      header('location:home.html');
	  exit();
   }
   	   $_SESSION['aa']=0; //used
$_SESSION['bb']=0;   //used
$_SESSION['cc']=0;
$_SESSION['dd']=0;  //used
$_SESSION['ee']=0;
$_SESSION['ff']=0;
$_SESSION['gg']=0;
$_SESSION['hh']=0;
$_SESSION['ii']=0;
$_SESSION['jj']=0;   //used
?>

<!DOCTYPE html>
<html>
<head>
	<title>Bookipedia</title>

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
   #mobval{

width: 310px;
	height: 10px;
	border-radius: 10px/10px;
	background-color: white;
	padding: 10px;
	font-size: 20px;
}
#mailbo{
	width: 310px;
	height: 10px;
	border-radius: 10px;
	padding: 10px;
	font-size: 20px;
	border:none;
}
#namebo{
	width: 140px;
	height: 10px;
	border-radius: 10px;
	padding: 10px;
	font-size: 20px;
	border:none;
}
.es{
	padding:10px;
	border-radius:30px;
	border:none;
}
#logs{
	border-radius:10px;
	border-style:none;
	background-color:darkorchid;
	color:white;
	padding:0px
}
#btt{
	border-radius:10px;
	border-style:none;
	background-color:darkorchid;
	color:white;
	padding:0px;
	
}
a{
	color:white;
}
</style>
<script>
   function mobvalidate(key)
{
var keycode;
keycode=(key.which)?key.which:key.keyCode;
var phn=document.getElementById("mobval");
if(!(keycode==8 || keycode==46) && (keycode <48 || keycode>57))
return false;
else
{
if(phn.value.length<10)
{
return true;
}
else{
return false;
}
}}
function moblength(a){
	
	if(a.value.length<10)
	{
		a.value="";
		alert("Enter valid mobile number (10 digit)");
	}
}
   function chkpass(a){
       if(a.value.length<8){
	      a.value="";
		  alert("Password must be 8 characters long");
	   }
   }
      function onmover(a){
       a.style="background-color:black;color:white;";
   }
   function onmout(a){
     a.style="background-color:aqua;color:black;";
   }
      function crtframe(n){
   var f=document.getElementById("ifrm");
   if(n==0)
        f.src="faq.html";    
    else if(n==1)
	     f.src="aboutUs.html";
    else if(n==2)
	      f.src="Objective.html";	 
   
   }
</script>
<body onload="Ylook()">

	<form action="login.php"  method="post" class="header">
		<div id="form1" class="header">Email<br/>
		<input class="es" type="text" name="username" placeholder="username" required  /><br/>
		</div>
		<div id="form2" class="header" >password<br/>
		<input class="es" type="password" name="password" placeholder="password" required /><br/>
        <input id="logs" type="submit" value="Login" class="submit1"/>
	    <a href="forgotpass.php" style="color: black;" >Forgot Password!</a></div><p style="background-color:red;float:right;color:black;"><?php if($_SESSION['q']==1) {echo $_SESSION['w']; $_SESSION['w']="";}?></p>
		<br><br><br>
	    <input type="button" class="bt" value="FAQ" id="btt" onclick="crtframe(0)">
		<input type="button" class="bt" value="ABOUT US" onmouseover="onmover(this)" onmouseout="onmout(this)" onclick="crtframe(1)">
		<input type="button" class="bt" value="OBJECTIVE" onmouseover="onmover(this)" onmouseout="onmout(this)" onclick="crtframe(2)">
   
    </form>

<div class="bodyx">
	<div id="intro1" class="bodyx"> Bookipedia helps you connect and share knowledge</div>
	<div id="intro2" class="bodyx">Create an Account</div>

<form id="form3" class="bodyx" action="signup.php" method="post">
<table>
<tr><td><input type="text" name="fname" id="namebox" placeholder="Firstname" required />
<input type="text" id="namebo" placeholder="Lastname" name="lname" required /></td></tr>

<tr><td><input type="email" id="mailbo" placeholder="Enter Email" name="mail" required /></td></tr>
<tr><td><input type="number" id="mobval" onkeypress="return mobvalidate(event)" onchange="moblength(this)" placeholder="Enter mobile" name="mobile" required /></td></tr>


<tr><td><input type="password" name="pass" id="mailbox" onblur="chkpass(this)" placeholder="Enter Password" required /></td></tr>

<tr><td><input type="radio" name="gender" id="male" value="male" required>Male
<input type="radio" name="gender" id="female" value="female" required>Female<br><br/>Birthday<br/></td></tr>
</table>
<script src="Date.js"></script>
<select id="year" class="birth" name="year" onchange="Ylook()">
  <script>
     for(var i=2012;i>1950;i--)
	   document.write("<option>"+i+"</option>");
  </script>
</select>
-
<select id="mon" name="month" onchange="Mlook()">
<script>
var A=["January","February","March","April","May","June","July","August","September","October","November","December"];
for(var i=0;i<12;i++){
  document.write("<option>"+A[i]+"</option>");
}
</script>
</select>
-
<select name="date" id="dt"></select>

<!--
  -->



<br><br>
<input type="checkbox" required />you agree to our <a href="terms.html" style="font-size: 15px;">Terms & Conditions</a>
<input type="submit" id="button2" value="Create Account" />

</form>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br>
<iframe style="float:left;overflow:scroll;border:none;height:100%" src=""  id="ifrm"  name="fframe" width="600"></iframe>

</body>
</html>