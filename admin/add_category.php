<?php
$con =mysqli_connect("localhost","root","","newproject");
$a=$_POST['cate'];

$query="INSERT INTO category (category) VALUES ('$a') ";

 $result=mysqli_query($con,$query);
 header("location:category.php");
?>