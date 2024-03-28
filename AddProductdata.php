<?php
include("config.php");
if(isset($_POST['Submit']))
{
	$id=$_POST["id"];
	$cat=$_POST["cat"];
	$name=$_POST["name"];
	$brand=$_POST["brand"];
	
	$price=$_POST["price"];
	$description=$_POST["description"];
	//$photo=$_FILES["photo"]["name"];
	$tempphoto=$_FILES["photo"]["tmp_name"];
	$path="KIT/".$id.".jpg";
	move_uploaded_file($tempphoto,$path);
	$result=mysql_query("insert INTO Product VALUES('$id','$cat','$name','$brand','$price','$description','$path') ");
	echo "<script text='text/javascript'>alert('FootBall KIT Added Successfully');</script>";
}
?>
