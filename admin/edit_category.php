<?php
include('header.php');
include("db.php");
if(! isset($_SESSION['is_admin_logged_in']))
{
	header("location:../index.php");
}
$a = $_GET['cid'];
$que_cate = "SELECT * FROM category WHERE id = $a";

$data_cate = mysqli_fetch_assoc(mysqli_query($con, $que_cate));

// print_r($data_cate);


?>

<div id="content">

			<div id="login-box"><h4>Add Category</h4>
				<form action="update_category.php" method="post">
					<input type="hidden" name="cid" value="<?php echo $a; ?>" />
		<table align="center">
			<tr>
				<td>UpdateCategory</td>
				<td><input value="<?php echo $data_cate['category'] ?>" type="text" name="cate_name" class="input"/></td>
			</tr>
			
			<tr>
				<td id="tb-btn" colspan="2" align="center">
					<input type="submit" value="Update Category" class="btn"></td>
			</tr>
		</table>
				</form>
			</div>
</div>