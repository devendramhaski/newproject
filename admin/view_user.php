<?php
include('header.php');
include("db.php");
if(! isset($_SESSION['is_admin_logged_in']))
{
	header("location:../index.php");
}
$que_user=" SELECT * FROM usertable";

$result_user=mysqli_query($con,$que_user)
?>
<div id="view_content">
	<div id="inside_view_content">
	<h2>View Users</h2>
	<table align="center" id="tab" width="400">
		<tr>
			<th>S.No.</th>
			<th>FullName</th>
			<th>UserName</th>
			<th>Contact</th>
			<th>City</th>
			<!-- <th>Edit</th> -->
			<th>Delete</th>
		</tr>
		<?php
		$n=1;
		while($data_user = mysqli_fetch_assoc($result_user))
		{ ?>
			<tr>
				<td><?php echo $n ?></td>
				<td><?php echo $data_user['fname'] ?></td>
				<td><?php echo $data_user['uname'] ?></td>
				<td><?php echo $data_user['contact'] ?></td>
				<td><?php echo $data_user['city'] ?></td>
				<!-- <td><a href="#" class="edit_btn">Edit</a></td> -->
				<td><a href="detail.php?uid=<?php echo $data_user['id'] ?>" class="delete_btn">Detail</a></td>
			</tr>
		<?php
		$n++;
		}
		?>
		
	</table>
</div>
</div>
</body>
</html>