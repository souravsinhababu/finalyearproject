<?php
include("config.php");
if(isset($_POST['Submit']))
{
	$id=$_POST["id"];
	$name=$_POST["name"];
	$age=$_POST["age"];
	$sports=$_POST["sports"];
	$phone=$_POST["phone"];
	$mail=$_POST["mail"];
	$description=$_POST["description"];
	$experience=$_POST["experience"];
	$achievements=$_POST["achievements"];
	
	$tempphoto=$_FILES["photo"]["tmp_name"];
	$path="trainer/".$id.".jpg";
	move_uploaded_file($tempphoto,$path);

	$result=mysql_query("insert INTO trainer VALUES('$id','$name','$age','$sports','$phone','$mail','$description','$experience','$achievements','$path') ");

	echo "<script text='text/javascript'>alert('FootBall Trainer Added Successfully');</script>";
}
?>

