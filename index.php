<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>POSTEST 10</title>
		<style type="text/css">
		* {
	padding:0;
	margin:0;
	font-family: 'Times New Roman', sans-serif;
	color: #333;
}
header {
	height:70px;
}
header h1 {
	display: inline-block;
	float: left;
	padding:15px 24px;
	text-transform: uppercase;
}
header h1 a {
	transition: .3s;
}
header h1 a:hover {
	color: #F84744;
}
header ul {
	float: right;
}
header ul li {
	padding:24px;
	display: inline-block;
}
header ul li a {
	transition: .3s;
}
header ul li a:hover {
	color: #F84744;
}
a {
	text-decoration: none;
}
.container {
	width:90%;
	margin:0 auto;
}
.container::after {
	content: '';
	display: block;
	clear: both;
}
.mobile-menu {
	float: right;
	display: none;
	padding:18px;
}
.mobile-menu:hover {
	cursor: pointer;
}
#check {
	display: none;
}
.action-btn{
	display: inline-block;
    text-decoration: none;
    color: white;
    font-weight: 700;
    background: #567bfb;
    padding: 0.5em 2em;
    border-radius: 60px;
    margin: 1em 0;
    transition: 0.3s;
}
.banner {
	background: linear-gradient(to right, rgb(62, 254, 255),rgb(173, 255, 48));
	padding:80px 0;
}
section {
	padding:50px 0;
}
.banner img {
	width: 170px;
	border-radius: 10px;
	box-shadow: 0 3px 5px #ddd;
	margin-bottom: 10px;
}
section h3 {
	padding-bottom: 20px;
	text-align: center;
	margin:20px;
	position: relative;
}
section h3::before {
	content:'';
	display: block;
	position: absolute;
	bottom: 0;
	width:120px;
	height:1px;
	background-color: #ddd;
	left: calc(50% - 60px);
}
section h3::after {
	content:'';
	display: block;
	position: absolute;
	bottom: -1px;
	width:40px;
	height:4px;
	background-color: #F84744;
	left: calc(50% - 20px);
}
.col-4 {
	width:25%;
	box-sizing: border-box;
	padding:5px;
	float: left;
	text-align: center;
	margin-bottom: 15px;
}
.col-4 img {
	width:100%;
}
.col-4 a:hover img {
	transform: scale(1.2);
}
.col-3 {
	width:33.33%;
	box-sizing: border-box;
	float: left;
	text-align: center;
	padding:50px 10px;
}
.col-3 h4 {
	padding-bottom: 10px;
	border-bottom: 1px solid #ddd;
	margin-bottom: 15px;
}
footer {
	background-color: black;
	padding:25px;
	text-align: center;
}
footer small {
	color: #fff;
}
html {
	scroll-behavior: smooth;
}

@media (max-width: 768px){
	.mobile-menu {
		display: block;
	}
	header ul {
		display: none;
	}
	.col-4 {
		width:50%;
	}
	.col-3 {
		width:100%;
	}
} 
		</style>
	</head>
	<script language="JavaScript">
        function htgjrk(){
        var nama = (document.fform.pnama.value);
        var jarak =parseFloat(document.fform.pjarak.value);
        biaya = 5000; 
        total = jarak*biaya;
        document.fform.qtotal.value=eval(total);
    }
</script>
	<body>
		<header>
			<div class="container">
				<h1><a href="">AHMAD DAHLAN EXPRESS</a></h1>
				<ul>
					<li><a href="#Cek Harga">Cek Harga</a></li>
					<li><a href="#Social Media">Social Media</a></li>
				</ul>
				<label for="check" class="mobile-menu"><i class="fas fa-bars fa-2x"></i></label>
			</div>
		</header>
		<section class="banner">
			<div class="container">
				<div class="banner-left">
					<img src="foto.jpg">
					<h1>Muhamad Andhika Satya Azizi As Founder Of Ahmad Dahlan Express</h1>
				</div>
			</div>
		</section>
		<section id="Cek Harga">
			<div class="container">
				<h3>Cek Harga</h3>
				<center>
					<FORM method="post" action="proses.php" NAME ="fform">
						<table border="1" align="center"width="100%"><tr>
						<td width="150%" colspan="2" >
						<H2 ALIGN="center">Jasa Pengiriman Barang</H2></td></tr>
						<tr>
						<td width="50%"><PRE>
						<center>
						Nama          :<input type="text" size="30" name="pnama">
						Asal            :<input type="text" size="30" name="pasal">
						Tujuan        :<input type="text" size="30" name="ptujuan">
						Jarak(KM)  :<input type="text" size="30" name="pjarak">
						Total Bayar :<input type="text" size="30" name="qtotal">
						<div align="center"><strong><a href="lihat.php">::Lihat Data Anda::
						</center></td><pre>
						</tr>
						<tr>
						<td width="100%" colspan="2">
						<center>
						<INPUT TYPE="submit" value="Hitung" onclick="htgjrk()">
						<INPUT TYPE="reset" value="Ulang">
						</INPUT>
					</INPUT>
				</center>
			</td>
		</tr>
		</pre>
	</PRE>
</td>
</tr>
</table>
		</form>
			</div>
		</center>
		</section>
		</section>
		<section id="Social Media">
			<div class="container">
				<h3>Social Media</h3>
				<div class="col-3">
					<h4>INSTAGRAM</h4>
					<a href="https://www.instagram.com/?hl=id" target="blank"><img src="ig.jpg" alt="" width="50px" height="50px"></a>
				</div>

				<div class="col-3">
					<h4>WHATSAPP</h4>
					<a href="https://web.whatsapp.com/" target="blank"><img src="Wa.png" alt="" width="50px" height="50px"></a>
				</div>

				<div class="col-3">
					<h4>TELEGRAM</h4>
					<a href="https://web.telegram.org/k/" target="blank"><img src="telee.png" alt="" width="50px" height="50px"></a>
				</div>
			</div>
		</section>
		<footer>
			<div class="container">
				<small>Copyright &copy; 2022 - Muhamad Andhika Satya Azizi</small>
			</div>
		</footer>
	</body>
</html>