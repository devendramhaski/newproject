<?php
// echo "hello";
$a = $_GET['pid'];
if(isset($_COOKIE['pid']))
{
	$b = $_COOKIE['pid'];
	$c = $a."#".$b;
	setcookie("pid", $c, time()+(3600*24));
	
}
else
{
	setcookie("pid", $a, time()+(3600*24));
}



header("location:index.php");
?>