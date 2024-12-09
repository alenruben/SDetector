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
	<label>Kirim Laporan</label>
	<div class="input-group">
		<div class="input-group-prepend">
			<div class="input-group-text">
				<input type="checkbox" id="checkEmail">
			</div>
			<label class="input-group-text" for="checkEmail">Kirim ke Email :</label>
		</div>
		<input type="email" class="form-control" placeholder="Alamat email...">
	</div>

	<br>

	<label>Pilih Jurusan</label>
	<div class="input-group">
		<div class="input-group-prepend">
			<div class="input-group-text">
				<input type="radio" name="Jurusan" id="jurusanTI">
			</div>
			<label class="input-group-text" for="jurusanTI">Teknologi Informasi</label>
		</div>
		<input type="text" class="form-control" placeholder="Nama Univ...">
	</div>
	<div class="input-group">
		<div class="input-group-prepend">
			<div class="input-group-text">
				<input type="radio" name="Jurusan" id="jurusanTM">
			</div>
			<label class="input-group-text" for="jurusanTI">Teknik Mesin</label>
		</div>
		<input type="text" class="form-control" placeholder="Nama Univ...">
	</div>
	<div class="input-group">
		<div class="input-group-prepend">
			<div class="input-group-text">
				<input type="radio" name="Jurusan" id="jurusanTM">
			</div>
			<label class="input-group-text" for="jurusanTI">Teknik Kimia</label>
		</div>
		<input type="text" class="form-control" placeholder="Nama Univ...">
	</div>
</div>

<script src="js/jquery-3.4.1.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>

</body>
</html>