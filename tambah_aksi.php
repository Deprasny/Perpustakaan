<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$pengarang = $_POST['pengarang'];
$penerbit = $_POST['penerbit'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into buku values('','$nama','$pengarang','$penerbit')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>