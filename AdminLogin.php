<?php
include("config.php");

if(isset($_POST['submit']))
{
	if($_POST['name']=="football" && $_POST['pwd']=="kit")
	{
	     header("location:Admin.php");
	}
	else 
	{
	echo "<script text='text/javascript'>alert('Invalid Authentication');</script>";
	}
}
?>