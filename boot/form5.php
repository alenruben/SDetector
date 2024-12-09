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
	<form class="needs-validation" novalidate>
		<div class="form-row">
			<div class="form-group col-4">
			<label for="inputNama">Nama lengkap</label>
			<input type="text" class="form-control" id="inputNama" value="Amara ">
			<div class="valid-feedback">Nama OK!</div>
		</div>

		<div class="form-group col-4">
			<label for="inputUsername">Username</label>
			<input type="text" class="form-control" id="inputUsername" required>
			<div class="valid-feedback">Username OK!</div>
			<div class="invalid-feedback">Silahkan Isi Username Anda</div>
		</div>

		<div class="form-group col-4">
			<label for="inputEmail">Email</label>
			<input type="email" class="form-control" id="inputEmail" required>
			<div class="valid-feedback">Email OK!</div>
			<div class="invalid-feedback">Silahkan Isi Email Anda</div>
		</div>
		</div>

		<div class="form-group">
			<div class="form-check">
				<input type="checkbox" class="form-check-input" id="checkSyarat" required>
				<label class="form-check-label" for="checkSyarat">Saya setuju dengan syarat dan ketentuan</label>
				<div class="invalid-feedback">Harap centang syarat dan ketentuan</div>
			</div>
			<button type="submit" class="btn btn-primary">Daftar</button>
		</div>

		
	</form>
</div>

<script src="js/jquery-3.4.1.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>
<script>
	(function(){
		'use strict';
		window.addEventListener('load',function(){
			var forms = document.getElementByClassName('needs-validation');
			var validation = Array.prototype.filter.call(forms, function(form){
				form.addEventListener('submit',function(event){
					if (form.checkValidity()== false) {
						event.preventDefault();
						event.stopPropagation();
					}
					form.classList.add('was-validated');
				}, false);
			});
		}, false);
	})();
</script>
</body>
</html>