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

	<div>
		<h2 class="text-center mt-3">CRUD BUKU PERPUSTAKAAN</h2>
		<br />
		<br />
		<div class="container table-responsive align-center">
			<table class="table table-striped">
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
				<?php endwhile; ?>
			</table>
			<a href="tambah.php" class="btn btn-primary">TAMBAH BUKU</a>
		</div>
	</div>

</body>

</html>