


<!DOCTYPE html>
<html>
<head>
	<title>add Information</title>
	<link rel="stylesheet" type="text/css" href="infosttyle.css">
</head>
<script>
function change(a){
	a.style="background-color:black;color:white;display:inline;";
}
function chnga(a){
	a.style="background-color:none;color:blue;display:inline;";
}
function crt(){
	assign();
cntry();
	document.getElementById("ifrm").src="editt.html";
}
var c=new Array("India","nepal","bangladesh");
var s=new Array("Bihar","Jharkhand","Odisha","Province 1","Province 2","Province 3","Rangpur","Rajshahi","Khulna",);
var t=new Array("patna","gaya","darbhanga","jsr","ranchi","bokaro","cuttack","Bhubaneswar","RourKela",
                " Bhojpur"," Morang"," Sunsari"," Bara "," Parsa","Saptari"," Bhaktapur"," Dhading","Kathmandu",
				"Thakurgaon","Kurigram","Dinajpur","Bogra","Pabna","Natore","Bagerhat","Jessore","Meherpur"
);
var  cont;
var  stst;
var  city;
var k=0;
function assign(){
  cont=document.getElementById("country");
  stst=document.getElementById("stat");
 cityy=document.getElementById("city");
 
}
function cntry(){
	state();
}

function state(){
var h=cont.selectedIndex;
k=h*9;
l=h*3;
u=h*3+3;
    stst.innerHTML="";
   for(var i=l;i<u;i++){
       var cr=document.createElement("OPTION");
     cr.innerHTML=s[i];
     stst.appendChild(cr);
   }
   cit();
}
function cit(){
   var h=stst.selectedIndex;
   l=h*3+k;
u=h*3+3+k;
        cityy.innerHTML="";
   for(var i=l;i<u;i++){
       var cr=document.createElement("OPTION");
     cr.innerHTML=t[i];
     cityy.appendChild(cr);
   }
}
</script>
<style>
th,td{
padding: 10px;
}
table{
	background-color:lightblue;
	color:blue;
	font-size:30px;
}
#showbox3{
	position:fixed;
	bottom:10px;
	padding: 0.5em;
	color: white;
	background-color: black;
	text-align: center;
	top: 635px;
	width: 100%;
	height: 50px;
	left:0;
	bottom:0;
}
.add{
	border-radius: 10px/10px;
	width: 250px;
	height: 20px;
}

.address{
	border-radius: 10px/10px;
	width: 100px;
	height: 20px;
}

.send
{
	position:absolute;
	left:780px;
}

<?php
if(isset($_POST['sendotp']))
{
echo "<script>alert('OTP sent');</script>";	
}
?>

<?php
if(isset($_POST['verify']))
{
echo "<script>alert('OTP verified');</script>";	
}
?>



</style>
<body onload="crt()" style="background-color:#a64dff;">
<form action=""  method="post" enctype="multipart/form-data">
		<center><pre style="font-size: 50px;float:top; color:green ;background-color:#ffc34d;">Bookipedia</pre></center>
	<iframe style="float:left;overflow:scroll;border:none;" src=""  id="ifrm"  name="fframe" width="200" height="300"></iframe>

	
	<div id="showbox6" style="border:none">
		
		<p style="font-size: 30px;color:#86592d;font-weight:bold;">Add Your Details</p>	
		                <?php 
						//session_start();
						//$fname=$_SESSION['fname'];
                       // $lname=$_SESSION['lname'];
		        //  echo "<h1 style='color:#003300'> &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Hello, &nbsp <b>  Mr &nbsp <u><i>".$fname." ".$lname."</i></b></u></h1>";
				    include("imageUpload.html"); 
		  ?>
			
       <table style="border:4px groove white;background-color:white;" align="center">	
	   <tr>
	        <td> Address Line 1: </td><td>  <input required type="text" name="add1" class="add" value="<?php  if(isset($_POST['add1'])){echo ($_POST['add1']);}?>"     placeholder="e.g.- street address,p.o.box,company name,c/o.." /></td>
	   </tr>
	   <tr>
	        <td>Address Line 2:  </td><td> <input type="text" name="add2" class="add"  value="<?php  if(isset($_POST['add2'])){echo ($_POST['add2']);}?>"   placeholder="e.g.- Apartment,suite,unit,building,floor.. etc." /> </td>
	   </tr>
	   <tr>
  <td>Country:</td><td><select onchange="state()" class="address"  value="<?php  if(isset($_POST['country'])){echo ($_POST['country']);}?>"   id="country" name="country">
				<option >india</option>
				<option>Nepal</option>
				<option>Bangladesh</option>
			</select>  </td>
	   </tr>
	   <tr>
	     <td> State: </td><td>  <select onchange="cit()" class="address" id="stat"   value="<?php  if(isset($_POST['state'])){echo ($_POST['state']);}?>" name="state">

			</select></td>
	   </tr>
	   <tr>
	      <td> City: </td> <td> <select  class="address" id="city"  value="<?php  if(isset($_POST['city'])){echo ($_POST['city']);}?>" name="city">
				<option>bbsr</option>
				<option>ctc</option>
				<option>khorda</option>
			</select>  </td>
	   </tr>
	   <tr>
	      <td>Security Question:</td><td> <select id="sq" class="add" value="<?php  if(isset($_POST['sq'])){echo ($_POST['sq']);}?>" name="sq">
				<option>what is your pet name</option>
				<option>what is your favourite dish</option>
				<option>what is your favourite color</option>
				<option>what is your nick name</option>
				<option>which is your first school</option>
				<option>who is your favorite player</option>
				<option>which country you like most</option>
				<option>what is your hobbie</option>
				<option>what is name of your favorite author</option>
			</select> </td>
	   </tr>
	   <tr>
	     <td>
		 Answer:
		 </td>
		 <td> <input type="text" required name="ans" id="ans"  value="<?php  if(isset($_POST['ans'])){echo ($_POST['ans']);}?>" class="address"> </td>
	   </tr> 
	   
	 
	   <tr>
	   <td> Enter mobile No </td><td> <input type="text" name="mobiletext" id="ans"  value="<?php  if(isset($_POST['mobiletext'])){echo ($_POST['mobiletext']);}?>" class="address" /> </td>
	   <td><input type="submit" name="sendotp"  class="send" value="sendotp" /></td>
	   </tr>
	  
	   
	 
	   <tr>
	   <td> Enter mobile OTP </td><td> <input type="text" name="otptext" id="ans" value="<?php  if(isset($_POST['otptext'])){echo ($_POST['otptext']);}?>" class="address"> </td>
	    <td><input type="submit" name="verify" class="send" value="verify" /></td>
	   </tr>
	  
	  <tr>
	   
	   <td colspan="2" align="center"> <input  type="submit" name="button1" id="submit1" value="finish" title="click to go for sign in"/> </td>
	   </tr>
	   <tr>
	    <td> &nbsp </td>
	    </tr>
	    </table>		
	    </form>
			<?php// include("cright.html"); ?>	
	
</body>
</html>