<?php
session_start();
$_SESSION['bb'];
?>
<html>
<link rel="stylesheet" type="text/css" href="psqStyle.css">
<br><br>
<br><br>
<br><br>
 <div align="center" id="mainwrapper">
  <form method="post" action="betweenchngpass.php"">
 <h2 align="center">Confirm this is YOU</h2>
 <br><br>
 <label><span style="float:left"><b> &nbsp &nbsp &nbsp Select security question</b></span> 
 <select name="seq" >
     			<option>what is your pet name</option>
				<option>what is your favourite dish</option>
				<option>what is your favourite color</option>
				<option>what is your nick name</option>
				<option>which is your first school</option>
				<option>who is your favorite player</option>
				<option>which country you like most</option>
				<option>what is your hobbie</option>
				<option>what is name of your favorite author</option>

 </select>
 </label>
 <br><br>
 <label><span><b>Enter answer</b></span>  <p><?php  if($_SESSION['bb']==1) {
	  header('location:forgotpass.php');}
	 ?></p>&nbsp &nbsp &nbsp
 <input type="text" name="answer"  />
 </label>
 <br><br>
 <br>
 <input type="submit" name="editbtn" style="width:80px"   name="edit" value="Update" /> 
 </form>
 
 

 </div>
</html>