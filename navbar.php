<?php 
	session_start();
?>

<!DOCTYPE HTML>  
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register</title>

    <!-- Bootstrap CSS -->      
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

</head>
 
<body>  

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	   <a class="navbar-brand" href="home.php">
	    <img src="https://www.logodesign.net/images/letter-c-logo-tutorial.png" width="45" height="35" class="d-inline-block align-top" alt="">
	    CollegeSearch
	  </a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="home.php">Home</a>
	      </li>
	      <li class="nav-item active">
	        <a class="nav-link" href="#">Colleges</a>
	      </li>
	    </ul>
	    <form class="form-inline my-2 mr-4 my-lg-0" method="POST" action="logout.php">
			<?php if(isset($_SESSION['logged_in'])) : ?>
				
				<div class="btn-group mr-4">
					<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Profile
					</button>
					<div class="dropdown-menu">
					
						<a class="dropdown-item" href="profile.php">My Profile</a>
						<a class="dropdown-item" href="#">My Wishlist</a>
						<div class="dropdown-divider"></div>
						<button class="btn dropdown-item" type="submit" name="logout">Log Out</button>
					</div>
				
				</div>
			<?php else : ?>	
					<div class="col"><a class="btn btn-outline-info text-light" href="login.php">Log In</a></div>
					<div class="col"><a class="btn btn-outline-info text-light" href="register.php">Register</a></div>
			<?php endif; ?>	
	    	
	     <!--  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
	      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
	    </form>
	  </div>
	</nav>
<!-- JS, Popper.js, and jQuery -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>