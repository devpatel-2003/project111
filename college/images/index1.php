<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="index1.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Comment System PHP | National Coding</title>
</head>
<body>
	<div class="wrapper">
		<form action="" method="post" class="form">
			<input type="text" class="name" name="name" placeholder="Name">
			<br>
			<textarea name="message" cols="30" rows="10" class="message" placeholder="Message"></textarea>
			<br>
			<button type="submit" class="btn" name="post_comment">Post Comment</button>
		</form>
	</div>

	<div class="content">
		<?php
        // include "config.php";
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "comment_system_php";

		$conn = mysqli_connect($servername, $username, $password, $dbname);
		// if($conn){
		// 	echo "done";
		// }else{
		// 	echo "failed";
		// }
		$name = $_POST['name'];
		$msg = $_POST['message'];
		$query = "INSERT INTO demo(`name`, `message`) VALUES ('$name', '$msg')";

			$sql = "SELECT * FROM demo";
			$result = $conn->query($sql);
			// $result = mysqli_query($conn, $sql);

			if ($result->num_rows > 0) {
			  // output data of each row
			  while($row = $result->fetch_assoc()) {
			   
		?>
		<h3><?php echo $row['name']; ?></h3>
		<p><?php echo $row['message']; ?></p>

		<?php } } ?>
	</div>
</body>
</html>