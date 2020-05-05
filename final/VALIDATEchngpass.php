<html>
<head>
<title>Change Password</title>
<style>
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
#edd{
	border-radius:10px;
	border-style:none;
	background-color:black;
	color:red;
	padding:5px
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
textarea:focus {
    outline:none;
}
td{
	padding:20px
}
select{
	padding:10px;
	border-radius:10px;
}
#tt{
	padding:10px;
	border-radius:10px;
	border-style:solid;
	border-color:grey;
}
select:focus{
	outline:none
}
input:focus{
	outline:none;
}
#ed{
	border-radius:10px;
	border-style:none;
	background-color:darkorchid;
	color:white;
	padding:10px
}
table{
	border-radius:10px;
}
</style>
<script>
function val1(){
		var x=document.getElementById("ps").value
	
	 if(x.length<8){
		 alert("password must be 8 characters long");
		location.reload();
	 }
}
function chk(){
	var pass=document.getElementById("ps").value;
	var cnpass=document.getElementById("cnps").value;
	if(pass!=cnpass){
		alert("PASSWORD DIDN'T MATCH");
	      location.reload();	
	}
	else
		if(cnpass.length<8){
		 alert("password must be 8 characters long");
		location.reload();
	 }
}
</script>
</head>
<body>

	<li style="float:left"><p style="font-size:60px;margin-top:0px;font-family:Bradley Hand ITC"><b>NOB</b></p></li>
	
	<iframe src="" name="chat" style="width:250px;height:500px;display:inline;border:none;float:right" marginwidth="0" marginheight="0" frameborder="1"></iframe>
 <div align="center" id="mainwrapper">
  <form method="post" action="updatepass.php">
<table align="center" cellspacing="0" style="border-collapse:collapse;background-color:white;box-shadow:0px 8px 18px 0px rgba(0,0,0,0.2);"> <tr><td><h2 align="center">Change Password</h2></td></tr>
 <tr><td><label><span><b>Enter new password :</b></span> </td></tr>
 <tr><td><input type="password" id="ps" onchange="val1()" name="passwd"  /></td></tr>
 </label>
 <br><br>
 <tr><td> <label><span><b>Confirm password :</b></span></td></tr>
 <tr><td><input type="password" id="cnps" onchange="chk()"  name="cnfpasswd"  /></td></tr>
 </label>

 <br><br>
 <tr><td> <input type="submit" value="Update" id="ed"></td></tr>
   <tr><td colspan="2" style="text-align:center"><a href="signup_page.php"><input type="button" name="editbtn" style="width:80px" id="edd" name="edit" value="close" /></a> </tr></td>

 </table>
 </form>
 
 

 </div>
 </body>
</html>