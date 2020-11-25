<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<?php include 'const/navbar.php';  ?>
	<div class="container py-3">

		<?php if(isset($_SESSION['logged_in'])) : ?>
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
			<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
					<img src="https://s.abcnews.com/images/Business/GTY_college_grads_jef_130625_16x9_1600.jpg" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5>Get Your Dream College</h5>
						<p>Best place to find your dream college</p>
					</div>
					</div>
					<div class="carousel-item">
					<img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5>Second slide label</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					</div>
					</div>
					<div class="carousel-item">
					<img src="..." class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5>Third slide label</h5>
						<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
					</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
				</div>

		<?php endif; ?>
		</div>
		
	</div>
	<?php include 'const/bootstrap_script.php'; ?>
</body>
</html>