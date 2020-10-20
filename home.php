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
				<h1>Recommended for you</h1>
			</div>
			
			<div class="row row-cols-1 row-cols-md-2 pt-3">
				<div class="col mb-4">
					<div class="card shadow p-3 mb-5 bg-white rounded">
					<img src="static/iit-b.jpg" class="card-img-top" height="350px"  alt="...">
					<div class="card-body">
						<h5 class="card-title">IIT Bombay</h5>
						<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						<button class="btn btn-info">See More</button>
					</div>
					</div>
				</div>
				<div class="col mb-4">
					<div class="card shadow p-3 mb-5 bg-white rounded">
					<img src="static/iit-d.jpg" class="card-img-top" height="350px"  alt="...">
					<div class="card-body">
						<h5 class="card-title">IIT Delhi</h5>
						<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						<button class="btn btn-info">See More</button>
					</div>
					</div>
				</div>
				<div class="col mb-4">
					<div class="card shadow p-3 mb-5 bg-white rounded">
					<img src="static/bits-p.jpg" class="card-img-top" height="350px"  alt="...">
					<div class="card-body">
						<h5 class="card-title">BITS Pilani</h5>
						<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
						<button class="btn btn-info">See More</button>
					</div>
					</div>
				</div>
				<div class="col mb-4">
					<div class="card shadow p-3 mb-5 bg-white roundeds">
					<img src="https://3dprintingindustry.com/wp-content/uploads/2017/08/140224043434_unipune.jpg" height="350px" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">College of Engineering Pune</h5>
						<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						<button class="btn btn-info">See More</button>
					</div>
					</div>
				</div>
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
						<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
					</div>
					</div>
					<div class="carousel-item">
					<img src="..." class="d-block w-100" alt="...">
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