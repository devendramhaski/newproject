<?php
// echo $_FILES;
// die;
include("db.php");
$name = $_FILES['image']['name'];
$tmpname = $_FILES['image']['tmp_name'];
$size = $_FILES['image']['size'];


$arr = explode(".",$name);
$ext = end($arr);
$new_name = rand(10000, 100000).time().".".$ext;

move_uploaded_file($tmpname, "../images/".$new_name);
// // print_r($_POST);
// die;
if($ext == "jpg" || $ext == "png" || $ext == "gif" || $ext =="jpeg")
{

	if($size <= (1024*1024))
	{
$a=$_POST['product_name'];
$b=$_POST['product_price'];
$c=$_POST['cate'];
$d=$_POST['detail'];
$f = $_POST['disc'];

 $query = "INSERT INTO product (product_name, product_price, category, detail, discount, product_image) VALUES ('$a', '$b', '$c', '$d','$f','$new_name')";
// die;
mysqli_query($con, $query);

header("location:product.php");


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