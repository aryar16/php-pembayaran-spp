<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
  $nisn = $_POST['nisn'];
  $nis   = $_POST['nis'];
  $nama    = $_POST['nama'];
  $id_kelas    = $_POST['id_kelas'];
  $alamat    = $_POST['alamat'];
  $no_telp    = $_POST['no_telp'];
  $id_spp   = $_POST['id_spp'];
                      
                    // jalankan query UPDATE berdasarkan ID yang produknya kita edit
                   $query  = "UPDATE siswa SET nis = '$nis', nama = '$nama', id_kelas = '$id_kelas', alamat = '$alamat', no_telp = '$no_telp', id_spp = '$id_spp'";
                    $query .= "WHERE nisn = '$nisn'";
                    $result = mysqli_query($koneksi, $query);
                    // periska query apakah ada error
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
                    } else {
                      //tampil alert dan akan redirect ke halaman index.php
                      //silahkan ganti index.php sesuai halaman yang akan dituju
                      echo "<script>alert('Data berhasil diubah.');window.location='siswa.php';</script>";
                    }
               
