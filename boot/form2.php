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
	<div class="form-group">
	<label for="selectNormal">
		Tahun
	</label>
	<select id="selectNormal" class="form-control">
		<option>2020</option>
		<option>2021</option>
		<option>2022</option>
		<option>2023</option>
	</select>
</div>
<div class="form-group">
	<label for="selectCustom">
		Tahun
	</label>
	<select id="selectCustom" class="custom-select">
		<option>2020</option>
		<option>2021</option>
		<option>2022</option>
		<option>2023</option>
	</select>
</div>
<div class="form-group">
	<label for="selectCustom">
		Small
	</label>
	<select id="selectCustom" class="custom-select custom-select-sm">
		<option>2020</option>
		<option>2021</option>
		<option>2022</option>
		<option>2023</option>
	</select>
</div>
<div class="form-group">
	<label for="selectCustom">
		Regular
	</label>
	<select id="selectCustom" class="custom-select">
		<option>2020</option>
		<option>2021</option>
		<option>2022</option>
		<option>2023</option>
	</select>
</div>
<div class="form-group">
	<label for="selectCustom">
		Large
	</label>
	<select id="selectCustom" class="custom-select custom-select-lg">
		<option>2020</option>
		<option>2021</option>
		<option>2022</option>
		<option>2023</option>
	</select>
</div>
<div class="form-group">
	<label for="fileUploadNormal">
		Pilih File
	</label>
	<input type="file" id="fileUploadNormal" class="form-control-file">
</div>
<div class="custom-file" >
	<label for="fileUpload" class="custom-file-label">
		Pilih File
	</label>
	<input type="file" id="fileUpload" class="custom-file-input">
</div>
<div class="form-group">
	<label for="rangeJarakNormal">Jarak</label>
	<input type="range" id="rangeJarakNormal" class="form-control-range">
</div>
<div class="form-group">
	<label for="rangeJarak">Jarak</label>
	<input type="range" id="rangeJarak" class="custom-range">
</div>
</div>


<script src="js/jquery-3.4.1.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>