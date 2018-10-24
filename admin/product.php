<?php
include('header.php');
include("db.php");

$con_cate="SELECT * from category ";
$result_cate= mysqli_query($con,$con_cate);

if(! isset($_SESSION['is_admin_logged_in']))
{
	header("location:../index.php");
}
?>
<div id ="content">
<div id="login-box"><h4>Add Product</h4>
				<form action="add_product.php" method="post" enctype="multipart/form-data">
					<table align="center">
									<tr>
										<td>Product_name</td>
										<td align="right"> <input type="text" placeholder="Product_name" class ="input" name="product_name"></td>
									</tr>
									<tr>
										<td>Producy_Image</td>
										<td> <input type="file" name="image" /></td>
									</tr>
									<tr>
										<td>Product_price</td>
										<td> <input type="text" placeholder="Product_price" class ="input" name="product_price"></td>
									</tr>
									<tr>
										<td>Detail</td>
										<td> <textarea placeholder="Product_detail" class ="input" name="detail" cols="22" rows="5"></textarea></td>
									</tr>
									<tr>
										<td>Category</td>
										<td><select  class="input" name="cate">
												<option>select</option>
												<?php
												while($data_cate=mysqli_fetch_assoc($result_cate))
												{?>
												
												<option value="<?php echo $data_cate['id'] ?>"><?php echo $data_cate['category']; ?></option>
												<?php
												}
												?>
											</select>
										</td>
									</tr>
									<tr>
										<td>Discount</td>
										<td> <input type="text" placeholder="Discount" class ="input" name="disc"></td>
									</tr>
									<tr >
										
										<td colspan="2" align="right"><input type="submit" value="Add" name="login" class="btn"></td>
									</tr>
					</table>
				</form>
			</div>
</div>
