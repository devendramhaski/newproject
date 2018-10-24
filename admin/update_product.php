<?php
include("db.php");
// print_r($_POST);

$a = $_POST['product_name'];
$b = $_POST['product_price'];
$c = $_POST['detail'];
$d = $_POST['cate'];
$f = $_POST['discount'];

$pid = $_POST['pid'];

// die;
 $que = "UPDATE product SET product_name = '$a', product_price = '$b', detail = '$c', category ='$d', discount = '$f' WHERE id = $pid";

mysqli_query($con, $que);
header("location:view_product.php");

?>