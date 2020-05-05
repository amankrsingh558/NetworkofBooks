 <html>
 <title>
 Edit BookSelf
 </title>
 <head>
 <style>
label{
	
	display:block;
}

span{
	display: inline-block;
	text-align:right;
	width:100px;
	margin-top:50px;
}

	 #mainwrapper{
		 
	
width:480px;
height:120px;
margin-top:150px;
margin-left:500px;
background:white;
padding: 5px;
border-radius:20px;
border: 2px solid #2c3e50;
	 background-color:rgba(125,255,144,.6)
	 }
	 body{
	
background-image:url('otp.jpg');
background-repeat:no-repeat;
background-size:cover;	
	
}



#txtedit{
	width:300px;
	margin:0 auto;
  border-radius:8px ;
	padding:5px;
	font-size:25px;

}



#edit{
	border-radius:8px ;
	font-size:15px;
     width:800px;
	background-color:#33d6ff;
	border-layout:no-focus;
}

	 
 </style>
 </head>
 
 
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

 
 
 </script>
 
 
 
 
<?php
?> 
 <body>
 <div align="center" id="mainwrapper">
  <form method="post" action="edit.php?id=<?php echo $id ?>">
 <label><span><b>Enter OTP:</b></span> 
 <input type="text" id="txtedit" name="genre" value="" />
 </label>
 <br><br>
 <input type="submit" name="editbtn" style="width:80px"   id="edit" value="VERIFY" /> 
 </form>
 </div>
 <?php
 if(isset($_POST['editbtn']))
 {
	 $id=$_GET['id'];
 
 }
 ?>

 
 </body>
 </html>