<?php
session_start();
if(!isset($_SESSION['q']))
header('location:signup_page.php');
?>
<!DOCTYPE html>
<html>
<head>

    
	<style>
	   a {
		   text-decoration:none;
	   }
	</style>
	<script type="text/javascript">
	window.onload=function()
	{
		document.getElementById('down').click();
	}
	</script>
	
</head>
<body bgcolor="lightgreen">
  
  <?php

$foldername=$_SESSION['email'];
//for find friends and


if(file_exists($foldername))
{
	$g=$_SESSION['seoflist'];
	$reid=$_SESSION['e'][$g];
}
/*else{
	$k=$_SESSION['friendid'];
$reid=$k;

}*/
$seid=$_SESSION['email'];





$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'cdac');
 
 $q="select senderfname,senderlname,seid, reid, time,message from message where  ((seid='$seid' && reid='$reid') || (seid='$reid' && reid='$seid'))";
$j="update message set status='read' where reid='$seid' && seid='$reid'";
mysqli_query($con,$j); 
 $result=mysqli_query($con,$q);
$t=mysqli_num_rows($result);


 $m=0;
 while($row=mysqli_fetch_assoc($result))
 { $m++;
	 $fullname=$row['senderfname'];
	 $time=$row['time'];
	 $fullname.=' ';
	 $fullname.=$row['senderlname'];
	 $myid=$row['seid'];
	 $others_id=$row['reid'];
	 $message=$row['message'];
     
	 

       if($myid=="$seid")
          {
	          echo "<style>  .ed {
		      float:right;
	           }
	           </style>";
              echo "<div class='ed'><a href=''>$fullname</a>";echo "<br>";// have to give link to profile
              echo $message;echo "                    ";
              if($m<$t)
			     {
                     echo $time; echo "</div>";echo "<br>";echo "<br>";
                  }
              else
                  {
					echo "<a href='#down' id='down'>$time</a>";
					echo "</div>";
					echo "<br>";echo "<br>";
	
                  }
	      }
       else
		   {
	          echo"<a href=''>$fullname</a>";echo "<br>";
              echo $message;echo "                    ";
              if($m<$t)
			      {
                       echo $time;echo "<br>";echo "<br>";
                  }
              else
                 {
					echo "<a href='#down' id='down'>$time</a>";

					echo "<br>";echo "<br>";
	
                 }
           }
 } 
 mysqli_close($con);

?>

<div name="down"></div>

</body>
</html>