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
<div id="login-box"><h4>Change Password</h4>

					<form action="update_pass.php" method="post">
						
					<table align="center" border="0">
						<tr>
							<td>OldPassword</td>
							<td><input value="" type="password" placeholder="Current Password" name="old_pass" class="input"/></td>
						</tr>
						<tr>
							<td>NewPassword</td>
							<td><input value="" type="password" placeholder="New Password" name="new_pass" class="input"/></td>
						</tr>
						<tr>
							<td>Confirm_New_Password</td>
							<td><input value="" type="password" placeholder="Confirm New Password" name="cn_pass" class="input"/></td>
						</tr>
						
						<tr>
							<td id="tb-btn" colspan="2" align="center">
								<input type="submit" value="Update" class="btn"></td>
						</tr>
					</table>
					</form>
					<p class="error">
						<?php
						if(isset($_SESSION['msg']))
						{
							echo $_SESSION['msg'];
							unset($_SESSION['msg']);
						}
						?>
					</p>
				</div>
			</div>
</div>
<?php
include('footer.php');
?>