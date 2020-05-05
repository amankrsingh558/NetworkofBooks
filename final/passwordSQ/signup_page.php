<?php

  session_start();
if(isset($_SESSION['q'])){
	header('location:home1.php');
} 
$_SESSION['signup']=0;
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
#utex{
		width: 140px;
	height: 10px;
	border-radius: 10px;
	padding: 10px;
	font-size: 20px;
	border:none;
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
function chngmail(k){
	var ml=k.value;
	var indx;
	for(var i=0;i<ml.length;i++){
		if(ml.charAt(i)=='@'){
			indx=i;
			break;
	}
	}
	var c=0,v=0;
	for(var i=indx+1;i<ml.length;i++){
		if(ml.charAt(i)=='.')
			c++;
		if(ml.charAt(i)=='@')
			v++;
	}
	if((c!=1)||(v!=0)||(ml.charAt())){
		k.value="";
		alert("Enter valid Email Id   "+c+v);
	}
		
}
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
   function vallogmail(event){
	   var x=event.keyCode;
	   var t=0,u=0,v=0;
	   
	   
	  if(!(((x>=65)&&(x<=90))||((x>=97)&&(x<=122))||(x==46)||(x==64)||(x==95))){
		  document.getElementById("log").value="";
		alert("only (a-z),(A-Z),.,@,_ are acceptable");
		location.reload();
	  }

   }
      var ar=["Ahjf","hfTY","TYdh","yZAp","TUje","LOOe","dhyI","UIJr","ETYG","ghgY","uydy"];
	  var index;
   function getcolor(){
  var ar=["red","powderblue","blue","lightgreen","tomato","aqua","coral","orange","pink","brown"];
  var t=Math.floor(Math.random()*10);
  return ar[t];
}
   function valuee(){
	     var t=Math.floor(Math.random()*10);
		 index=t;
		 return ar[t];
   }
   function allocatecap(){
	   Ylook();
	   var str="";
  var tx=valuee();
  for(var i=0;i<tx.length;i++){
  str+=tx.charAt(i).fontcolor(getcolor()).fontsize(Math.floor(Math.random()*10)+5);
  }
	  for(var i=0;i<str.length;i++){
		  str.charAt(i).style="transform:rotate(30deg)";
	  }
	   
	   document.getElementById("ppp").innerHTML=str;
   }
   function chkcap(){
	   var cv=document.getElementById("cap").value;
	   if(cv!=ar[index]){
		   document.getElementById("cap").value="";
		   alert("Captcha didn't match");
   }
   }
   function chkpswd(event){
	   var x=event.keyCode;
	   if((x==39)||(x==34)||(x==59)){
		   location.reload();
		   alert("UNSAFE CHARCATER CANNOT BE ACCEPTED");
	   }
   }
</script>
<body onload="allocatecap()">

	<form action="login.php"  method="post" class="header">
		<div id="form1" class="header">Email<br/>
		<input class="es" type="text" id="log" onkeypress="vallogmail(event)" name="username" placeholder="username" required  /><br/>
		</div>
		<div id="form2" class="header" onkeypress="chkpswd(event)">password<br/>
		<input class="es" id="pswdd" type="password" name="password" placeholder="password" required /><br/>
        <input id="logs" type="submit" value="Login" class="submit1"/>
	    <a href="betweenstartsession_forgot.php" style="color: black;" >Forgot Password!</a></div><p style="background-color:red;float:right;color:black;"></p>
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

<tr><td><input type="email" onchange="chngmail(this)" id="mailbo" placeholder="Enter Email" name="mail" required /></td></tr>
<tr><td><input type="number" id="mobval" onkeypress="return mobvalidate(event)" onchange="moblength(this)" placeholder="Enter mobile" name="mobile" required /></td></tr>


<tr><td><input type="password" name="pass" id="mailbox" onblur="chkpass(this)" placeholder="Enter Password" required /></td></tr>

<tr><td><input type="radio" name="gender" id="male" value="male" required>Male
<input type="radio" name="gender" id="female" value="female" required>Female<br>Birthday</td></tr><br>
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
<select name="date" id="dt"></select>

<center><p style="background-color:white;width:150px" id="ppp"></p>
<input type="text" id="utex" onchange="chkcap()" placeholder="Enter Captcha" id="cap">


<br><br>
<input type="checkbox" required />I agree to your <a href="terms.html" style="font-size: 15px;">Terms & Conditions</a><br><br>
<input style="	width: 150px;
	height: 30px;
	background-color:darkorchid;
	color: white;
	border-radius: 15px/15px;
	cursor: pointer;
	font-size: 15px;" type="submit"  value="Create Account" /></center>

</form>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br>
<iframe  style="float:left;overflow:visible;border:none;height:600px" src=""  id="ifrm"  name="fframe" width="600"></iframe>

</body>
</html>