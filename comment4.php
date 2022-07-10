<?php 

    include("partials/connect.php");
error_reporting(0); // For not showing any error

if (isset($_POST['submit'])) { // Check press or not Post Comment Button
	$name = $_POST['name']; // Get Name from form
	$comment = $_POST['comment']; // Get Comment from form

	$sql = "INSERT INTO comments4 (name4, comment4)
			VALUES ('$name', '$comment')";
	$result = mysqli_query($connect, $sql);
	if ($result == true) {
		echo "<script>alert('Comment added successfully.')</script>";
	} else {
		echo "<script>alert('Comment does not add.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
    
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/logo-01.png"/>
    
    
	<div>
		 <a href="userpage.php">Back to Home</a> 
	</div>
	<link rel="stylesheet" type="text/css" href="css/style.css">
<title>Comment</title>
</head>
<body>
	<div class="wrapper">
		<form action="" method="POST" class="form">
			<br>
			<h1>Forum Bouquet Bunga </h1>
			</br>
			<div class="row">
				<div class="input-group">
					<label for="name">Name</label>
					<input type="text" name="name" id="name" placeholder="Enter your Name" required>
				</div>
				
			</div>
			<div class="input-group textarea">
				<label for="comment">Comment</label>
				<textarea id="comment" name="comment" placeholder="Enter your Comment" required></textarea>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Post Comment</button>
			</div>
		</form>
		<div class="prev-comments">
			<?php 
			
			$sql = "SELECT * FROM comments4";
			$result = mysqli_query($connect, $sql);
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {

			?>
			<div class="single-item">
				<h4><?php echo $row['name4']; ?></h4>
				<p><?php echo $row['comment4']; ?></p>
                <a href="reply-forum4.php">Reply</a>

			</div>

			
			<?php

				}
			}
			
			?>
		</div>
	</div>
</body>
</html>