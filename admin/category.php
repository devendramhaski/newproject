<?php
include('header.php');
include("db.php");
if(! isset($_SESSION['is_admin_logged_in']))
{
	header("location:../index.php");
}
?>

<div id="content">

			<div id="login-box"><h4>Add Category</h4>
				<form action="add_category.php" method="post">
					<table align="center">
									<tr>
										<td>Category</td>
										<td> <input type="text" placeholder="Category_name" class ="input" name="cate"></td>
									</tr>
									
									<tr >
										
										<td colspan="2" align="right"><input type="submit" value="Add" name="login" class="btn"></td>
									</tr>
					</table>
				</form>
			</div>
</div>