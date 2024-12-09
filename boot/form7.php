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
	<label for="inputHargaBarang">Harga Barang</label>
	<div class="input-group">
		<div class="input-group-prepend">
			<span class="input-group-text">Rp.</span>
		</div>
		<input type="text" class="form-control" id="inputHargaBarang" 
		 placeholder="0000000">
		 <div class="input-group-append">
		 	<span class="input-group-text">.00</span>
		 </div>
	</div>

	<br>
	<label class="inputProfile">URL Facebook</label>
	<div class="input-group">
		<div class="input-group-prepend">
			<span class="input-group-text">https://www.facebook.com</span>
		</div>
		<input type="text" class="form-control" 
		id="inputProfile" placeholder="URL profile">
		</div>
	<br>
	<label class="inputProfile">URL Facebook</label>
	<div class="input-group">
		<div class="input-group-prepend">
			<span class="input-group-text">https://</span>
			<span class="input-group-text">www.</span>
			<span class="input-group-text">facebook.com</span>
		</div>
		<input type="text" class="form-control" 
		id="inputProfile" placeholder="URL profile">
		</div>
</div>

<script src="js/jquery-3.4.1.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>

</body>
</html>