<?php
include("db.php");
$a = $_GET['pid'];
$que = "DELETE FROM product WHERE id = '$a'";
mysqli_query($con, $que);
header("location:view_product.php");

?>