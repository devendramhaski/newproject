<?php
include("db.php");
include("header.php");
?>
<div id="content">
<div id="inside-content">
			<div id="login-box"><h4>Login</h4>
				<form action="logcon.php" method="post">
					<table align="center">
									<tr>
										<td>Username</td>
										<td> <input type="text" placeholder="Username" class ="input" name="username"></td>
									</tr>
									<tr><td></td></tr>
									<tr>
										<td>Password</td>
										<td><input type="password" placeholder="password" class="input" name="password"></td>
									</tr>
									<tr >
										
										<td colspan="2" align="right"><input type="submit" value="Login" name="login" class="btn"></td>
									</tr>
									<tr><td>
								</table>
					<p class="error">
					<?php
					if(isset($_SESSION['msg']))
					{
						echo $_SESSION['msg'];
						unset($_SESSION['msg']);
					}
					
					?>
					</p>
					</td></tr>
						</form>
					</div>
					</div>

<?php
include("footer.php");
?>