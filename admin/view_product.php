<?php
include('header.php');
include("db.php");
if(! isset($_SESSION['is_admin_logged_in']))
{
	header("location:../index.php");
}
$que_pro=" SELECT * FROM product";

$result_pro=mysqli_query($con,$que_pro)
?>
<div id="view_content">
	<div id="inside_view_content">
	<h2>View Users</h2>
	<table align="center" id="tab" width="400">
		<tr>
			<th>S.No.</th>
			<th>ProductName</th>
			<th>Price</th>
			<th>Category</th>
			<th>Discount</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
		<?php
		$n=1;
		while($data_pro = mysqli_fetch_assoc($result_pro))
		{ ?>
			<tr>
				<td><?php echo $n ?></td>
				<td><?php echo $data_pro['product_name'] ?></td>
				<td><?php echo $data_pro['product_price'] ?></td>
				<td><?php echo $data_pro['category'] ?></td>
				<td><?php echo $data_pro['discount'] ?></td>
				<td><a href="edit_product.php?pid=<?php echo $data_pro['id'];?>" class="edit_btn">Edit</a></td>
				<td><a href="delet_product.php?pid=<?php echo $data_pro['id'] ?>" class="delete_btn">Delete</a></td>
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