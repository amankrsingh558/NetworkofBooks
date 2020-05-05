<!doctype html>
<html>
<head>
<title>Account </title>
<script>
	function home()
	{
		document.title="Home"
	}
	function People()
	{
		document.title="People"
	}
</script>
<?php
  $address1="";
  $address2="";
  $country="";
  $state="";
  $city="";               //Database name
    $phone="";
?>
<style>
	body{
		font-family:arial;
		margin:0px;
		background-image:url('339484.jpg');
		background-repeat:no-repeat;
		background-size:100%;
	}
	ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
	background-size:5px;
	overflow:hidden;
}

li {
    float: right;
}

li a, .dropbtn {
    display: inline-block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
	font-size:20px
}
li a:hover, .dropdown:hover .dropbtn {
    BORDER-top:2PX SOLID #ae5bd7;
	background-color:#ebd6f5
}
.dropbtn{
cursor:pointer;
}
li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
	right:10px;
}

.dropdown-content1 {
    display: none;
    position: fixed;
    background-color: #f9f9f9;
    min-width: 160px;
    left: 88%;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}
.sdropdown-content {
    display: none;
    position: fixed;
    background-color: lightgrey;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}
.dropdown-content1 a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: center;
}
.sdropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}
.dropdown-content1 a:hover {background-color: #f1f1f1}

.sdropdown-content a:hover {background-color:#f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
.sdropdown:hover .sdropdown-content {
    display: block;
}
.dropdown:hover .dropdown-content1 {
    display: block;
}
#searchBox{
	border-radius:30px;
	border-style:solid;
	border-color:grey;
	padding:10px;
}

#sub{
	border-radius:10px;
	border-style:none;
	background-color:darkorchid;
	color:white;
	padding:10px;
	cursor: pointer;
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


<!--for message css-->
   .button {
   
   
   
   position:relative;
   cursor:pointer;
   transition:all 10s;
   }
      .button:hover .notifications  {
  display:none;
   }
  
   .notifications {
   position:absolute;
   border-radius:2px;
   font-size:14px;
   background-color:red;
   color:#fff;
   padding:5px 5px;
   top:2px;
   right:115px;
   
   }
   .notifications:hover {
   display:none;
   }
</style>

 <script>
       function chngimg(v){
	      var fr=new FileReader();
		  fr.readAsDataURL(v.files[0]);
		  fr.onload=function(oFREvent){
		document.getElementById("im").src= oFREvent.target.result;
	};
	   }
	   function hideselect(){
	     document.getElementById("country").style="display:none";
	     document.getElementById("state").style="display:none";
	     document.getElementById("city").style="display:none";
	   }
	   function chng(){
		   document.getElementById("cninput").style="display:none";
		   document.getElementById("btcon").style="display:none";
	     document.getElementById("country").style="display:inline";
	     document.getElementById("stinput").style="display:none";
		   document.getElementById("btst").style="display:none";
	     document.getElementById("state").style="display:inline";
	     document.getElementById("ctinput").style="display:none";
		   document.getElementById("btct").style="display:none";
	     document.getElementById("city").style="display:inline";
		 crt();
	   }
	   	 /*  function chngst(k){
		   document.getElementById("stinput").style="display:none";
		   document.getElementById("btst").style="display:none";
	     document.getElementById("state").style="display:inline";
	   }
	   	   function chngct(k){
		   document.getElementById("ctinput").style="display:none";
		   document.getElementById("btct").style="display:none";
	     document.getElementById("city").style="display:inline";
	   }*/
	   function chngmob(){
		   document.getElementById("btmob").style="display:none";
		  document.getElementById("mobl").removeAttribute('readonly');
		  document.getElementById("mobl").value="";
	   }
	   	   function chngadd1(){
			   		   document.getElementById("btadd1").style="display:none";
		  document.getElementById("add1").removeAttribute('readonly');
		  document.getElementById("add1").value="";
	   }
	   	   function chngadd2(){
		 document.getElementById("btadd2").style="display:none";
		  document.getElementById("add2").removeAttribute('readonly');
		  document.getElementById("add2").value="";
	   }
	   function crt(){
	assign();
	   cntry();}
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
  stst=document.getElementById("state");
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
	
	if(a.value.length!=10)
	{
		a.value="";
		alert("Enter valid mobile number (10 digit)");
	}
}
  </script>
<?php
$email="a@gmail.com";
//$email=$_SESSION['email'];           Enter the Session email
  $con=mysqli_connect('localhost','root');
