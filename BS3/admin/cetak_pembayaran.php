<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table width="100%">
<tr>
<td width="25" align="center"><img style="width: 200px;" src ="https://lh3.googleusercontent.com/proxy/1lNMexm8m8LlDT6IzbHmrm3T024bzEFzfys3Nn_8l5_xb2ZZM2QrLI-CH1uiZR9Qhj7gQVmUkJc_jWsc-NM1W6ajnH_Ikhfm5rFWk_6Yft1uGbX_1vd8Prk" width="60%"></td>
<td width="50" align="center"><h1>SMP HASBI HISMANUDIN</h1><br><h2>BANDUNG</h2></td>
<td width="25" align="center"><img style="width: 250px;" src="https://cdn1-production-images-kly.akamaized.net/v9odZb9EJethP_kDlxQ1lNS2LBk=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/1000052/original/097346900_1443162687-tut_wuri.jpg" width="100%"></td>
</tr>
</table>
<hr>
	<?php 
	include 'koneksi.php';
	?>
	<table border="1" style="width: 100%">
		<tr>
			<th width="1%">No</th>
			<th>ID PEMBAYARAN</th>
			<th>ID PETUGAS</th>
			<th>NISN</th>
			<th>TGL BAYAR</th>
			<th>BULAN BAYAR</th>
			<th>TAHUN BAYAR</th>
			<th>ID SPP</th>
			<th width="5%">JUMLAH BAYAR</th>
		</tr>
<?php 
		$no = 1;
		$sql = mysqli_query($koneksi,"select * from pembayarans");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['id_pembayaran']; ?></td>
			<td><?php echo $data['id_petugas']; ?></td>
			<td><?php echo $data['nisn']; ?></td>
			<td><?php echo $data['tgl_bayar']; ?></td>
			<td><?php echo $data['bulan_dibayar']; ?></td>
			<td><?php echo $data['tahun_dibayar']; ?></td>
			<td><?php echo $data['id_spp']; ?></td>
			<td><?php echo $data['jumlah_bayar']; ?></td>
		</tr>
		<?php 
		}
		?>
		</table>

	<script>
		window.print();
	</script>
</body>
</html>



