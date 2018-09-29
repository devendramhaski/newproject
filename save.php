<?php
$con = mysqli_connect("localhost","root","","newproject");
$a=$_POST['f_name'];
$b=$_POST['u_name'];
$c=$_POST['pass'];
$d=$_POST['add'];
$e=$_POST['city'];
$f=$_POST['gender'];
$g=$_POST['contact'];

 $query = "INSERT INTO usertable (fname,uname,pass,address,city,gender,contact) VALUES ('$a','$b','$c','$d','$e','$f','$g')";
mysqli_query($con, $query);
// header("location:signup.php");
?> 