mysqli_select_db($con,'cdac');
$q="SELECT phone, email,address1, address2, country, state, city FROM userdata WHERE email='$email'";
$y=mysqli_query($con,$q);
while($row=mysqli_fetch_assoc($y)){
	$phone=$row['phone'];
  $address1=$row['address1'];
  $address2=$row['address2'];
  $country=$row['country'];
  $state=$row['state'];
  $city=$row['city'];
}
?>
</head>
<body onload="hideselect()">
<ul>
	<li class="dropdown"><a href="#ques"class="dropbtn" ><img src="ques.png" height="30px" width="30px"></a>
	<div class="dropdown-content1">
	<a href="Activitylog.htm">Ask Question</a>
	<a href="#report">Report a Problem</a>
	<a href="#faq">FAQ</a>
	</div>
	</li>
	<li class="dropdown"><a href="#down"class="dropbtn" ><img src="down.png" height="20px" width="20px"></a>
	<ul class="dropdown-content">
	<li style="float:left"><a href="Activitylog.htm">Activity Log</a></li>
	<li class="sdropdown" style="float:left"><a href="javascript:void(0)" class="sdropbtn">Settings</a>
	<div class="sdropdown-content" id="sdbtn">
	<a href="acc.php">Account</a>
	<a href="Changepic.htm">Change Picture</a>
	<a href="chngpass.php">Change Password</a>
	<a href="chngSQ.php">Change Security Question</a>
	</div>
	</li>
	<li style="float:left"><a href="lgout.php">Logout</a></li>
	</ul>
	</li>
	<!--for message part-->
	<li><a href="homechat.php" onclick="home()" >Message<div class="notifications">
	<?php
	echo 3;
	?>
	
	
	
	
	</div></a></li>
	<li><a href="bookself.php" onclick="People()">Add Books</a></li>
	<li><a href="book.php" onclick="People()">My Books</a></li>
	<li><a href="people.php" onclick="People()">People</a></li>
	<li><a href="home1.php" onclick="home()">Home</a></li>
	
	<li style="float:left"><p style="font-size:60px;margin-top:0px;font-family:Bradley Hand ITC"><b>NOB</b></p></li>
	
	
	<li style="float:left;padding:20px">
	
	<form   action="search1.php" target="center" method="POST" />
      <input type="text"  style="font-type:arial" id="searchBox" name="match" placeholder="Search..." autocomplete="off" />
     <input type="submit" name="submit" value="Search" id="sub"/>
    </form>
	</li>

	<div style="position:fixed;left:500px;top:160px;width:500px;padding-left :30px;height:420px;border:1px solid black;background:url('bookshelf.jpg');border-radius: 10px;">
		<a href="home1.php"><button style="float:right;background-color:darkorchid;color: white; border-radius: 10px;">Close X</button></a>
	<br>
			<p style="font-size: 20px;text-align: center;"><b>Edit Your Account Details</b></p><br>
	<form action="accTo.php" method="post">		
			Mobile Number:<input required readonly onkeypress="return mobvalidate(event)" onchange="moblength(this)" hjtype="text" value="<?php echo $phone ?>" id="mobl" name="m" class="add"><input id="btmob" type="button" value="edit" onclick="chngmob()"><br><br>
			Address Line 1:<input required readonly type="text"id="add1" name="add1"  value="<?php echo $address1; ?>" class="add" /><input id="btadd1" type="button" value="edit" onclick="chngadd1()"><br><br>
			Address Line 2:<input readonly type="text" id="add2" name="add2" class="add" value="<?php echo $address2; ?>" /><input id="btadd2" type="button" value="edit" onclick="chngadd2()"><br><br>
			Country:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="text" class="add" value="<?php echo $country; ?>" readonly id="cninput">
			<input type="button" id="btcon" value="edit" onclick="chng()">
			<select readonly class="address" onchange="cntry()" id="country" name="c">
							<option selected >india</option>
				<option>Nepal</option>
				<option>Bangladesh</option>
			</select><br><br>
            State:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="text" class="add" value="<?php echo $state; ?>" readonly id="stinput">
			<input type="button" id="btst" value="edit" onclick="chng()">
			<select name="s" onchange="cit()" readonly class="address" id="state">
			</select><br>
			<br>
			City:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="text" class="add" value="<?php echo $city; ?>" readonly id="ctinput">
			<input type="button" id="btct" value="edit" onclick="chng()">
			<select name="ct" readonly  class="address" id="city">
			<option>bbsr</option>
				<option>ctc</option>
				<option>khorda</option>
			</select><br><br>
			
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="submit" value="UPDATE" name="submit" style="border-radius:12px;font-size:20px;background-color:darkorchid;color: white;">
		</form>
		</div>
</body>

</html>