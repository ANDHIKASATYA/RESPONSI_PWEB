<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lihat Harga</title>
    <style type="text/css">
       body {
	background: linear-gradient(to right, rgb(62, 254, 255),rgb(173, 255, 48));
	padding:80px 0;
	font-size: 25px;
}
.center{
	position: absolute;
    top: 25%;
    left: 50%;
    transform: translate(-55%, -55%);
    width: 70vh;
    border-radius: 10px;
	background: white;
	}
    </style>
</head>
<body>
	<div class="center">
		<?php 
			$nama = $_POST['pnama'];
			$asal = $_POST['pasal'];
			$tujuan = $_POST['ptujuan'];
			$jarak = $_POST['pjarak'];
			$total_bayar = $_POST['qtotal'];
			$tanggal = date("d-m-Y");
			echo "<head><title>Data pengirim</title></head>";
			$fp = fopen("pengirim.txt", "a+");
			fputs($fp, "$tanggal|$nama|$asal|$tujuan|$jarak|$total_bayar\n");
			fclose($fp);
			echo "<center>Terima kasih Telah Memilih Kami</center><br><br>";
			echo "<a href='responsi.php'><center>Cek Harga Pengiriman</center></a><br>";
			echo "<a href='lihat.php'><center>Lihat Data Anda</center></a><br>";
 		?>

	</div>
</body>
</html>


