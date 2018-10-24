<?php
include("db.php");
if(! isset($_SESSION['is_admin_logged_in']))
{
	header("location:../index.php");
}


include("header.php");
$a = $_GET['uid'];
$que = "SELECT * FROM usertable WHERE id = $a";
$result = mysqli_query($con, $que);
$data_user = mysqli_fetch_assoc($result);

// print_r($data_user);
?><div id="view_content">
	<div id="inside_view_content">

	<h2>Full Detail of User</h2>
	<table id="tab" align="center">
		<tr>
			<td>Full Name</td>
			<td><?php echo $data_user['fname'] ?></td>
		</tr>
		<tr>
			<td>Username</td>
			<td><?php echo $data_user['uname'] ?></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><?php echo $data_user['address'] ?></td>
		</tr>
		<tr>
			<td>Contact</td>
			<td><?php echo $data_user['contact'] ?></td>
		</tr>
		<tr>
			<td>City</td>
			<td><?php echo $data_user['city'] ?></td>
		</tr>
		<tr>
			<td>Gender</td>
			<td><?php echo $data_user['gender'] ?></td>
		</tr>

	</table>
</div>
</div>
</body>
</html>