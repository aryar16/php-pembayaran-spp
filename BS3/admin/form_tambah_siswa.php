<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
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
    
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: salmon;
      }
    button {
          background-color: salmon;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: salmon;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
    </style>
  </head>
  <body>
    
<?php
require '../navbar.php'
?>
<?php
require '../sidebar.php';
    ?>


      <center>
        <h1>Tambah Siswa</h1>
      <center>
      <form method="POST" action="proses_tambah_siswa.php" enctype="multipart/form-data" >
      <section class="base">
        <div>
          <label>Nisn</label>
          <input type="text" name="nisn" autofocus="" required="" />
        </div>
        <div>
          <label>Nis</label>
         <input type="text" name="nis" />
        </div>
        <div>
          <label>Nama</label>
         <input type="text" name="nama" required="" />
        </div>
        <div>
          <label>Id Kelas</label>
        <select class="form-control" name="id_kelas">
       <?php
      $con = mysqli_connect("localhost","root","","spp");

      //display values in combobox/dropdown
      $result = mysqli_query($con,"SELECT * FROM kelas ORDER BY id_kelas");
      while($row = mysqli_fetch_assoc($result))
   {
     echo "<option>$row[id_kelas]</option>";
    } 
      ?>
</select>
</div>
        <div>
          <label>Alamat</label>
         <input type="text" name="alamat" required="" />
        </div>
         
        <div>
          <label>No_telp</label>
         <input type="text" name="no_telp" required="" />
        </div>
         <div>
          <label>Id Spp</label>
        <select class="form-control" name="id_spp">
       <?php
      $con = mysqli_connect("localhost","root","","spp");

      //display values in combobox/dropdown
      $result = mysqli_query($con,"SELECT * FROM spp ORDER BY id_spp");
      while($row = mysqli_fetch_assoc($result))
   {
     echo "<option>$row[id_spp]</option>";
    } 
      ?>
</select>
</div>
        <div>
         <button type="submit">Simpan Siswa</button>
        </div>
        </section>
      </form>
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
              message: "Welcome to <b>SMP Hasbi Hismanudin</b> - a school is the best from USA."

            },{
                type: 'info',
                timer: 4000
            });

      });
  </script>
</html>