<html>
<head>
<style>
ul{
	list-style-type:none;
	position:fix;
}
li:hover{
	BORDER-top:2PX SOLID #ae5bd7;
	background-color:#ebd6f5;
}
li{
	padding:10px;
}
a{
	text-decoration:none;
	color:black;
	font-size:25px;
}
</style>
</head>
<?php
session_start();
$b=$_SESSION['email'];


//connecting to database
$con=mysqli_connect('localhost','root');
 mysqli_select_db($con,'cdac');

$q="select distinct seid, senderfname, senderlname from message where reid='$b'";
$result=mysqli_query($con,$q);
$m=mysqli_num_rows($result);
$y=0;
	while($row=mysqli_fetch_assoc($result))
	{
		$fname[$y]=$row ["senderfname"];
		$lname[$y]=$row ["senderlname"];
	
	    $email[$y]=$row["seid"];
	   
         $y++;	    
	}

$foldername=$_SESSION['email'];
if(!file_exists($foldername))
{
mkdir($foldername);
}

	$_SESSION['b']=$fname;
	$_SESSION['c']=$lname;

	$_SESSION['e']=$email;
    $p=1;
	$w=0;
	$k[0]="";
	echo"<h1 align='center'>Message From</h1>";
	echo"<ul>";
	for($g=0;$g<$m;$g++)
	{
	 $fname[$g]=$_SESSION['b'][$g];
	 $lname[$g]=$_SESSION['c'][$g];
	 $fullname=$fname[$g];
	 $fullname.=' ';
	 $fullname.=$lname[$g];
	  
	
	// $foldername1=$foldername;
	 $foldername2=$foldername;
	// $foldername1.='profile';
	 $foldername2.='message';	
	 
	 
	 //submit the form for open the message paeg
	     echo " 
		   
	   <li><a href='$foldername/$foldername2$g.php' target='chat'>$fullname</a></li>";	 
        echo "</li>";
		
		
		//creating new file	for displaying profile of the user
		$myfile="message$g.php";
        $fh=fopen($foldername.'/'.$foldername.$myfile,'w');
        $stringData="
		                 <?php
					  session_start();
					  \$foldername=\$_SESSION['email'];
					  
					   \$_SESSION['seoflist']=$g;
						 \$_SESSION['usename']=\$b;
						 header('location:../chat.html');
						 
						 fwrite(\$fh1,\$string_data);
						 fclose(\$fh1);
						 ?>"
						 
						 
						 ;
					  
					   
					  
					  
					  
  fwrite($fh,$stringData);
  fclose($fh);
					  					  
				  
	}
echo "</ul>"	
					  
					  
					  
					  
			  
					  
					  
					  
					  
					  
					  
					  
					  

?>