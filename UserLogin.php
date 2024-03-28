<?php
include("config.php");
session_start();
unset($_SESSION['uname']);
if(isset($_POST['submit']))
{
echo "<script text='text/javascript'>alert('11Login Failed...');</script>";

		$name=$_POST['name'];
		$pass=$_POST['pwd'];
		
		$sql = "select * from Register where UserName ='$name' and Password='$pass'";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		$count = mysql_num_rows($result);
		
		if ($count == 1)
		{
		 $_SESSION['uname'] = $name;
		 header("location:User.php");
		 }
		 else
		 {
		 //header ("location:Login.php");
		 echo "<script text='text/javascript'>alert('Login Failed...');</script>";
		 }
	
}
echo "<script text='text/javascript'>alert('12Login Failed...');</script>";
?>
