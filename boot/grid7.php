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
<div class="container">
	<div class="row">
		<div class="col-4">kolom 1</div>
		<div class="col-3">kolom 2</div>
		<div class="col-5">kolom 3</div>
	</div>
	<div class="row">
		<div class="col-4 col-sm-5" >kolom 1</div>
		<div class="col-3 col-sm-4">kolom 2</div>
		<div class="col-5 col-sm-3">kolom 3</div>
	</div>
	<div class="row">
		<div class="col-4 col-sm-5 col-md-2" >kolom 1</div>
		<div class="col-3 col-sm-4 col-md-6">kolom 2</div>
		<div class="col-5 col-sm-3 col-md-4">kolom 3</div>
	</div>
	<div class="row">
		<div class="col-4 col-sm-5 col-md-2 col-lg-3" >kolom 1</div>
		<div class="col-3 col-sm-4 col-md-6 col-lg-3">kolom 2</div>
		<div class="col-5 col-sm-3 col-md-4 col-lg-6">kolom 3</div>
	</div>
	<div class="row">
		<div class="col-4 col-sm-5 col-md-2 col-lg-3 col-xl-1" >kolom 1</div>
		<div class="col-3 col-sm-4 col-md-6 col-lg-3 col-xl-1">kolom 2</div>
		<div class="col-5 col-sm-3 col-md-4 col-lg-6 col-xl-10">kolom 3</div>
	</div>	
	<div class="row">
		<div class="col-12 col-sm-6 col-md-6 col-lg-3">kolom 1</div>
		<div class="col-12 col-sm-6 col-md-6 col-lg-3">kolom 2</div>
		<div class="col-12 col-sm-6 col-md-6 col-lg-3">kolom 3</div>
		<div class="col-12 col-sm-6 col-md-6 col-lg-3">kolom 4</div>
	</div>
	
</div>

<script type="js/jquery-3.4.1.js"></script>
<script type="js/popper.min.js"></script>
<script type="js/bootstrap.js"></script>
</body>
</html>