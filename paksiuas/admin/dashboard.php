<?php 
	session_start();
	if($_SESSION['status_login'] != true){
		echo '<script>window.location="login.php"</script>';
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mini Market Netsle</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body>
	<?php
	include '../partial/header.php';
	?>
	<!-- content -->
	<div class="section">
		<div class="container">
			<h3>Dashboard</h3>
			<div class="box">
				<h4>Selamat Datang <?php echo $_SESSION['a_global']->admin_name ?> di Adminstrator Mini Market Netsle</h4>
			</div>
			<div class="kontenlaporan">
				<div class="konten">
					<p>total Order</p>
					<div class="konten">

						<img src="https://icons8.com/icon/23169/add-shopping-cart" alt="">
						<h1>isi php</h1>
					</div>
				</div>
				<div class="konten">
					<p>total pendapatan</p>
					<div class="konten">

						<img src="https://icons8.com/icon/PlBvd0J9s97I/buy-with-card" alt="">
						<h1>isi php</h1>
					</div>
				</div>
				<div class="konten">
					<p>produk terjual</p>
					<div class="konten">
						<img src="https://icons8.com/icon/11833/buy" alt="">
						<h1>isi php</h1>

					</div>
				</div>
			</div>
			<div class="kritikhistori">
				<div class="kritik">
					<h3>Kritik Dari Pelanggan</h3>
					<div>
						<h4>from pelanggan</h4>
						<p>teksnya</p>
					</div>
				</div>
				<div class="histori">
					<h3>History Pemesanan Pelanggan</h3>
					<div>
						<h4>from pelanggan</h4>
						<p>Telah membeli</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	include '../partial/footer.php';
	?>
	
</body>
</html>