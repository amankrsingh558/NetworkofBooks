<?php

  session_start();
  if(!isset($_SESSION['q']))
  {
	  header('location:signup_page.php');
	  die();
  }



$email=$_SESSION['email'];
 
?>
<!DOCTYPE html>
<html>
<head>
<title>People</title>
<style>
#tabp {
	background:url('people.jpg') no-repeat center;
	background-size:cover;
	<!--margin-top:40px;
margin-left:30px; -->
	float:left;
}
#div1 {
	background-color:#e0ccff;
}
body {
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
	padding:10px
}
input:focus {
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
	<div style="background-image:url('header.jpg')" id="navbar"><!--Change-->
	<ul>
	<li class="dropdown"><a href="#ques"class="dropbtn" ><img src="ques.png" height="30px" width="30px"></a>
	<div class="dropdown-content1">
	<a href="query1.php">Ask Question</a>
	<a href="report1.php">Report a Problem</a>
	<a href="faq.php">FAQ</a>
	</div>
	</li>
	<li class="dropdown"><a href="#down"class="dropbtn" ><img src="down.png" height="20px" width="20px"></a>
	<ul class="dropdown-content">
	<li style="float:left"><a href="activitylog.php">Activity Log</a></li>
	<li class="sdropdown" style="float:left"><a href="javascript:void(0)" class="sdropbtn">Settings</a>
	<div class="sdropdown-content" id="sdbtn">
	<a href="acc.php">Account</a>
	<a href="changepic.php">Change Picture</a>
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
	
	</div><center>
<?php

echo "<body>";
 $con=mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db($con,'cdac') or die (mysqli_error());


					
$output='';




	$query = mysqli_query($con,"SELECT * FROM userdata ") or die("could not search");
	$count = mysqli_num_rows($query);
	
	if($count==0) {
		$output = 'There are no search results';
	}else { 
				
			$n=$count;
			$count1=$count-1;
			echo  "<div id='div1'>"." $count1 registered members"."</div>";
			echo "<br>";
			
				//for($i=1;$i<=$n;$i++) {
					//while($row = mysqli_fetch_array($query)) {
						
						
					
					
					echo "<table border='0' cellspacing='0' bgcolor='aqua' id='tabp' >";

echo "<tr>";
echo "<th style='padding:10px'>Sno</th>";
echo "<th style='padding:10px'>Name</th>";

echo "<th style='padding:10px'>Country</th>";
echo "<th style='padding:10px'>State</th>";
echo "<th style='padding:10px'>City</th>";
echo "<th style='padding:10px'></th>";

echo "</tr>";
$b=1;
	//while($row = mysqli_fetch_array($query)) {
	
		while($row = mysqli_fetch_array($query)) {	
	echo "<tr>";
	echo"<td style='padding:10px'>".$b."</td>";
	echo"<td style='padding:10px'>".$row['fname']."
	&nbsp".$row['lname']. "</td>";
	
	echo"<td style='padding:10px'>".$row['country']. "</td>";
	echo"<td style='padding:10px'>".$row['state']. "</td>";
	echo"<td style='padding:10px'>".$row['city']. "</td>";
	//echo"<td style='padding:10px'>"."<button style='border-radius:10px;color:blue;outline:none;'>Go to Profile</button></td>";
	?>
	<td><a href="peopleacount.php?id=<?php echo $row["sno"]; ?>">Go to Profile</a>
	<?php
	
 $b++;

	echo "</tr>";
	
	}
		echo "</table>";
					}
				
	//}				
mysqli_close($con);
?></center>
</body>
</html>