<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<style type="text/css">
		.row{
			margin-top: 1em;
		}
		[class^="col"]
		{
			background-color: pink;
			border: 1px solid #cccc00;
			padding: 0.5em;
			margin-top: 0.4em
		}
	</style>
</head>
<body>
<div class="row">
		<div class="col-4">Sidebar</div>
		<div class="col-8">konten</div>
	</div>
<div class="container">
	<div class="row">
		<div class="col-5">col-5</div>
		<div class="col-5">col-5</div>
		<div class="col-3">col-3</div>
	</div>
	<div class="row">
		<div class="col-4">col-4</div>
		<div class="col-4">col-4</div>
	</div>
	<div class="row">
		<div class="col-8">col-8</div>
		<div class="col-4">col-4</div>
		<div class="col-3">col-3</div>
		<div class="col-9">col-9</div>
	</div>
</div>

<script type="js/jquery-3.4.1.js"></script>
<script type="js/popper.min.js"></script>
<script type="js/bootstrap.js"></script>
</body>
</html>