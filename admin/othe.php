<?php
$con =mysqli_connect("localhost","root","","newproject");
session_start();
$u = $_POST['username'];
$p = $_POST['password'];
$que = "SELECT * FROM admin WHERE username = '$u'";
$result = mysqli_query($con, $que);
if(mysqli_num_rows($result)==1)
{
	$data = mysqli_fetch_assoc($result);
	// print_r($data);
	// die();
	if($data['password']==$p)
	{
		$_SESSION['is_admin_logged_in']=true;
		header("location:dashboard.php");
	}
	else
	{
		$_SESSION['msg']="This Password not Correct !";
		header("location:../index.php");		
	}
}
else
{
	$_SESSION['msg']="This Username and Password not Correct !";
	header("location:../index.php");
}
?>