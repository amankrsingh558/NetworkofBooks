<?php
session_start();
 $email=$_POST['e'];
 $_SESSION['p']='a';
 header('location:pregd.php');
?>