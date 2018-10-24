<?php
include('header.php');
include("db.php");
$a = $_GET['pid'];
if(! isset($_SESSION['is_admin_logged_in']))
{
	header("location:../index.php");
}

$con_cate="SELECT * from category ";
$result_cate= mysqli_query($con,$con_cate);

$que_pro = "SELECT * FROM product WHERE id = $a";
$data_pro = mysqli_fetch_assoc(mysqli_query($con, $que_pro));
// print_r($data_pro);
// die;
// echo $data_pro['category'];


?>
<div id ="content">
<div id="login-box"><h4>Update Product</h4>
<form action="update_product.php" method="post">
			<input type="hidden" name="pid" value="<?php echo $a; ?>" />
		<table align="center">
			<tr>
				<td>Product Name</td>
				<td><input value="<?php echo $data_pro['product_name'] ?>" type="text" name="product_name" placeholder="Product Name" class="input"/></td>
			</tr>
			<tr>
				<td>Product Price</td>
				<td><input value="<?php echo $data_pro['product_price'] ?>" type="text" name="product_price" placeholder="Product Price" class="input"/></td>
			</tr>
			<tr>
				<td>Category</td>
				<td><select class="input" name="cate"> 
					<option>Select</option>
					<?php
					while($data_category = mysqli_fetch_assoc($result_cate))
					{ 
						if($data_category['id'] == $data_pro['category'])
						{
							?>
							<option selected="selected" value="<?php echo $data_category['id'] ?>"><?php echo $data_category['category']; ?></option>
							<?php
						}
						else
						{
						?>
							<option value="<?php echo $data_category['id'] ?>"><?php echo $data_category['category']; ?></option>
						<?php
						}
					}
					?>
				</select></td>

			</tr>
			<tr>
				<td>Details</td>
				<td><textarea rows="5" cols="22" name="detail"><?php echo $data_pro['detail']; ?></textarea></td>
			</tr>
			<tr>
				<td>Discount</td>
				<td><input value="<?php echo $data_pro['discount'] ?>" type="text" class="input" name="discount" placeholder="Discount"></td>
			</tr>
			<tr>
				<td id="tb-btn" colspan="2" align="center">
					<input type="submit" value="Update Product" class="btn"></td>
			</tr>
		</table>
				<p class="error">
			<?php
			if(isset($_SESSION['msg']))
			{
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
			?>
		</form>
			</div>
</div>




>s