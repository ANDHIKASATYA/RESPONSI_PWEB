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
			echo "<head><title>Data pengirim</title></head>";
			$fp = fopen("pengirim.txt", "r");
			echo "<table border='0' align='center'>";
			while ($isi = fgets($fp)) {
   			$pisah = explode('|', $isi);
    		echo "<tr><td>Tanggal </td><td>: $pisah[0] </td></tr>";
    		echo "<tr><td>Nama </td><td>: $pisah[1] </td></tr>";
    		echo "<tr><td>Asal </td><td>: $pisah[2] </td></tr>";
    		echo "<tr><td>Tujuan </td><td>: $pisah[3] </td></tr>";
    		echo "<tr><td>Jarak(KM) </td><td>: $pisah[4] </td></tr>";
    		echo "<tr><td>Total Bayar </td><td>: $pisah[5] </td></tr>";
}
echo "</table>";
echo "<a href='responsi.php'><center> Cek Harga Pengiriman </center></a>";

?>

	</div>
</body>
</html>