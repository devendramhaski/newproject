<?php
include('db.php');
 $a=$_GET['$z'];
 $que="select * from sliderimage where id='$a'";
 $data=mysqli_fetch_assoc(mysqli_query($con,$que));
 if($data['status']==0){

$que2="update sliderimage set status='1' where id='$a'";
mysqli_query($con,$que2);
header('location:slider_image.php');
 	
 }
 else{
 $que3="update sliderimage set status='0' where id='$a'";
mysqli_query($con,$que3);
header('location:slider_image.php');

}

?>