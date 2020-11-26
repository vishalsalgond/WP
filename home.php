<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<?php include 'const/navbar.php';  ?>
	

		<?php if(isset($_SESSION['logged_in'])) : ?>
			<div class="container py-3">
			<div class="mb-4">
				<h1>Top Colleges</h1>
			</div>
			
			<div class="row row-cols-1 row-cols-md-2 pt-3">
			<?php
			include 'connect.php';
				$query = "SELECT * FROM college";
				if ($result = $conn->query($query)) {

				/* fetch associative array */
				while ($row = $result->fetch_assoc()) {
					$img = 'static/colleges/'.$row['name'].'.jpg';
					$location = $row['address'];
					echo '<form action="GET">';
						echo '<div class="col mb-4">';
							echo '<div class="card shadow p-3 mb-5 bg-white rounded">';
							echo '<img src="'.$img.'" class="card-img-top" height="350px"  alt="...">';
							echo '<div class="card-body">';
								echo '<h5 class="card-title">'.$row["name"].'</h5>';
								echo '<i class="fa fa-map-marker" style="font-size:20px;"> '.$location.'</i>';
								echo '<br>';
								echo '<a class="btn btn-info mt-3" href="college_detail.php?college_id='.$row['id'].'">See More</a>';
							echo '</div>
							</div>
						</div>
					</form>';
				}

					/* free result set */
					$result->free();
				}
				
			?>	
		</div>	
		<?php else : ?>

			<div style="background-color:#F0F8FF;">
				<div class="row py-5">
					<div class="col-lg-7" style="margin: auto;">
						<h1 class="display-2 text-center" style="color:#8A2BE2;"><b>Looking for your</b></h1>
						<h1 class="display-2 text-center" style="color:#8A2BE2;"><b>dream college?</b></h1>
						<div class="text-center">
							<p class="text-center" style="font-size: 30px;">CollegeSearch is your one-stop destination.</p>
							<a href="register.php" class="btn btn-info btn-lg" style="margin:auto;">Sign Up</a>
						</div>
						
					</div>
					<div class="col-lg-5">
						<img src="static/home.png" alt="" height="400px">
					</div>
				</div>
				
			</div>

			<div class="container" style="margin-top:60px;margin-bottom:60px;">
				<div class="row">
					<div class="col-sm-6">
						<div class="card bg-warning">
						<div class="card-body">
							<h5 class="card-title">Top Colleges in India</h5>
							<p class="card-text">Get latest information about top colleges from India who take admission based on JEE Main/Advance, CET.</p>
							<a href="#" class="btn btn-primary">Get Started</a>
						</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="card bg-success text-light">
						<div class="card-body">
							<h5 class="card-title">See where you stand</h5>
							<p class="card-text">Add your exam score/rank and check which colleges you are eligible for.</p>
							<a href="#" class="btn btn-primary">Learn More</a>
						</div>
						</div>
					</div>
					</div>
			</div>
			

		<?php endif; ?>
		</div>
		
	</div>
	<?php include 'const/bootstrap_script.php'; ?>
</body>
</html>