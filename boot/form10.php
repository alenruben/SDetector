<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<style type="text/css">
	</style>

</head>
<body>
<div class="container mt-3">
	<div class="input-group">
		<div class="input-group-prepend">
			<button type="button" class="btn btn-danger">
				Split Dropdown
			</button>
			<button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
				<span class="sr-only">Toggle Dropdown</span>
			</button>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="#">Menu 1</a>
				<a class="dropdown-item" href="#">Menu 2</a>
				<a class="dropdown-item" href="#">Menu 3</a>
				<a class="dropdown-item" href="#">Menu 4</a>
			</div>
		</div>
		<input type="text" class="form-control">
	</div>
	
</div>

<script src="js/jquery-3.4.1.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>

</body>
</html>