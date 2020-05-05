
		                 <?php
					  session_start();
					  $foldername=$_SESSION['email'];
					  
					   $_SESSION['seoflist']=0;
						 $_SESSION['usename']=$b;
						 header('location:../chat.html');
						 
						 fwrite($fh1,$string_data);
						 fclose($fh1);
						 ?>