<?php
include("db.php");
// print_r($_POST);
// die;
$a = $_POST['f_name'];
$d = $_POST['add'];
$e = $_POST['city'];
$f = $_POST['gender'];
$g = $_POST['contact'];

$id = $_SESSION['id'];
 $query = "UPDATE usertable SET fname = '$a', address = '$d', city = '$e', gender = '$f', contact = '$g' WHERE id = $id";

mysqli_query($con, $query);
header("location:my_account.php");
?>