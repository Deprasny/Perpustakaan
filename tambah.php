<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Buku</title>

    <!-- Bootsrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center mt-3">Tambah data Buku</h1>
    <form method="post" action="tambah_aksi.php">
    <div class="container">
        <form action="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Buku</label>
                <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama Buku">

            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Nama Pengarang</label>
                <input type="text" name="pengarang" class="form-control" id="exampleInputPassword1" placeholder="Masukan Nama Pengarang">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Penerbit</label>
                <input type="text" name="penerbit" class="form-control" id="exampleInputPassword1" placeholder="Masukan Nama Penerbit">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="index.php" class="btn btn-danger">Kembali</a>
        </form>
    </div>
    </form>
</body>

</html>