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
	<ul class="nav nav-pills ">
		<li class="nav-item">
			<a class="nav-link active" href="#">Active</a>
		</li>

		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Dropdown button</a>
		<div class="dropdown-menu">
			<a class="dropdown-item" href="#">Pilihan Menu 1</a>
			<a class="dropdown-item" href="#">Pilihan Menu 2</a>
			<a class="dropdown-item" href="#">Pilihan Menu 3</a>
		</div>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="#">Link</a>
	</li>
	<li class="nav-item">
		<a class="nav-link disabled" href="#">Disabled</a>
	</li>
	</ul>
	
</div>

<script src="js/jquery-3.4.1.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>