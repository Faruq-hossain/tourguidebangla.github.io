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
    if(isset($_SESSION['unique_id'])){
    	header("location: users.php");
    }
?>
<?php include_once "header.php"; ?>

<body>
	<div class="wrapper">
		<section class="form signup">
			<header>Tourist Chat</header>
			<!-- here add attribute id you have used <input type="file"> tag -->
			<form action="#" enctype="multipart/form-data">
				<div class="error-txt"><!-- All input field are required! --></div>
				<div class="name-details">
					<div class="field input">
						<label>First Name</label>
						<input type="text" name="fname" placeholder="First Name" required>
					</div>
					<div class="field input">
						<label>Last Name</label>
						<input type="text" name="lname" placeholder="Last Name" required>
					</div>
				</div>
				<div class="field input">
						<label>Email Address</label>
						<input type="text" name="email" placeholder="Enter Your Email Address" required>
					</div>
					<div class="field input">
						<label>Password</label>
						<input type="password" name="password" placeholder="Enter Your Password" required>
						<i class="fas fa-eye"></i>
					</div>
					<div class="field image">
						<label>Select Image</label>
						<input type="file" name="image" required>
					</div>
				    <div class="field button">
					    <input type="submit" value="Continue to Chat">
				    </div>
			</form>
			<div class="link">Already Signed Up? <a href="login.php">Login now</a>
			</div>
		</section>
	</div>

	<script src="javascript/pass-show-hide.js"></script>
	<script src="javascript/signup.js"></script>


</body>
</html>