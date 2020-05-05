<?php
session_start();
$_SESSION["scn"]=$_POST["name"];
include("home.html");
?>