<?php
// $con = mysqli_connect("localhost", "root", "", "newproject");
// session_start();
include("db.php");
if(! isset($_SESSION['is_user_logged_in']))
{
	header("location:login.php");
}
include("header.php");

?>
<div id="content">
	<div id="inside-content">

			
			
				<h1>Welcome: <br/><?php echo $_SESSION['fname'] ?><hr><br> SUPAR MARKET</h1>
			
	</div>
</div>		
<?php
include('footer.php');
?>