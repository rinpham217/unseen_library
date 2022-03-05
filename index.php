<?php require_once('config.php') ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<div>
			<meta charset="UTF-8">
      		<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="bootstrap.css">
	</head>
	<body style = "background-image: url('librarypro.png')">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    	<img src="newnewlogo.png" alt="Unseen Library Logo" height = "100" width = "100"/>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
  						<a class="nav-link" href="login.php">Sign In</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="search.php">Search</a>
		        </li>
						<li class="nav-item">
							<a class="nav-link" href="top.php">Top Lists</a>
		        </li>
            <li class="nav-about">
              <a class="nav-link" href="about.php">About</a>
            </li>
			     	<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					  Dropdown
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#">Action</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Another action</a>
				  		<div class="dropdown-divider"></div>
				  		<a class="dropdown-item" href="#">Something else here</a>
						</div>
					</li>
				</ul>
				<form class="form-inline my-2 my-lg-0">
					<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</form>
			</div>
		</nav>
    <div class="jumbotron">
      <h1 class="display-3">Hello, world!</h1>
      <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
      <hr class="my-4">
      <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
      <p class="lead">
        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
      </p>
    </div>
	</body>
</html>
