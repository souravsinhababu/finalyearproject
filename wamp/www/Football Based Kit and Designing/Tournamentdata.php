<?php
include("config.php");
if(isset($_POST['Submit']))
{
	$id=$_POST['id'];
	$type=$_POST['cat'];
	$name=$_POST['name'];
	$addr=$_POST['addr'];
	$date=$_POST['date'];
	$desc=$_POST['desc'];
	
	
	$result=mysql_query("insert into Tournament value('$id','$type','$name','$addr','$date','$desc')");
	echo "<script text='text/javascript'>alert('Tournament  details Saved');</script>";
	header("location:Tournament.php");
}
?>