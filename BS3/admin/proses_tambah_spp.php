<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

          	// membuat variabel untuk menampung data dari form
            $id_spp     = $_POST['id_spp'];
            $tahun     = $_POST['tahun'];
            $nominal     = $_POST['nominal'];
            


                  // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                  $query = "INSERT INTO spp (id_spp, tahun, nominal) VALUES ('$id_spp', '$tahun', '$nominal')";
                  $result = mysqli_query($koneksi, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='spp.php';</script>";
                  }
                  

            


 
