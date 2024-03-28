<?php
include("config.php");
if(isset($_POST['Submit']))
{
	$oid=$_POST['oid'];
	$dt=date("d-M-y");
	$uname=$_POST['uname'];
	$fid=$_POST['fid'];
	$type=$_POST['type'];
	$name=$_POST['name'];
	
	$price=$_POST['price'];
	$uqty=$_POST['uqty'];
	$tprice=$_POST['tprice'];
	$cardno=$_POST['cardno'];
	
	$result=mysql_query("insert into Order1 value('$oid','$dt','$uname','$fid','$type','$name','$price','$uqty','$tprice','$cardno','Pending')");
	echo "<script text='text/javascript'>alert('Orderd Successfully');</script>";
	//header("location:AddStudent.php");
}
?>