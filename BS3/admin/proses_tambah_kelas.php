<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

          	// membuat variabel untuk menampung data dari form
            $id_kelas     = $_POST['id_kelas'];
            $nama_kelas      = $_POST['nama_kelas'];
            $kompetensi_keahlian     = $_POST['kompetensi_keahlian'];
           


                  // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                  $query = "INSERT INTO kelas (id_kelas, nama_kelas, kompetensi_keahlian) VALUES 
                  ('$id_kelas', '$nama_kelas', '$kompetensi_keahlian')";
                  $result = mysqli_query($koneksi, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='kelas.php';</script>";
                  }

            


 
