<?php
include('header.php');
include("db.php");
if(! isset($_SESSION['is_admin_logged_in']))
{
	header("location:../index.php");
}
$que_cat=" SELECT * FROM category";

$que_result=mysqli_query($con,$que_cat)
?>
<div id="view_content">
	<div id="inside_view_content">
	<h2>View Category</h2>
	<table align="center" id="tab" width="400">
		<tr>
			<th>S.No.</th>
			<th>CategoryName</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
		<?php
		$n=1;
		while($data_cat = mysqli_fetch_assoc($que_result))
		{ ?>
			<tr>
				<td><?php echo $n ?></td>
				<td><?php echo $data_cat['category'] ?></td>
				<td><a href="edit_category.php?cid=<?php echo $data_cat['id'] ?>" class="edit_btn">Edit</a></td>	
				<td><a href="delete_cat.php?cid=<?php echo $data_cat['id']; ?>" class="delete_btn">Delete</a></td>
			</tr>
		<?php
		$n++;
		}
		?>
		
	</table>
</div></div>
</div>
</body>
</html>