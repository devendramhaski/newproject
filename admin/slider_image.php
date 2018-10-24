<?php
// print_r($_COOKIE);
// die;

include("db.php");
include('header.php');
if(! isset($_SESSION['is_admin_logged_in']))
{
	header("location:../slider_image.php");
}
?>

<div id="content">

			<div id="login-box"><h4>Add Slider Image</h4>
				<form enctype="multipart/form-data" action="add_slider_image.php" method="post">
					<table align="center">
									<tr>
										<td>Add_Image</td>
										<td> <input type="file" name="image"></td>
									</tr>

									
									<tr >
										
										<td colspan="2" align="right"><input type="submit" value="Add Image" name="login" class="btn"></td>
									</tr>
					</table>
									<p class="error"></p>
									<?php
									if(isset($_SESSION['msg']))
										{
												echo $_SESSION['msg'];
												unset($_SESSION['msg']);
										}
									?>
			
			</form>
			</div>
			<div id="cart">

			<?php
			$que="SELECT * FROM sliderimage ";
			$result =mysqli_query($con, $que);
			$n=1;
			?>

			<table align="center" class="cart" width="600px" border="1px">
				<tr>
					<th>S.No</th>
					<th>Image</th>
					<th>Status</th>
					<th>Change</th>
				</tr>
				<?php
					if (isset($_COOKIE['pid']))
					{
					$a = $_COOKIE['pid'];
				
					$arr = explode("#", $a);
					
			}
						?>
					<?php 
					while($data=mysqli_fetch_assoc($result))
					{
						?>
							<tr>
							<td><?php echo $n; ?></td>
							<td><img src="../simages/<?php echo $data['name']; ?>" height="200" width="200"/></td>
							<td><?php echo $data['status']; ?></td>
							<td><a href="chnage_status.php?$z=<?php echo $data['id']; ?>">Change</a></td>

					</tr>
				<?php
				$n++;
			}
					
				
				?>

		</table>
			</div>
</div>