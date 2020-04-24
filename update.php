<?php
//koneksi database
include 'koneksi.php';

//menangkap data yang dikirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$menu = $_POST['menu'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];

//update data ke database
mysql_query($koneksi,"update pesanan set nama='$nama',menu='$menu',telp='$telp',alamat='$alamat' where id=$'id'");

//mengalihkan halaman kembali ke pelanggan.php
header("location:pelanggan.php");

?>