<?php
// print_r($_COOKIE);
// 	die;
include('db.php');
include("header.php");

?>
<div id="content">
<div id ="inside-content">
<h1>Items In Your Cart</h1>
						<!-- <a  align = "right" href="clear_cart.php">Clear Cart</a> -->
					<div id="cart">
					<table border="1" align="center" width="810px" >
					<tr>
						<th>S.No.</th>
						<th>Product Name</td>
						<th>Image</th>
						<th>Price</th>
					</tr>
					<?php
					if (isset($_COOKIE['pid']))
					{
					$a = $_COOKIE['pid'];
					$arr = explode("#", $a);
					$n=1;
					$total = 0;
					foreach($arr as $x)
					{
						$que_item = "SELECT * FROM product WHERE id=$x";
						$data_item = mysqli_fetch_assoc(mysqli_query($con, $que_item));

						$total += $data_item['product_price'];
						?>
						<tr>
							<td><?php echo $n; ?></td>
							<td><?php echo $data_item['product_name']; ?></td>
							<td><img src="images/<?php echo $data_item['product_image']; ?>" height="200" width="200"/></td>
							<td><?php echo $data_item['product_price']; ?></td>
						</tr>
						<?php
						$n++;
					}
				}
					?>
					<tr>
						<td colspan="3" align="right">Total</td>
						<td><?php echo $total; ?></td>
					</tr>
					<tr>
						<td><a href="clear_cart.php">Clear Cart</a></td>
					</tr>
				</table>
				</div>
				</div>
</div>