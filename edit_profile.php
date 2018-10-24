<?php
include("db.php");
if (! isset($_SESSION['is_user_logged_in']))
{
	// print_r($_SETTION);
	// die;
	header("location:login.php");
}


$id = $_SESSION['id'];
$que="SELECT * FROM usertable WHERE id= $id";
$data_user = mysqli_fetch_assoc(mysqli_query($con, $que));
// print_r($data_user);
include("header.php");
?>
<div id="content">
				
			<div id="login-box"><h4>Update Profile</h4>
					<form action="update.php" method="post">	
				<table align="center">
					<tr>
						<td>FullName</td>
						<td><input type="text" name="f_name"value="<?php echo $data_user['fname'];?>" class="input"></td>
					</tr>
					<tr>
						<td>UserName</td>
						<td><input type="text" name="u_name"value="<?php echo $data_user['uname'];?>" class="input" disabled="disabled"></td>
					</tr>
					
					
					<tr>
						<td>Address</td>
						<td><textarea name="add" class="input1" cols="20" rows="5"> <?php echo $data_user['address'];?></textarea></td>
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
					<tr >
						<td>Gender</td>
						<td id="radio">Male <input <?php if($data_user['gender']=="male") echo "checked='checked'"; ?> type="radio" name="gender" value="male"/> Female <input id="radio" type="radio" name="gender" <?php if($data_user['gender']=="female") echo "checked='checked'"; ?> value="female" /></td>
					</tr>
					<tr>
						<td>Contact</td>
						<td><input type="text" name="contact" placeholder="Contact No." class="input" value="<?php echo $data_user['contact'];?>"></td>
					</tr>
					<tr>
							<td id="tb-btn" colspan="2" align="center">
								<input type="submit" value="Update" class="btn"></td>
					</tr>
					<tr>
							<td id="tb-btn" colspan="2" align="center">
								<a href="change_pass.php">Change Password</a></td>
					</tr>
					
				</table>
				</form>
			</div>
			</div>

<?php
include("footer.php");
?>