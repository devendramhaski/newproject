<?php
include("db.php");
include("header.php");
$que_pro="SELECT * FROM product";
if (isset($_GET['view_by_category']))
{
	$a=$_GET['view_by_category'];
	$que_pro="SELECT * from product where category=$a";
}
$pro_result=mysqli_query($con,$que_pro);
?>
<div id="content"> 
	<div id="inside-content"> 
	<?php
	while ($pro_data=mysqli_fetch_assoc($pro_result))
	 {
 					$price = $pro_data['product_price'];
					$dis = $pro_data['discount'];
					$a = $price*$dis/100;

					$new_price = $price-$a;

	?>

					<div class="product-box">
						<span class="discount"><?php echo $pro_data['discount']?> % Off</span>
					
						<img src="images/<?php echo $pro_data['product_image'];?>" />
					
						<div class="bottam_box">
							<p><?php echo $pro_data['product_name']?></p>
							<span class="old-price">&#8377 <?php echo $pro_data['product_price']?></span>
							<span class="new-price">&#8377 <?php echo $new_price?></span><br/>
						
							<a href="add_to_cart.php?pid=<?php echo $pro_data['id'] ?>">Add to cart</a>
							<a href="#" id="buy">Buy</a>
						</div>
						
					</div>
					
<?php
}

?>	
	</div>
</div>

<?php
include("footer.php")
?>





