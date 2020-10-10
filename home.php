<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<?php include 'navbar.php' ?>
	<div class="container py-3">

		<div class="text-center">
		<h1 class="mb-3">Home Page</h1>

		<?php 
			if(isset($_SESSION['logged_in'])) {
				echo "<h3>";
				echo "Welcome " . $_SESSION['fname'];
				echo "</h3>";
				echo "You are logged in";
			}
		?>
		</div>
		
	</div>
</body>
</html>