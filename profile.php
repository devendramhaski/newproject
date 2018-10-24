<?php
include("db.php");
if(! isset($_SESSION['is_user_logged_in']))
{
	header("location:login.php");
}
$id = $_SESSION['id'];

$que = "SELECT * FROM usertable WHERE id = $id";
$data_user = mysqli_fetch_assoc(mysqli_query($con, $que));
// print_r($data_user);

include("header.php");
?>
<div id ="content">
<div id="login-box"><h4>Update Product</h4>

					<form action="update.php" method="post">
						
					<table align="center" border="0">
						<tr>
							<td>Full Name</td>
							<td><input value="<?php echo $data_user['fname']; ?>" type="text" placeholder="Full Name" name="full_name" class="input"/></td>
						</tr>
						<tr>
							<td>Username</td>
							<td><input value="<?php echo $data_user['uname']; ?>" type="text" placeholder="Username" name="username" class="input" disabled="disabled"/></td>
						</tr>
						<tr>
							<td>Address</td>
							<td><textarea name="add" placeholder="Address" cols="22" rows="4"><?php echo $data_user['address']; ?></textarea></td>
						</tr>
						<tr>
							<td>City</td>
							<td><select class="input" name="city">
								<option>Select</option>
								<option <?php if($data_user['city']=="Ujjain") echo "selected='selected'"; ?>>Ujjain</option>
								<option <?php if($data_user['city']=="Indore") echo "selected='selected'"; ?>>Indore</option>
								<option <?php if($data_user['city']=="Bhopal") echo "selected='selected'"; ?>>Bhopal</option>
								<option <?php if($data_user['city']=="Mumbai") echo "selected='selected'"; ?>>Mumbai</option>
							</select></td>
						</tr>
						<tr>
							<td>Gender</td>
							<td>Male <input <?php if($data_user['gender']=="male") echo "checked='checked'"; ?> type="radio" name="gender" value="male"/> Female <input type="radio" name="gender" <?php if($data_user['gender']=="female") echo "checked='checked'"; ?> value="female" /></td>
						</tr>
						<tr>
							<td>Contact</td>
							<td><input value="<?php echo $data_user['contact']; ?>" type="text" name="contact" placeholder="Contact" class="input"/></td>
						</tr>
						<tr>
							<td id="tb-btn" colspan="2" align="center">
								<input type="submit" value="Update" class="btn"></td>
						</tr>
						
					</table>
					</form>
				</div>
			</div>
</div>
<?php
include('footer.php');
?>