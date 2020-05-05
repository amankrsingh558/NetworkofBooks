
<?php
 session_start();
  if(!isset($_SESSION['q']))
  {
	  header('location:signup_page.php');
	  die();
  }
$username=$_SESSION['email'];

?>


<?php 
$con=mysqli_connect('localhost','root','');  
 mysqli_select_db($con,'cdac');
 
$sno=$_GET['id'];
$select="select * from userdata where sno='$sno' ";
$run1=mysqli_query($con,$select);
$row1=mysqli_fetch_array($run1);
$id=$row1['email'];
$add=$row1['address1'];
//echo $id;         have to change
?>


<?php
 
 $con1=mysqli_connect('localhost','root','');
 mysqli_select_db($con1,'bookselfdb');
 
$query="select * from bookselftable where email='$id' ";
$run=mysqli_query($con1,$query);
$rowcount=mysqli_num_rows($run);


?> 
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">

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
	<li style="float:left"><a href="lgout.htm">Logout</a></li>
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
	<li style="float:left;padding:20px"><form   action="search1.php" method="POST" />
      <input type="text"  style="font-type:arial" id="searchBox" name="match" placeholder="Search..." autocomplete="off" />
     <input type="submit" name="submit" value="Search" id="sub"/>
    </form>
	</li>
	</ul>
	<hr>
	</div><center>

<div id="div1">
<h3>Address: <?php echo $add; ?></h3>
<button> <a href="" >start chat</a></button>

<table id="tabp">
<tr>
<th>S.no</th>
<th>Genre</th>
<th>Book Title</th>
<th>Publication</th>
<th>Year Of Publication</th>
<th>Edition</th>

<th>Author</th>
<th>Price</th>
<th>Date of Registeration</th>




<!--<td><input type="submit" value="edit"  name="edit" /></td>-->
</tr>

<?php
for($i=1;$i<=$rowcount;$i++)
{
$row=mysqli_fetch_array($run);
?>
<tr>
<td><?php echo $i?></td>
<td><?php echo $row['Genre']?></td>
<td><?php echo $row['BookTitle']?></td>
<td><?php echo $row['Publication']?></td>
<td><?php echo $row['year_of_pub']?></td>
<td><?php echo $row['edition']?></td>
<td><?php echo $row['Author']?></td>
<td><?php echo $row['Price']?></td>
<td><?php echo $row['date']?></td>
</tr>
<?php
}
?>
</table>

</div>
 
</center>
</body>
</html>