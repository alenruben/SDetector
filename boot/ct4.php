<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Layout 1 Kolom</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>

    <header class="container bg-primary text-white">
        <div class="row">
            <div class="col-12 py-4 text-center">
                <h1 class="display-1">Tutorial Bootstrap</h1>
                <p class="lead">Panduan Belajar Bootstrap untuk Pemula</p>
            </div>
        </div>
    </header>

    <main class="container border">
        <div class="row">
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

        </div>
    </main>

    <footer class="container bg-light">
        <div class="row">
            <div class="col-12 py-4">
                &copy; 2021 Tutorial Bootstrap
            </div>
        </div>
    </footer>

</body>
 <script type="js/jquery-3.4.1.js"></script>
<script type="js/popper.min.js"></script>
<script type="js/bootstrap.js"></script>
</html>