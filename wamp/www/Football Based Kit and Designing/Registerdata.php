<?php
include("config.php");
if(isset($_POST['Submit']))
{
	$id=$_POST['cname'];
	$name=$_POST['uname'];
	$password=$_POST['password'];
	$gender=$_POST['gender'];
	$contactno=$_POST['contactno'];
	$mailid=$_POST['mailid'];
	$address=$_POST['address'];
	
	$result=mysql_query("insert into Register value('$id','$name','$password','$gender','$contactno','$mailid','$address')");
	echo "<script text='text/javascript'>alert('Customer Registration Successfully');</script>";
	header("location:Register.php");
}
?>