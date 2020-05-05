 <html>
 <title>
 Edit BookSelf
 </title>
 <head>
 <style>

body{
		font-family:arial;
		margin:0px;
		background-image:url('339484.jpg');
		background-repeat:no-repeat;
		background-size:100%;
		height: 800px;
	}
label{
	
	display:block;
}

span{
	display: inline-block;
	text-align:right;
	width:100px;
}

	 #mainwrapper{
width:480px;
height:580px;
margin: 0 auto;
background:white;
padding: 5px;
border-radius:10px;
border: 2px solid #2c3e50;
background-image:url('bookshelf.jpg');
top:150px;
position: absolute;
left: 450px;
}

input{
	width:300px;
	margin:0 auto;
  border-radius:8px ;
	padding:5px;

}



#edit{
	background-color:darkorchid;
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
	width: 210px;
}
#sub{
	border-radius:10px;
	border-style:none;
	background-color:darkorchid;
	color:white;
	padding:10px;
	cursor: pointer;
	width: 60px;
}

</style>

 
 
 <script>
 
 function  edit()
{
var select=document.getElementById('selectid');
for(i=2000;i>=1850;i--)
{
var opt=document.createElement('OPTION');

opt.innerHTML=i;
select.add(opt);
}}

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
 
$con=mysqli_connect('localhost','root','');  
 mysqli_select_db($con,'bookselfdb');
 if($con)
 {
echo "connected";	 
 }
 
$edit=$_GET['id'];


$select="select * from bookselftable where sno='$edit' ";
$run=mysqli_query($con,$select);
$row=mysqli_fetch_array($run);
$id=$row['sno'];
$genre=$row['Genre'];
$booktitle=$row['BookTitle'];
$publication=$row['Publication'];
$year_of_pub=$row['year_of_pub'];
$edition=$row['edition'];
$author=$row['Author'];
$price=$row['Price'];
  echo $genre; 
  echo "hello";
?> 
 

 
 

 </head>
 
 <body>

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
	<li style="float:left"><a href="Logout.htm">Logout</a></li>
	</ul>
	</li>
	<li><a href="#People" onclick="People()">People</a></li>
	<li><a href="Home.html" onclick="home()">Home</a></li>
	<li style="float:left"><p style="font-size:60px;margin-top:0px;font-family:Bradley Hand ITC"><b>NOB</b></p></li>
	<li style="float:left;padding:20px"><form   action="search1.php" method="POST" />
      <input type="text"  style="font-type:arial" id="searchBox" name="match" placeholder="Search..." autocomplete="off" />
     <input type="submit" name="submit" value="Search" id="sub"/>
    </form>
	</li>
	</ul>
	<hr>





 

 <div align="center" id="mainwrapper">

  <form method="post" action="edit.php?id=<?php echo $id ?>">

 <h2 align="center">Edit Your Bookshelf</h2>
 
 <label><span><b>Genre:</b></span> 
 <input type="text" name="genre" value="<?php echo $genre;  ?>" />
 </label>
 <br><br>
 <label><span><b>Book Title:</b></span> 
 <input type="text" name="booktitle" value="<?php echo $booktitle;  ?>" />
 </label>
 <br><br>
 <label><span><b>Publication:</b></span> 
 <input type="text" name="publication" value="<?php echo $publication;?>" />
 </label>
 <br><br>
 

 
 
 
 <label><span><b>Year of Publication:</b></span> 
 <input type="text" name="year_of_pub" value="<?php echo $year_of_pub;?>" />
 </label>
 <br><br>
 <label><span><b>Edition:</b></span> 
 <input type="text" name="edition" value="<?php echo $edition;?>" />
 </label>
 <br><br>
 
 <label><span><b>Author:</b></span> 
 <input type="text" name="author"  value="<?php echo $author; ?>"  />
 </label>
 <br>
 <br>
 <label><span><b>Price:</b></span> 
 <input type="text" name="price" value="<?php echo $price; ?>"   /><br><br></label> 
 <br>
 <input type="submit" name="editbtn" style="width:80px"   id="edit" value="Update" /> 
 </form>

 </div>
 
 
 
 <?php
 if(isset($_POST['editbtn']))
 {
	 $id=$_GET['id'];
 $genre1=$_POST['genre'];
 $booktitle1=$_POST['booktitle'];
 $publication1=$_POST['publication'];
 $year_of_pub1=$_POST['year_of_pub'];
 $edition1=$_POST['edition'];
 $author1=$_POST['author'];
 $price1=$_POST['price'];
 
 
 $update="update bookselftable set Genre='$genre1',BookTitle='$booktitle1', Publication='$publication1',year_of_pub='$year_of_pub1',edition='$edition1',Author='$author1',Price='$price1' where sno='$id'";
$run=mysqli_query($con,$update);
if($run)	
  
 header("refresh:0;url=account.php");

 }
 
 ?>

 
 </body>
 </html>