<?php
include ("partials/head.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/login.css">

	<title>Log in</title>
</head>
<body>
	<div class="container">
	<li>
		 <a href="index.php">Back to Home</a> 
	</li>
<form action="handler/customerslogin.php" method="POST">
	<center><img src="images/icons/growplanty.png" alt="centered image"> </center>
						
						<h4 class="mtext-105 cl2 txt-center p-b-30">
							Log in
						</h4>


						<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="email" placeholder="Your Email Address">
							<img class="how-pos4 pointer-none" src="images/icons/icon-email.png" alt="ICON">
						</div>

						<div class="bor8 m-b-30">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="password" name="password" placeholder="password">
						</div>

						<button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer" name="login">
							Log in
						</button>
						<li>
							<p>Don't have an Account?  <a href="register.php">Register Here</a> </p>
						</li>
					</form>
	</div>
</body>
</html>
