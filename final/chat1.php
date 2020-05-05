<?php

 /* session_start();
  if(!isset($_SESSION['q']))
  {
	  header('location:signup_page.php');
	  die();
  }
*/


 
?>
<!doctype html>
<html>
<head>
<title>Home</title>
<script>
	function home()
	{
		document.title="Home"
	}
	function People()
	{
		document.title="People"
	}
	function openwndw(){
		window.open("http://google.com", "myWindow", 'width=400,height=300');
window.close();
	}
</script>
<style>
#op { color:red;
}

	body{
		font-family:arial;
		margin:0px;
		background-image:url('339484.jpg');
		background-repeat:no-repeat;
		background-size:100%;
		background-attachment:fixed;
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
	padding:10px
}
input:focus {
    outline:none;
}
textarea:focus {
    outline:none;
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
</head>
<body>
<div style="position:fixed">
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
	<a href="chngpass.php">Change Password</a>
	<a href="chngSQ.php">Change Security Question</a>
	</div>
	</li>
	<li style="float:left"><a href="lgout.php">Logout</a></li>
	</ul>
	</li>
	<!--for message part-->
	<li><a onclick="openwndw()" target="messagelist">Message<div class="notifications"><!-- have to change the -->
	<?php
	echo 3;
	error_reporting(0); 
	?>
	

	
	
	</div></a></li>
	<li><a href="bookself.html" onclick="People()">Add Books</a></li>
	<li><a href="account.php" onclick="People()">My Books</a></li>
	<li><a href="people.php" onclick="People()">People</a></li>
	<li><a href="home1.php" onclick="home()">Home</a></li>
	
	<li style="float:left"><p style="font-size:60px;margin-top:0px;font-family:Bradley Hand ITC"><b>NOB</b></p></li>
	
	
	<li style="float:left;padding:20px">
	
	<form   action="search1.php" target="center" method="POST" />
      <input type="text"  style="font-type:arial" id="searchBox" name="match" placeholder="Search..." autocomplete="off" />
     <input type="submit" name="submit" value="Search" id="sub"/>
    </form>
	</li>
	
	
<div id="op" >
<?php
//create connection

$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,'bookselfdb') or die(mysqli_error($con));

//check connection

if(!$con) {
	die("Connection failed:".mysqli_connect_error());
}


	
	
$query="SELECT * FROM bookselftable";

$result = mysqli_query($con,$query );
$k = mysqli_num_rows($result);

//k is no of rows	
	
//$p = "select * from books
 //where sno=(select max(sno) from books)";
 
 
$p = "SELECT * FROM bookselftable ORDER BY sno DESC LIMIT 1";
 
//$p="SELECT * FROM books WHERE Sno=$k ";//error with $k
$result = mysqli_query($con,$p );



while($row = mysqli_fetch_assoc($result)) {
	
	$bookname = $row['BookTitle'];
	$authorname = $row['Author'];
	$price = $row['Price'];
	
echo  "<marquee behavior='scroll' direction='left' onmouseover='this.stop();' onmouseout='this.start();'>".
""

	."</marquee>";
 




}
mysqli_close($con);
?>
</div>

	</ul>
	</div><br><br><br><br><br><br><br>
		<iframe id="get" src="gener.html" style="width:220px;height:600px;float:left;position:fixed;display:block;" marginwidth="0" marginheight="0" frameborder="1" onmouseenter="gen()"></iframe>
		<iframe id="ge" src="amit.php" style="width:220px;height:600px;left:500px;float:right;display:none" marginwidth="0" marginheight="0" frameborder="1" onmouseenter="gen()"></iframe>
		<iframe id="messagelist" src="amit.php" style="width:220px;height:600px;left:500px;float:right;display:none" marginwidth="0" marginheight="0" frameborder="1" onmouseenter="gen()"></iframe>	
		<iframe id="message" src="amit.php" style="width:620px;height:600px;left:500px;float:right;display:none" marginwidth="0" marginheight="0" frameborder="1" onmouseenter="gen()"></iframe>
       
	
	

</body>
</html>