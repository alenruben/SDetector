<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<style type="text/css">
	</style>

</head>
<body>
<div class="container">
	<div class="container mt-3"></div>
	<nav class="navbar navbar-expand navbar-dark bg-dark justify-content-between">
		<a class="navbar-brand" href="#">
			<img src="img/phto.jpg" width="30" height="30">
		</a>
	<ul class="navbar-nav mr-auto">
		<li class="nav-item active">
			<a class="nav-link" href="#">Home</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">Features</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">Pricing</a>
		</li>
		<li class="nav-item">
			<a class="nav-link disabled" href="#">Disabled</a>
		</li>
	</ul>
	<form class="form-inline">
		<input class="from-control mr-sm-2" type="search" placeholder="Search">
		<button class="btn btn-outline-success" type="submit">Search</button>
	</form>
	</nav>
</div>

<script src="js/jquery-3.4.1.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>