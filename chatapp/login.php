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

<!-- hade bade header.php er sathe connect kore dilam -->
<?php
session_start();
if (isset($_SESSION['unique_id'])) {
	header("location: users.php");
}
?>
<?php include_once "header.php"; ?>


<body>
	<div class="wrapper">
		<section class="form login">
			<header>Tour Chat</header>
			<a href="http://localhost/tourhotel/home.php"><b>Back to website</b></a>

			<form action="#">
				<div class="error-txt">
					<!-- This is an error message -->
				</div>
				<!-- <div class="name-details">
					<div class="field input">
						<label>First Name</label>
						<input type="text" placeholder="First Name">
					</div>
					<div class="field input">
						<label>Last Name</label>
						<input type="text" placeholder="Last Name">
					</div>
				</div> -->
				<div class="field input">
					<label>Email Address</label>
					<input type="text" name="email" placeholder="Enter Your Email Address">
				</div>
				<div class="field input">
					<label>Password</label>
					<input type="password" name="password" placeholder="Enter Your Password">
					<i class="fas fa-eye"></i>
				</div>
				<!-- <div class="field image">
						<label>Select Image</label>
						<input type="file" placeholder="Last Name">
					</div> -->
				<div class="field button">
					<input type="submit" value="Continue to Chat">
				</div>
			</form>
			<div class="link"> <a href="http://localhost/tourhotel/home.php"><b>Back to website</b></a> Not Yet Signed Up? <a href="index.php">Signup now 
				</a>
			</div>

		</section>
	</div>

	<script src="javascript/pass-show-hide.js"></script>
	<script src="javascript/login.js"></script>


</body>

</html>