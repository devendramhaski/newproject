<?php
include("db.php");
$a = $_GET['cid'];
$que_cate = "DELETE FROM category WHERE id='$a'";
mysqli_query($con, $que_cate);

$que_pro = "DELETE FROM product WHERE category='$a'";
mysqli_query($con, $que_pro);



header("location:view_category.php");

?>
