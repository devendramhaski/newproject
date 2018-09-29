<?php
include("header.php");
?>
<div id="content">
				
			<div id="login-box"><h4>Sign-Up</h4>
				<form action="save.php" method="post">
					
				<table align="center">
					<tr>
						<td>Full Name</td>
						<td><input type="text" name="f_name" placeholder="Full Name" class="input"></td>
					</tr>
					<tr>
						<td>Username</td>
						<td><input type="text" name="u_name" placeholder="Username/Email" class="input"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password"  name="pass" placeholder="Password" class="input"></td>
					</tr>
					<tr>
						<td>RePassword</td>
						<td><input type="password" placeholder="Re-Password" class="input"></td>
					</tr>
					<tr>
						<td>Address</td>
						<td><textarea placeholder="Address"  name="add" class="input1" cols="20" rows="5"></textarea></td>
					</tr>
					<tr>
						<td>City</td>
						<td><select class="input" name="city">
							<option>Select</option>
							<option>Indore</option>
							<option>Mumbai</option>
							<option>Pune</option>
							<option>Delhi</option>
						</select></td>
					</tr>
					<tr align="">
						<td>Gender</td>
						<td  id="radio">Male <input type="radio" value="male" name="gender"  />Female <input type="radio" class ="radio" value="female" name="gender" /></td>
					</tr>
					<tr>
						<td>Contact</td>
						<td><input type="text" name="contact" placeholder="Contact No." class="input"></td>
					</tr>
					<tr>
						<td colspan="2" align="right">
							<input type="submit" class="btn" value="Signup"></td>
					</tr>
				</table>
				</form>
			</div>
			</div>

<?php
include("footer.php");
?>