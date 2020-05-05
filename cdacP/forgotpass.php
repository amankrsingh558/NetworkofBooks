<?php
session_start();
$_SESSION['aa'];
if($_SESSION['bb']==1){
	  $error=$_SESSION['ee'];
	 echo "<script type='text/javascript'>alert(\"$error\");</script>";
	 $_SESSION['bb']=0;
    }
	$_SESSION['jj']=9;
?>

<html>
<link rel="stylesheet" type="text/css" href="psqStyle.css">
<br><br>
<br><br>
<br><br>
 <div align="center" id="mainwrapper">
  <form method="post" action="betweenforgotpass.php"">
 <h2 align="center">Forgot Password</h2>
 <br><br>
 <br><br>
 <label><span><b>Enter username</b></span> &nbsp &nbsp &nbsp
 <input type="text" name="answer"  />
 </label>
 <p><?php  if($_SESSION['aa']==1) {
	 echo $_SESSION['e']; $_SESSION['aa']=0;}
	 ?></p>
 <br><br>
 <br>
 <input type="submit" name="editbtn" style="width:80px"   name="edit" value="Update" /> 
 </form>
 
 

 </div>
</html>