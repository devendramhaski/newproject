<?php
include("db.php");

$name = $_FILES['image']['name'];
$tmpname = $_FILES['image']['tmp_name'];
$size =$_FILES['image']['size'];

$arr = explode(".",$name);
$ext = end($arr);
$new_name = rand(10000, 100000).time().".".$ext;

if($ext == "jpg" || $ext == "png" || $ext == "gif" || $ext =="jpeg" || $ext == "bmp" || $ext =="JPG")
{

	if($size <= (1024*1024))
	{
 	$a = $_POST['status'];
	 move_uploaded_file($tmpname, "../simages/".$new_name);
 	$query = "INSERT INTO sliderimage (name) VALUES ('$new_name')";
 	
 	// die;
 	mysqli_query($con, $query);
 	header("location:slider_image.php");


	}
	else
	{
		$_SESSION['msg']="This file is too large";
		header("location:add_product.php");		
	}	
}
else
{
	$_SESSION['msg']="This file type not allowed";
	header("location:add_product.php");
}
?>