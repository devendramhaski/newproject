<?php
$que = "SELECT * FROM category";
$result = mysqli_query($con, $que);

$total = 0;
if (isset($_COOKIE['pid']))
{
	$a =$_COOKIE['pid'];
	$cookie_arr= explode ("#",$a);
	$total = count($cookie_arr);
}
?>
<?php 
$slider = "SELECT * FROM sliderimage";
$result_slider = mysqli_query($con, $slider);
?>
<!DOCTYPE html>
<html>
<head>
	<title>My new project</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="swaipar.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="theme.js"></script>
	<script type="text/javascript" src="js/swiper.js"></script>

</head>
<body>

<div id="topmenu" >
	<div id="inside-topmenu">
		<div id="left-topmenu">
		<?php
		if(isset($_SESSION["is_user_logged_in"]))
		{?>
				
			<ul>
 				<li><a href="my_account.php">My Account</a>|</li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</div>
		<div id="right-topmenu">
			<ul>
				<li><a href="themes.php">Themes</a></li>
				<li><a class="username" href="edit_profile.php"><?php echo $_SESSION['uname'] ?></a>|</li>
				<li><a href="my_cart.php">Cart<span > (<?php echo $total ?>)</span></a>|</li>
				<!-- <li><a href="#">Wishlist</a>|</li> -->
				
			</ul>
			<?php
		}
		else
		{	?>
			<ul>
				<li><a href="login.php">Login</a>|</li>
				<li><a href="signup.php">Sign Up</a></li>
				
			</ul>
		</div>
		<div id="right-topmenu">
			<ul>
				<li><a href="admin/index.php">Admin</a></li>
				<li><a href="my_cart.php">Cart<span>(<?php echo $total ?>)</a></span>|</li>
				
			</ul>
			<?php
			
			}?>

		</div>
	</div>
</div>
<div id="logo">
	<div id="inside-logo">
		<div id="title">
			<div id="left-title"><!-- <h1>Super Market</h1> --></div>
			<div id="right-title"><input type="text" placeholder="search" id="search"></div>
		</div>
		<div id="menu">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="#">FAQ</a></li>
				<li><a href="#">Contact</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Help</a></li>
			</ul>
		</div>
	</div>
</div>
<div id="content">	
	<div id="inside-content">
		<div id="category">
			
		<h2>Category</h2>
			<ul>
					<?php
					while($data=mysqli_fetch_assoc($result))
					{ ?>
					
						<li><a href="index.php?view_by_category=<?php echo $data['id'] ?>"><?php echo $data['category'];?></a></li>

					<?php
					}
					?>
			
			</ul>
		</div>
		<div id="slider">
						 <!-- Swiper -->
  <div class="swiper-container">
    <div class="swiper-wrapper">
    <?php
					while($data_slider=mysqli_fetch_assoc($result_slider))
					{ ?>
				<img  height="200px" width="600px" class="swiper-slide"  src="simages/<?php echo $data_slider['name']; ?>">
					
      				
					<?php
					}
					?>
     
    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
		</div>

		<script>
		$(document).ready(function(){
			

		    var swiper = new Swiper('.swiper-container', {
		    	loop: true,
		    	 effect: 'coverflow',
		    	 autoplay: {
		    	        delay: 2500,
		    	        disableOnInteraction: false,
		    	      },
		      navigation: {
		        nextEl: '.swiper-button-next',
		        prevEl: '.swiper-button-prev'
		      },
		      pagination: {
		              el: '.swiper-pagination',
		              type: 'fraction'
		            }
		    });
		});
	  </script>

	</div>
</div>
