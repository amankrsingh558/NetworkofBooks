<?php
session_start();
$user=$_SESSION['email'];

?>

<!DOCTYPE html>
<html>
<head>
<title>Register Your Book</title>
<link rel="stylesheet" href="style1.css">




<!---------------------------------------->


<style>
input{
border-radius:20px;
text-transform:uppercase;
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





<!---------------------->



<style>

input{
border-radius:20px;

}
</style>
<script src="jquery-3.3.1.min">
</script>
<script src= "https://unpkg.com/sweetalert/dist/sweetalert.min.js">
</script>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
-->
<script>


$(document).ready(function(){
$("input").focusin(function(){
$(this).css("background-color","#ffff99");
});
$("input").focusout(function(){

if ($(this).val() =="") 
$(this).css( "background-color", "white");
         else
         
        $(this).css("background-color", "#ffff99");
});
});



$(document).ready(function(){
$("select").focusin(function(){
$(this).css("background-color","#ffff99");
});
$("select").focusout(function(){

if ($(this).val() =="") 
$(this).css( "background-color", "white");
         else
         
        $(this).css("background-color", "#ffff99");
});
});
</script>




<script type="text/javascript">
function PreviewImage() {
	var oFReader =new FileReader();
	oFReader.readAsDataURL(document.getElementById("image").files[0]);
	oFReader.onload=function(oFREvent){
		document.getElementById("uploadPreview").src= oFREvent.target.result;
	};
};

function mobvalidate(key)
{
var keycode;
keycode=(key.which)?key.which:key.keyCode;
var phn=document.getElementById('mobno');
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
 

function pinvalidate(key)
{
var keycode;
keycode=(key.which)?key.which:key.keyCode;
var phn=document.getElementById('pinno');
if(!(keycode==8 || keycode==46) && (keycode <48 || keycode>57))
return false;

else
{
if(phn.value.length<6)
{
return true;
}
else{
return false;
}
}}

 window.onload=function()
{
var select=document.getElementById('selectid');
for(i=2016;i>=1850;i--)
{
var opt=document.createElement('OPTION');

opt.innerHTML=i;
select.add(opt);
}}






</script>
</head>





<!--------------------------------------->




<body>
	<div style="background-image:url('header.jpg')" id="navbar"><!--Change-->
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
	<a href="Account.htm">Account</a>
	<a href="Changepic.htm">Change Picture</a>
	<a href="Changepass.htm">Change Password</a>
	<a href="Changesequ.htm">Change Security Question</a>
	</div>
	</li>
	<li style="float:left"><a href="lgout.php">Logout</a></li>
	</ul>
	</li>
	<li><a href="homechat.php" onclick="home()" >Message<div class="notifications">
	<?php
	echo 3;
	?>
	
	
	
	
	</div></a></li>
	
	<li><a href="bookself.php" >Add Books</a></li>
	<li><a href="book.php" >My Books</a></li>
	<li><a href="people.php" onclick="People()">People</a></li>
	<li><a href="home1.php" onclick="home()">Home</a></li>
	<li style="float:left"><p style="font-size:60px;margin-top:0px;font-family:Bradley Hand ITC"><b>NOB</b></p></li>
	<li style="float:left;padding:20px"><form   action="search1.php" method="POST" />
      <input type="text"  style="font-type:arial" id="searchBox" name="match" placeholder="Search..." autocomplete="off" />
     <input type="submit" name="submit" value="Search" id="sub"/>
    </form>
	</li>
	</ul>
	<hr>
	</div>
	<div class="content">















<!---------------------------------------->





<form class="bookform" action="bookselfinsert.php" method="post" enctype="multipart/form-data">
<div id="main-wrapper">
<center><h2>Register Your Book</h2>
</center>



<label><b>Choose the Genre of Your Book:</b></label><br>
<select class="genre"  name="genre" >
<option value="Satire">Satire</option>
<option value="Science Fiction">Science Fiction</option>
<option value="Drama">Drama</option>
<option value="Novel">Novel</option>
<option value="Engineering">Engineering</option>
<option value="poetry">Poetry</option>
<option value="Action & Adventure">Action & Adventure</option>
<option value="Romance">Romance</option>
<option value="Horror">Horror</option>
<option value="Mystery">Mystery</option>
<option value="Self Help">Self Help</option>
</select>
<br>
<div id="fix">

<img id="uploadPreview" src="avatar.png" class="avatar"/><br>
<input type="file" id="image" name="image"    accept=".jpg,.jpeg,.png" onchange="PreviewImage();"/><br>
<br>
</div>
<label><b>	Book title:</b></label><br>
<input name="booktitle" type="text" class="inputvalues" placeholder="Enter Book title*" style="text-transform:uppercase" required/><br>
<br>
<label><b>Publication:</b></label><br>
<input name="publication" type="text" class="inputvalues" placeholder="Enter Publication*" style="text-transform:uppercase" required/><br>
<br>

<label><b>Year of Publication:</b></label><br>
<!--<input name="publication" type="text" class="inputvalues" placeholder="Enter Publication*" required/><br>-->
<select name="selectpub" id="selectid"  > 

</select>
<br><br>
<label><b>Edition:</b></label><br>
<input name="edition" type="text" class="inputvalues" placeholder="Enter Edition*" style="text-transform:uppercase" required/><br>
<br>

<label><b>Author:</b></label><br>
<input name="author" type="text" class="inputvalues" placeholder="Enter Author*" style="text-transform:uppercase" required/><br>
<br>
<label><b>Price:</b></label><br>
<input name="price" type="number" class="inputvalues" placeholder="Enter Your Price*" required/><br><br>
<label><b>Enter Date:</b></label>
<br>
  <input type="date" name="date"  style="width: 180px;" class="inputvalues" required/><br>
<br>

<button name="submit_btn" type="submit" id="signup_btn" value="Submit"><b>Submit</b></button>
</form>

</div>
<!------------------------------------>



</div>
<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
</body>




<!--------------------------------------->
</html>