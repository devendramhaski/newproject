<?php
include("db.php");
$u = $_POST['username'];
$p = $_POST['password'];

$que = "SELECT * FROM usertable WHERE uname='$u'";
$result=mysqli_query($con, $que);

if(mysqli_num_rows($result)==1)
{
	$data = mysqli_fetch_assoc($result);
	// print_r($data);
	// die();
	if($data['pass']==$p)
	{
		$_SESSION ['fname'] = $data['fname'];
		$_SESSION ['uname'] = $data['uname'];
		$_SESSION ['id'] = $data['id'];
		$_SESSION ['is_user_logged_in'] =true;
		
		header("location:my_account.php");
	}
	
	else
	{
		$_SESSION['msg'] = "Incorrect  Password";
	 	header("location:login.php");
	 }
}
else
{
	$_SESSION['msg'] = "Incorrect Username And Password";
	header("location:login.php");
}

?>