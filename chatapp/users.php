<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Chatting App</title>

	<link rel="stylesheet" href="chatt.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
</head> -->

<!-- here these head tag codes are same in all php files so i pasted it in one file and include that file in all php files -->

<!-- session will be set when user login or signup if session not set then we'll redirect user to login page -->
<?php
session_start();
if (!isset($_SESSION['unique_id'])) {
	header("location: login.php");
}
?>

<!-- here these head tag codes are same in all php files so i pasted it in one file and include that file in all php files -->
<!-- hade bade header.php er sathe connect kore dilam -->

<?php include_once "header.php"; ?>

<body>
	<div class="wrapper">
		<section class="users">
			<header>
				<?php
				include_once "php/config.php";
				$sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}"); /*now select all data of current logged in user using session*/

				/*these are static data but now i am making it dynamic*//*atate login person er name dynamic korbo php er maddhome Tourist person ei nam kete php dibo 45 line*/
				if (mysqli_num_rows($sql) > 0) {
					$row = mysqli_fetch_assoc($sql);
				}
				?>


				<div class="content">
					<!--atabade "img/img.jpg" akhane php add kore dynamic korbo jate auto set hoa jai login korle name active and picture -->
					<img src="php/imagess/<?php echo $row['img'] ?>" alt="">
					<div class="details">
						<span>
							<!-- /*atate login person er name dynamic korbo php er maddhome Tourist person ei nam kete php dibo 45 line*/ -->
							<!-- Tourist person --> <?php echo $row['fname'] . " " . $row['lname'] ?>
						</span>
						<p>
							<!-- same vabe akivabe korbo -->
							<!-- Active now --><?php echo $row['status'] ?>
						</p>
					</div>
				</div>

				<!-- name active image  all data logged in user and see login data-->
				<a href="php/logout.php?logout_id=<?php echo $row['unique_id'] ?>" class="logout">Logout</a>
				<a href="http://localhost/tourhotel/home.php?logout_id=<?php echo $row['unique_id'] ?>" class="logout">Back</a>

			</header>
			<div class="search">
				<span class="text">Select an user to start chat</span>
				<input type="text" placeholder="Enter name to search...">
				<button><i class="fas fa-search"></i></button>
			</div>
			<div class="users-list">
				<!-- <a href="#">
					<div class="content">
						<img src="img/2.jpg" alt="">
						<div class="details">
						<span>Tourist person</span>
						<p>This is text message</p>
					</div>
					</div>
					<div class="status-dot"><i class="fas fa-circle"></i></div>
				</a> -->
				<!--<a href="#">
					<div class="content">
						<img src="img/2.jpg" alt="">
						<div class="details">
						<span>Tourist person</span>
						<p>This is text message</p>
					</div>
					</div>
					<div class="status-dot"><i class="fas fa-circle"></i></div>
				</a>
				 <a href="#">
					<div class="content">
						<img src="img/2.jpg" alt="">
						<div class="details">
						<span>Tourist person</span>
						<p>This is text message</p>
					</div>
					</div>
					<div class="status-dot"><i class="fas fa-circle"></i></div>
				</a>
				<a href="#">
					<div class="content">
						<img src="img/2.jpg" alt="">
						<div class="details">
						<span>Tourist person</span>
						<p>This is text message</p>
					</div>
					</div>
					<div class="status-dot"><i class="fas fa-circle"></i></div>
				</a>
				<a href="#">
					<div class="content">
						<img src="img/2.jpg" alt="">
						<div class="details">
						<span>Tourist person</span>
						<p>This is text message</p>
					</div>
					</div>
					<div class="status-dot"><i class="fas fa-circle"></i></div>
				</a>
				<a href="#">
					<div class="content">
						<img src="img/2.jpg" alt="">
						<div class="details">
						<span>Tourist person</span>
						<p>This is text message</p>
					</div>
					</div>
					<div class="status-dot"><i class="fas fa-circle"></i></div>
				</a>
				<a href="#">
					<div class="content">
						<img src="img/2.jpg" alt="">
						<div class="details">
						<span>Tourist person</span>
						<p>This is text message</p>
					</div>
					</div>
					<div class="status-dot"><i class="fas fa-circle"></i></div>
				</a>
				<a href="#">
					<div class="content">
						<img src="img/2.jpg" alt="">
						<div class="details">
						<span>Tourist person</span>
						<p>This is text message</p>
					</div>
					</div>
					<div class="status-dot"><i class="fas fa-circle"></i></div>
				</a>
				<a href="#">
					<div class="content">
						<img src="img/2.jpg" alt="">
						<div class="details">
						<span>Tourist person</span>
						<p>This is text message</p>
					</div>
					</div>
					<div class="status-dot"><i class="fas fa-circle"></i></div>
				</a> -->
			</div>
		</section>
	</div>

	<script src="javascript/users.js"></script>

</body>

</html>