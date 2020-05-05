<?php
   session_start();
   $_SESSION['q']=0;
   unset($_SESSION['scn']);
   header("location:signup_page.php");
?>