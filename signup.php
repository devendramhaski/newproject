<?php
include("db.php");
include("header.php");

?>
<div id="content">
			<script type="text/javascript" src="js/velidation.js"></script>
			<div id="login-box"><h4>Sign-Up</h4>
				<form action="save.php" method="post">
					
				<table align="center">
					<tr>
						<td>Full Name</td>
						<td><input type="text" id="full_name" name="f_name" placeholder="Full Name" class="input"></td>
					</tr>
					<tr class="errer_msg">
						<td></td>
						<td id="full_name_msg"></td>
					</tr>
					<tr>
						<td>Username</td>
						<td><input type="text" name="u_name" id="username" placeholder="User-name/Email" class="input"></td>
					</tr>
					<tr class="errer_msg">
						<td></td>
						<td id="username_msg"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" id="pass" name="pass" placeholder="Password" class="input"></td>
					</tr>
					<tr class="errer_msg">
						<td></td>
						<td id="pass_msg"></td>
					</tr>
					<tr>
						<td>RePassword</td>
						<td><input type="password" id="re_pass" placeholder="Re-Password" class="input"></td>
					</tr>
					<tr class="errer_msg">
						<td></td>
						<td id="re_pass_msg"></td>
					</tr>
					<tr>
						<td>Address</td>
						<td><textarea placeholder="Address"  id="add" name="add" class="input1" cols="20" rows="5"></textarea></td>
					</tr>
					<tr class="errer_msg">
						<td></td>
						<td id="add_msg"></td>
					</tr>
					<tr>
						<td>City</td>
						<td><select class="input" id="city" name="city">
							<option>Select</option>
							<option>Indore</option>
							<option>Mumbai</option>
							<option>Pune</option>
							<option>Delhi</option>
						</select></td>
					</tr>
					<tr class="errer_msg">
						<td></td>
						<td id="city_msg"></td>
					</tr>
					<tr align="">
						<td>Gender</td>
						<td  id="radio">Male <input type="radio" id="male" value="male" name="gender"  />Female <input type="radio" id="female" class ="radio" value="female" name="gender" /></td>
					</tr>
					<tr class="errer_msg">
						<td></td>
						<td id="gender_msg"></td>
					</tr>
					<tr>
						<td>Contact</td>
						<td><input type="text" name="contact" id="contact" placeholder="Contact No." class="input"></td>
					</tr>
					<tr class="errer_msg">
						<td></td>
						<td id="contact_msg"></td>
					</tr>
					<tr>
						<td colspan="2" align="right">
							<input type="submit" class="btn" value="Signup" id="btn"></td>
					</tr>
				</table>
				</form>
			</div>
			</div>

<?php
include("footer.php");
?>