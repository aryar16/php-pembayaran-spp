<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$nis = $_POST['nis'];
$nama = $_POST['nama'];
 
// menyeleksi data user dengan username dan password yang sesuai
$result = mysqli_query($koneksi,"SELECT * FROM siswa where nis='$nis' and nama='$nama'");

$cek = mysqli_num_rows($result);
 
if($cek > 0) {
	$data = mysqli_fetch_assoc($result);
	//menyimpan session user, nama, status dan id login
	$_SESSION['nis'] = $nis;
	$_SESSION['alamat'] = $data['alamat'];
	$_SESSION['status'] = "sudah_login";
	$_SESSION['nisn'] = $data['nisn'];

	header("location:siswa/index.php");
} else {
	header("location:login3.php?pesan=gagal login data tidak ditemukan.");
}
?>