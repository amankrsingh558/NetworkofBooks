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
}

	 #mainwrapper{
width:480px;
height:580px;
margin: 0 auto;
background:white;
padding: 5px;
border-radius:10px;
border: 2px solid #2c3e50;
background-color:#ebebe0;

}

body{
	

	
}



input{
	width:300px;
	margin:0 auto;
  border-radius:8px ;
	padding:5px;

}



#editbtn{
	background-color:#80ff80;
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
 

 
 

 
 
 <body>
 

 <div align="center" id="mainwrapper">
  <form method="post" action="edit.php?id=<?php echo $id ?>">
 <h2 align="center">Edit Your Bookself</h2>
 
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
 <input type="submit" name="editbtn" style="width:80px"   name="edit" value="Update" /> 
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