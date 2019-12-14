<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Aplikasi Perpustakaan</title>
	<!-- Bootsrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-blue">
		<a class="navbar-brand" href="#">PerpusKu.com</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Daftar Buku</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">genre Buku</a>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Cari" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Go!</button>
			</form>
		</div>
	</nav>
	<div>
		<h2 class="text-center">CRUD BUKU PERPUSTAKAAN</h2>
		<br />
		<br />
		<div class="table-responsive">
			<table class="table table-striped pr-2 pl-2">
				<tr>
					<th>NO</th>
					<th>Nama</th>
					<th>Pengarang</th>
					<th>Penerbit</th>
					<th>OPSI</th>
				</tr>
				<?php
				include 'koneksi.php';
				$no = 1;
				$data = mysqli_query($koneksi, "select * from buku");
				while ($d = mysqli_fetch_array($data)) : ?>
					?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $d['nama']; ?></td>
						<td><?php echo $d['pengarang']; ?></td>
						<td><?php echo $d['penerbit']; ?></td>
						<td>
							<a>EDIT</a>
							<a>HAPUS</a>
						</td>
					</tr>
				<? endwhile; ?>
				<a href="tambah.php">TAMBAH MAHASISWA</a>
			</table>
		</div>
	</div>

</body>

</html>