<html>

<link rel="stylesheet" type="text/css" href="psqStyle.css">
<br><br>
<br><br>
<br><br>
 <div align="center" id="mainwrapper">
  <form method="post" action="betweenchngsq.php"">
 <h2 align="center">Change Security Question  : </h2>
 <br><br>
 <label><span><b></b></span> 
 </label>
 <br><br>
 <label><span><b>Enter your password :</b></span> 
 <p>
 <?php
 session_start();
     if(($_SESSION['dd']>0)){
		 echo "wrong password";
	 }
	 
 ?></p>
 <input type="password" name="password"  />
 </label>
 <br><br>
 <br>
 <input type="submit" name="editbtn" style="width:80px"   name="edit" value="Update" /> 
 </form>
 
 

 </div>
</html>