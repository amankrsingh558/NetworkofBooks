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
	<style>
		body{
			background-image:url('chat.jpg')
		}
	</style>
	
</head>
<body>
  
  <?php
   echo "<style>#navbar {
  overflow: hidden;
  background-color: darkorchid;
}



#navbar a:hover {
  background-color: #ddd;
  color: black;
}

#navbar a.active {
  background-color: #4CAF50;
  color: white;
}



.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 170px;
}
</style>";
   echo "<div id='navbar'>";
$seid=$_SESSION['email'];
$foldername=$_SESSION['email'];
//for find friends and

$myname=$_SESSION['myfname'];
	$myname.=$_SESSION['mylname'];
if(file_exists($foldername))
{
	$g=$_SESSION['seoflist'];
	$reid=$_SESSION['e'][$g];
}
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'cdac');
 
 $q="select senderfname,senderlname,seid, reid, time,message from message where  ((seid='$seid' && reid='$reid') || (seid='$reid' && reid='$seid'))";
$j="update message set status='read' where reid='$seid' && seid='$reid'";
mysqli_query($con,$j); 
 $result=mysqli_query($con,$q);
$t=mysqli_num_rows($result);


 $m=0;
 $v=0;
 while($row=mysqli_fetch_assoc($result))
 { $m++;
$k=$row['senderfname'];
$k.=$row['senderlname'];
if(($k!=$myname) &&($v<1))
{
	 $fullname=$row['senderfname'];
	 
	 $fullname.=' ';
	 $fullname.=$row['senderlname'];
	 $v++;
	
	echo "<a href='homechat.php' style='float:right;z-index:1;background-color:red' target='_top'><img src='cross.png' height='20px' width='20px'/></a>";
	 echo "<p align=center style='color:white;padding:5px; font-size:20px'>$fullname</p>";
	
	 
}
	
	
 }
 mysqli_close($con);
  echo "</div>";
 ?>


<?php
echo "<div class='content'>";
$seid=$_SESSION['email'];
$foldername=$_SESSION['email'];
//for find friends and

$myname=$_SESSION['myfname'];
	$myname.=$_SESSION['mylname'];
if(file_exists($foldername))
{
	$g=$_SESSION['seoflist'];
	$reid=$_SESSION['e'][$g];
}
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
	 
	 $time=$row['time'];
	 
	 
	 $myid=$row['seid'];
	 $others_id=$row['reid'];
	 $message=$row['message'];
     
	 
		
       if($myid=="$seid")
          {
	          echo "<style>  .ed {
		      float:right;
			  background-color:#e1c1f0	;
			  border-style:solid;
			  border-color: #666666;
			  border-radius:20px;
			  padding:5px;
	           }
	           </style>";
             // echo "<div class='ed'><a href=''>$fullname</a>";echo "<br>";// have to give link to profile
			 echo "<div class='ed'>";
			 
              echo $message;echo "                    ";
              if($m<$t)
			     {
					 echo "<br>";
                     echo "<a href='#down' id='down' style='font-size:10px;outline:none'>$time</a>"; echo "</div>";echo "<br>";echo "<br>";
					 	echo "</div>";
					echo "<br>";
                  }
              else
                  {
					  echo "<br>";
					echo "<a href='#down' id='down' style='font-size:10px;outline:none'>$time</a>";
					echo "</div>";
					echo "<br>";
	
                  }
	      }
       else
		   {
			   echo "<style>  .re{
		      
			  background-color:white	;
			  border-style:solid;
			  border-color :#666666;
			  width:80%;
			  border-radius:20px;
			  padding:5px;
	           }
	           </style>";
	          //echo"<a href=''>$fullname</a>";echo "<br>";
			  echo "<div class='re'>";
			  
              echo $message;echo "                    ";
              if($m<$t)
			      {
					  echo "<br>";
                       echo "<a href='#down' id='down' style='font-size:10px;outline:none'>$time</a>";echo "<br>";echo "<br>";
					   	echo "</div>";
					echo "<br>";
                  }
              else
                 {
					echo "<br>";
					echo "<a href='#down' id='down' style='font-size:10px;outline:none'>$time</a>";
					echo "</div>";
					echo "<br>";
	
                 }
           }
 } 
 mysqli_close($con);
echo "</div>";
echo "<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById('navbar');
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add('sticky')
  } else {
    navbar.classList.remove('sticky');
  }
}
</script>";
?>

<div name="down"></div>

</body>
</html>