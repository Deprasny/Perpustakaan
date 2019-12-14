<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id_buku'];
$nama = $_POST['nama'];
$pengarang = $_POST['pengarang'];
$penerbit= $_POST['penerbit'];
 
// update data ke database
mysqli_query($koneksi,"update buku set nama='$nama', pengarang='$pengarang', penerbit='$penerbit' where id_buku='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>