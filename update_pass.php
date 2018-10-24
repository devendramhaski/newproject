<?php
include("db.php");
if(! isset($_SESSION['is_user_logged_in']))
{
	header("location:login.php");
}
$a = $_POST['old_pass'];
$b = $_POST['new_pass'];
$c = $_POST['cn_pass'];
// print_r($_POST);
// die;
$id = $_SESSION['id'];
 $que = "SELECT * FROM usertable WHERE id = $id";

$data = mysqli_fetch_assoc(mysqli_query($con, $que));

if($data['pass']==$a)
{
	if($b == $c)
	{
		mysqli_query($con, "UPDATE usertable SET pass = '$b' WHERE id = $id");
		header("location:profile.php");
	}
	else
	{
		$_SESSION['msg']="New Password and Confirm Password is not Matched !";
		header("location:change_pass.php");		
	}
}
else
{
	$_SESSION['msg']="Current Password is not Matched !";
	header("location:change_pass.php");
}



?>