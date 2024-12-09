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
		<div class="col-10"><form>
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

</form></div>
	</div>
</div>

<script type="js/jquery-3.4.1.js"></script>
<script type="js/popper.min.js"></script>
<script type="js/bootstrap.js"></script>
</body>
</html>