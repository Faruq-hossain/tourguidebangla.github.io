<?php
ob_start();
session_start();
require_once('admin/db.php');
require_once('admin/functions.php');
$error_message = '';
$success_message = '';
?>
<?php
$q = $pdo->prepare("SELECT * FROM settings WHERE id=?");
$q->execute([1]);
$res = $q->fetchAll();
foreach ($res as $row) {
	$top_bar_email = $row['top_bar_email'];
	$top_bar_phone = $row['top_bar_phone'];
	$top_bar_show = $row['top_bar_show'];
}
?>


<?php if ($top_bar_show == 'Yes') : ?>
	<div id="top-header">
		<div class="container">
			<div class="row">
				<div class="col-xs-6">
					<div class="th-text pull-left">
						<div class="th-item"> <a href="#"><i class="fa fa-phone"></i> <?php echo $top_bar_phone; ?></a> </div>
						<div class="th-item"> <a href="#"><i class="fa fa-envelope"></i> <?php echo $top_bar_email; ?> </a></div>
					</div>
				</div>
				<div class="col-xs-6">
					<div class="th-text pull-right">
						<div class="th-item">
							<div class="btn-group">

								<?php
								if (!isset($_SESSION['current_lang_code'])) {
									$q = $pdo->prepare("SELECT * FROM language WHERE lang_default=?");
									$q->execute(['default']);
									$res = $q->fetchAll();
									foreach ($res as $row) {
										$lang_name = $row['lang_name'];
									}
									$top_lang_name = $lang_name;
								} else {
									$q = $pdo->prepare("SELECT * FROM language WHERE lang_code=?");
									$q->execute([$_SESSION['current_lang_code']]);
									$res = $q->fetchAll();
									foreach ($res as $row) {
										$lang_name = $row['lang_name'];
									}
									$top_lang_name = $lang_name;
								}
								?>

								<button class="btn btn-default btn-xs dropdown-toggle js-activated" type="button" data-toggle="dropdown"> <?php echo $top_lang_name; ?> <span class="caret"></span> </button>
								<ul class="dropdown-menu">
									<?php
									$q = $pdo->prepare("SELECT * FROM language ORDER BY lang_id ASC");
									$q->execute();
									$res = $q->fetchAll();
									foreach ($res as $row) {
										$cur_page = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);
									?><li>
											<a href="language_change.php?code=<?php echo $row['lang_code']; ?>&page=<?php echo $cur_page; ?>"><?php echo $row['lang_name']; ?></a>
										</li>
									<?php
									}
									?>
								</ul>
							</div>
						</div>
						<div class="th-item">
							<div class="social-icons"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-youtube-play"></i></a> </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>

<!DOCTYPE HTML>
<html>

<head>
	<meta charset="utf-8">
	<title>Tour Goude Bangla</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="shortcut icon" href="favicon.ico">

	<link rel="stylesheet" href="css/owl.theme.css">


</head>

