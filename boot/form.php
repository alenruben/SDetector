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
	<label for="inputNama">Nama</label>
	<input type="text" id="inputNama"  placeholder="Nama Lengkap" class="form-control">

	<label for="inputNIM">NIM</label>
	<input type="text" id="inputNIM" placeholder="NIM" class="form-control">

	<label for="inputAlamat">Alamat</label>
	<input type="text" id="inputAlamat" placeholder="Alamat" class="form-control">
	<label for="inputAgama">Agama</label >
	<select id="inputAgama" class="form-control">
		<option>Islam</option>
		<option>Kristen</option>
		<option>Katolik</option>
		<option>Budha</option>
		<option>Hindu</option>
	</select>
	<label for="inputKomentar">Komentar</label>
	<textarea id="inputKomentar" class="form-control"></textarea> 

	<input type="checkbox" class="form-check-input" id="normalCheckbox" >
	<label class="form-check-label" for="normalCheckbox">Pria
	</label> <br>
	<input type="checkbox" class="form-check-input" id="normalCheckbox" > 
	<label class="form-check-label" for="normalCheckbox">Wanita
	</label> <br>
	<input type="checkbox" class="custom-control-input" id="customCheckbox" >
	<label class="custom-control-label" for="customCheckbox">Pria
	</label> <br>
	<input type="checkbox" class="custom-control-input" id="customCheckbox" > 
	<label class="custom-control-label" for="normalCheckbox">Wanita
	</label> <br>

	<input type="radio" class="form-check-input" id="normalRadio1"  name="normalRadio">
	<label class="form-check-label" for="normalRadio1">
		Radio 1
	</label> <br>
	<input type="radio" class="form-check-input" id="normalRadio2"  name="normalRadio">
	<label class="form-check-label" for="normalRadio2">
		Radio 2
	</label> <br>
	<input type="radio" class="custom-control-input" id="customRadio1"  name="customRadio">
	<label class="custom-control-label" for="customRadio1">
		Radio 1
	</label> <br>
	<input type="radio" class="custom-control-input" id="customRadio2"  name="customRadio">
	<label class="custom-control-label" for="customRadio2">
		Radio 2
	</label> <br>
	
</div>
<div class="container">
	<input type="checkbox" class="custom-control-input" id="customCheckbox">
	<label class="custom-control-label" for="customCheckbox"> Custom checkbox
	</label>
	<input type="radio" class="custom-control-input" id="customRadio1"  name="customRadio">
	<label class="custom-control-label" for="customRadio1"> Custom radio
	</label>

</div>

<script src="js/jquery-3.4.1.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>