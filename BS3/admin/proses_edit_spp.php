<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
  $id_spp = $_POST['id_spp'];
  $tahun  = $_POST['tahun'];
  $nominal   = $_POST['nominal'];
 
                      
                    // jalankan query UPDATE berdasarkan ID yang produknya kita edit
                   @$query  = "UPDATE spp SET tahun = '$tahun', nominal = '$nominal'";
                    @$query .= "WHERE id_spp = '$id_spp'";
                    $result = mysqli_query($koneksi, $query);
                    // periska query apakah ada error
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
                    } else {
                      //tampil alert dan akan redirect ke halaman index.php
                      //silahkan ganti index.php sesuai halaman yang akan dituju
                      echo "<script>alert('Data berhasil diubah.');window.location='spp.php';</script>";
                    }
               
