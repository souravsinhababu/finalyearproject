<?php
include("config.php");
if(isset($_POST['Submit']))
{
	$oid=$_POST['oid'];
		
	$result=mysql_query("update Order1 set Status='Delivered' where OrderID='$oid'");
	echo "<script text='text/javascript'>alert('Order Delivered Successfully');</script>";
	//header("location:AddStudent.php");
}
?>