<?php
include("config.php");
if(isset($_POST['Submit']))
{
	$id=$_POST['id'];
	$type=$_POST['cat'];
	$name=$_POST['name'];
	$link=$_POST['link'];
	
	
	$result=mysql_query("insert into HockeyVideo value('$id','$type','$name','$link')");
	echo "<script text='text/javascript'>alert('Hockey Video  details Uploaded');</script>";
	header("location:HockeyVideo.php");
}
?>