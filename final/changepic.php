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
</script>
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

</style>

 <script>
       function chngimg(v){
	      var fr=new FileReader();
		  fr.readAsDataURL(v.files[0]);
		  fr.onload=function(oFREvent){
		document.getElementById("im").src= oFREvent.target.result;
	};
	   }
  </script>

</head>
<body>
	
	<li style="float:left"><p style="font-size:60px;margin-top:0px;font-family:Bradley Hand ITC"><b>NOB</b></p></li>
	


<form action="picchange.php" method="post" enctype="multipart/form-data" >


	
<div style="border:1px solid black;width:275px;height: 375px;position: fixed;left:510px;top:200px;padding: 15px;background-image: url('bookshelf.jpg');border-radius: 10px;">
  <p style="align:center;font-size: 25px;text-align: center;color: blue;">Change Profile Picture</p><br/>

  <div style="position: fixed;left:575px;top:270px;width:200px;padding: 15px;">
  <img src="user.png" style="border-radius:50%;height:150px;width:150px;" id="im"></br>
      <input  type="file" value="Upload Image" id="fl" name="changepic" onchange="chngimg(this)">
 <br><br><br><br>
 <input type="submit" value="Change image" name="submit" style="border:2px solid black; border-radius:12px;font-size:20px;background-color:darkorchid;">
</div>    
 </div>
	  


</form>
</body>

</html>