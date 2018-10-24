<?php
include("db.php");
// print_r($_POST);die;
$name = $_POST['cate_name'];
$a = $_POST['cid'];
$que = "UPDATE category SET category = '$name' WHERE id = $a";
mysqli_query($con, $que);
header("location:view_category.php");
?>