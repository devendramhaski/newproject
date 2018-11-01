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
<script type="text/javascript">
// $(document).ready(function({
// 	$("#theme11").click(function(){
// 		alert();
// 	})
// }));
	function theme(x){
		// alert();
		if (x==1) {
			// alert();
			document.getElementById("menu").style.backgroundColor="red";
		}
		if (x==2) {
			// alert();
			document.getElementById("menu").style.backgroundColor="blue";
		}
		if (x==3) {
			document.getElementById("menu").style.backgroundColor="green";
			// alert();
		}
		if (x==4) {
			document.getElementById("menu").style.backgroundColor="black";
			// alert();
		}


	}
</script>
<div id="content">
	<div id="inside-content">

			<a onclick="theme(1)"><div id="theme1"></div></a>
			<a onclick="theme(2)"><div id="theme2"></div></a>
			<a onclick="theme(3)"><div id="theme3"></div></a>
			<a onclick="theme(4)"><div id="theme4"></div></a>	

			
				<!-- <h1>Welcome: <br/><?php echo $_SESSION['fname'] ?><hr><br> SUPAR MARKET</h1> -->
			
	</div>
</div>		
<?php
include('footer.php');
?>