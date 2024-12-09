<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<style type="text/css">
	</style>

</head>
<body>
<form>
	<div class="container">
		<div class="form-row">
			<div class="form-group col-4">
				<label for="inputNama">Nama Lengkap</label>
				<input type="text" class="form-control" id="inputNama">
			</div>
			<div class="form-group col-4">
				<label for="inputUsername">Username</label>
				<input type="text" class="form-control" id="inputUsername" required>
			</div>
			<div class="form-group col-4">
				<label for="inputEmail">Email</label>
				<input type="email" class="form-control" id="inputEmail" required>
			</div>
			</div>
			<div class="form-group">
				<div class="form-check">
					<input type="checkbox" class="form-check-input" id="checkSyarat" required>
					<label class="form-check-label" for="checkSyarat">
						Saya setuju dengan syarat dan ketentuan
					</label>
				</div>
		</div>
		<button type="submit" class="btn btn-primary">Daftar</button>
</div>

</form>


<script src="js/jquery-3.4.1.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>