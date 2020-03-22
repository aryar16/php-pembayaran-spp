<?php
  include('koneksi.php');
   //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
//memulai session yang disimpan pada browser
session_start();

//cek apakah sesuai status sudah login? kalau belum akan kembali ke form login
if($_SESSION['status']!="sudah_login"){
//melakukan pengalihan
header("location:../login.php");
} 

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="assets/img/favicon.ico">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>Light Bootstrap Dashboard by Creative Tim</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
 
</head>
<body>
  
<?php
require '../navbar.php'
?>

 
    <center><a href="form_tambah_petugas.php" class="btn btn-primary" style="background: #007bff; color: white;">+ &nbsp; Tambah Petugas</a><center>
    <br/>

    <?php
require '../sidebar.php';
    ?>

    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
               <div class="header">
                                <h4 class="title">Data Petugas</h4>
                                <p class="category">SMP HASBI HISMANUDIN</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                    
    <table  class="table table-hover table-striped" >
      <thead>
        <tr>
          <th>No.</th>
          <th>Id Petugas</th>
          <th>Username</th>
          <th>Password</th>
          <th>Nama Petugas</th>
          <th>Level</th>
          
        </tr>
    </thead>
    <tbody>
      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM petugass ORDER BY id_petugas ASC";
      $result = mysqli_query($koneksi, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }

      //buat perulangan untuk element tabel dari data mahasiswa
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
       <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $row['id_petugas']; ?></td>
          <td><?php echo $row['username']; ?></td>
          <td> <?php echo $row['password']; ?></td>
          <td> <?php echo $row['nama_petugas']; ?></td>
           <td> <?php echo $row['level']; ?></td>
          
         
          <td>
              <a href="edit_petugas.php?id_petugas=<?php echo $row['id_petugas']; ?>">Edit</a> |
              <a href="proses_hapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
          </td>
      </tr>
         
      <?php
        $no++; //untuk nomor urut terus bertambah 1
      }
      ?>
    </tbody>
    </table>
  </div>
  </div>
  </div>
  </div>
  </div>
</div>

    

</body>

<!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
  <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

  <!--  Charts Plugin -->
  <script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
  <script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

  <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
  <script src="assets/js/demo.js"></script>

  <script type="text/javascript">
      $(document).ready(function(){

          demo.initChartist();

          $.notify({
              icon: 'pe-7s-gift',
              message: "Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer."

            },{
                type: 'info',
                timer: 4000
            });

      });
  </script>
</html>



