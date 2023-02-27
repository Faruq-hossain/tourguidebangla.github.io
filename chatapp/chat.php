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


<?php
  session_start();
  if(!isset($_SESSION['unique_id'])){
  	header("location: login.php");

  }
?>
<!-- hade bade header.php er sathe connect kore dilam -->

<?php include_once "header.php"; ?>

<body>
	<div class="wrapper">
		<section class="chat-area">
			<header>

				<?php
				  include_once "php/config.php";
				  $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
				  $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}"); 
				  if(mysqli_num_rows($sql) > 0){
				  	$row = mysqli_fetch_assoc($sql);
				  }
				?>



				<a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
				<img src="php/imagess/<?php echo $row['img']?>" alt="">
				<div class="details">
				<span><!-- Tourist person --><!-- dynamic korar jonno --><?php echo $row['fname'] . " ". $row['lname'] ?></span>
				<p><!-- Active now --><!-- dynamic --><?php echo $row['status'] ?></p>
				</div>
			</header>
			<div class="chat-box">


				<!-- msg send er jonno get-chat.php er sathe connect korabo tai akhan theke code nia dynamic korar jonno get-chat.php te bosabo -->
				<!-- <div class="chat outgoing">
					<div class="details">
						<p>lorem ipsm dolor sit m=amiyt , adipisicing elit.</p>
					</div>
				</div>

				ata get-chat.php er vitore nia jabo and dynamic korbo
				<div class="chat incoming">
					<img src="img/2.jpg" alt="">
					<div class="details">
						<p>lorem ipsm dolor sit m=amiyt , adipisicing elit.</p>
					</div>
				</div> -->

				<!-- get-chat.php e add korar por 54 theke 65 porjonto delete kore dibo -->


				<!-- <div class="chat outgoing">
					<div class="details">
						<p>lorem ipsm dolor sit m=amiyt , adipisicing elit.</p>
					</div>
				</div>
				<div class="chat incoming">
					<img src="img/2.jpg" alt="">
					<div class="details">
						<p>lorem ipsm dolor sit m=amiyt , adipisicing elit.</p>
					</div>
				</div>
				<div class="chat outgoing">
					<div class="details">
						<p>lorem ipsm dolor sit m=amiyt , adipisicing elit.</p>
					</div>
				</div>
				<div class="chat incoming">
					<img src="img/2.jpg" alt="">
					<div class="details">
						<p>lorem ipsm dolor sit m=amiyt , adipisicing elit.</p>
					</div>
				</div>
				<div class="chat outgoing">
					<div class="details">
						<p>lorem ipsm dolor sit m=amiyt , adipisicing elit.</p>
					</div>
				</div>
				<div class="chat incoming">
					<img src="img/2.jpg" alt="">
					<div class="details">
						<p>lorem ipsm dolor sit m=amiyt , adipisicing elit.</p>
					</div>
				</div>
				<div class="chat outgoing">
					<div class="details">
						<p>lorem ipsm dolor sit m=amiyt , adipisicing elit.</p>
					</div>
				</div>
				<div class="chat incoming">
					<img src="img/2.jpg" alt="">
					<div class="details">
						<p>lorem ipsm dolor sit m=amiyt , adipisicing elit.</p>
					</div>
				</div>
				<div class="chat outgoing">
					<div class="details">
						<p>lorem ipsm dolor sit m=amiyt , adipisicing elit.</p>
					</div>
				</div>
				<div class="chat incoming">
					<img src="img/2.jpg" alt="">
					<div class="details">
						<p>lorem ipsm dolor sit m=amiyt , adipisicing elit.</p>
					</div>
				</div> -->

			</div>

			<form action="" class="typing-area" autocomplete="off">

				<!-- now use to hidden inputs to send msg_sender_id and msg_receiver_id -->
				<input type="text" name="outgoing_id" value="<?php echo $_SESSION['unique_id']; ?>" hidden>
				<input type="text" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
				<!-- ses send msg  -->

				<input type="text" name="message" class="input-field" placeholder="Type a message here...">
				<button><i class="fab fa-telegram-plane"></i></button>
			</form>
		</section>
	</div>

	<script src="javascript/chat.js"></script>

</body>
</html>