<body>


	<header>

		<div class="lock fadeInUp animated" data-wow-delay=".5s">

			<div id="menu-bar" class="fas fa-bars"></div>
		</div>

		<div class="lock fadeInLeft animated" data-wow-delay=".5s">
			<a href="../tourhotel/home.php" class="logo"><img class="logoimg" src="img/Logo.png" alt="" style="width:150px;height: 50px; text-align: center;"><span>T</span>ravel</a>
		</div>

		<nav class="navbar">
			<div class="lock fadeInDown animated" data-wow-delay=".5s">
				<!-- <a href="page.php?type=aboutus">About</a> -->
				<a href="http://localhost/tourhotel/home.php">Home</a>



			</div>

			<li class="dropdown"> <a href="#" data-toggle="dropdown" class="dropdown-toggle js-activated">Tour<b class="caret"></b></a>
				<ul style="background-color: #000;" class="dropdown-menu">
					<li><a href="http://localhost/tourhotel/tour/index.php">Tour Home Page</a></li>
					<li><a href="http://localhost/tourhotel/tour/tour.php">Tour Places</a></li>
					<li><a href="http://localhost/tourhotel/tour/blog.php">Tour Blog</a></li>
					<li><a href="http://localhost/tourhotel/tour/gallery.php">Tour Gallery</a></li>
					<li><a href="">Tour Feature</a></li>
					<li><a href="">Tour Facilities</a></li>
				</ul>
			</li>


			<li class="dropdown"> <a href="#" data-toggle="dropdown" class="dropdown-toggle js-activated">Hotel<b class="caret"></b></a>
				<ul style="background-color: #000;" class="dropdown-menu">
					<li><a href="http://localhost/tourhotel/index.php">Hotel Home Page</a></li>
					<li><a href="http://localhost/tourhotel/rooms.php">Hotel Rooms</a></li>
					<li><a href="http://localhost/tourhotel/blog.php">Hotel Blog</a></li>
					<li><a href="http://localhost/tourhotel/gallery.php">Hotel Gallery</a></li>
					<li><a href="">Hotel Feature</a></li>
					<li><a href="">Hotel Facilities</a></li>
				</ul>
			</li>

			<!-- <li class="dropdown"> <a href="#" data-toggle="dropdown" class="dropdown-toggle js-activated">Blog<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="http://localhost/tourhotel/blog.php">Hotel Blog</a></li>
                <li><a href="http://localhost/tourhotel/tour/blog.php">Tour Blog</a></li>
              </ul>
            </li> -->

			<!-- <li class="dropdown"> <a href="#" data-toggle="dropdown" class="dropdown-toggle js-activated">Gallery<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="http://localhost/tourhotel/gallery.php">Hotel Gallery</a></li>
                <li><a href="http://localhost/tourhotel/tour/gallery.php">Tour Gallery</a></li>
              </ul>
            </li> -->

			<li class="dropdown"> <a href="#" data-toggle="dropdown" class="dropdown-toggle js-activated">Emergency<b class="caret"></b></a>
				<ul style="background-color: #000;" class="dropdown-menu">
					<li><a href="http://localhost/tourweb/nearesthos.php">Nearest Hospital</a></li>
					<li><a href="http://localhost/tourweb/nearpolice.php">Police Station</a></li>
					<li><a href="http://localhost/tourweb/nearambulance.php">Find Ambulance</a></li>
					<li><a href="http://localhost/tourweb/nearblood.php">Blood Service</a></li>
					<li><a href="http://localhost/tourweb/nearfire.php">Fire Service</a></li>
					<li><a href="http://localhost/tourweb/nearfirstaid.php">First Aid</a></li>
				</ul>
			</li>

			<li class="dropdown"> <a href="#" data-toggle="dropdown" class="dropdown-toggle js-activated">Pages<b class="caret"></b></a>
				<ul style="background-color: #000;" class="dropdown-menu">
					<li><a href="">About Us</a></li>
					<li><a href="">FAQs</a></li>
					<li><a href="../404.php">404 Page</a></li>
					<li><a href="http://localhost/tourhotel/all_division_places/index_popular_Tour_place.php">Division BLog</a></li>

				</ul>
			</li>


			<!-- <li><a href="rooms.php">Rooms</a></li> -->

			<!-- <li><a href="blog.php">Blog</a></li> -->
			<!-- <li><a href="gallery.php">Gallery</a></li> -->
			<li><a href="../contact.php">Contact us</a></li>

			<?php if (!isset($_SESSION['customer'])) : ?>
				<li><a href="../login.php">Login</a></li>
				<li><a href="../registration.php">Sign Up</a></li>
			<?php endif; ?>

			<?php if (isset($_SESSION['customer'])) : ?>
				<li><a href="../c-dashboard.php">Dashboard</a></li>
			<?php endif; ?>

			<li><a href="../cart.php">View Cart</a></li>
		</nav>



		<div class="icons">
			<div class="lock fadeInRight animated" data-wow-delay=".5s">
				<i class="fas fa-search" id="search-btn"></i>
			</div>
		</div>

		<form action="" class="search-bar-container">
			<input type="search" id="search-bar" placeholder="search here...">
			<label for="search-bar" class="fas fa-search"></label>
		</form>

	</header>
	<!-- header final end		 -->
	<!-- <i class="fas fa-user" id="login-btn"></i> -->