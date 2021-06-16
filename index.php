<?php
session_start();
if(isset($_SESSION['unique_id'])){
	header("location:users.php");
}
include_once "header.php";
?>
<body>
	<div class="wrapper">
		<section class="form signup">
			<header>Realtime Chat App</header>
			<form action="#" enctype="multipart/form-data">
				<div class="error-txt"></div>
				<div class="name-details">
					<div class="field input">
						<label>First name</label>
						<input type="text" name="fname" placeholder="Enter First Name" required>
					</div>
					<div class="field input">
						<label>Last name</label>
						<input type="text" name="lname" placeholder="Enter Last Name" required>
					</div>
				</div>
					<div class="field input">
						<label>Email Address</label>
						<input type="text" name="email" placeholder="Enter Email " required>
					</div>
					<div class="field input">
						<label>Password</label>
						<input type="password" name="password" placeholder="Enter Password" required>
						<i class="fas fa-eye"></i>
					</div>
					<div class="field image">
						<label>Select Image</label>
						<input type="file" name="image" required>
					</div>
					<div class="field button">
						<input type="submit" value="Continue to chat" >
					</div>
				
			</form>
			<div class="link">Already signed up? <a href="login.php">Login now</a></div>
		</section>
	</div>
	<script type="text/javascript" src="javascript/pass-show-hide.js"></script>
	<script type="text/javascript" src="javascript/signup.js"></script>
</body>
</html>