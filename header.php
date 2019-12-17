<?php
session_start();
include 'cek.php';
include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<!-- (meta) agar halaman bisa responsive -->
	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>KIOS MASA DEPAN</title> 

	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="dist/css/admin.css">
</head>
<body>
<div class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand">KIOS MASA DEPAN</a>
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span> 	
				</button>
			</div>
			<div class="collapse navbar-collapse">				
				<ul class="nav navbar-nav navbar-right">
					<li><a id="pesan_sedia" href="#" data-toggle="modal" data-target="#modalpesan"><span class='glyphicon glyphicon-comment'></span>  Pesan</a></li>
					<li><a class="dropdown-toggle" data-toggle="dropdown" role="button" href="#">Hy , <?php echo $_SESSION['uname']  ?>&nbsp&nbsp<span class="glyphicon glyphicon-user"></span></a></li>
				</ul>
			</div>
		</div>
	</div>

  		<aside class="sidebar sidebar-collapse ">
			<div class="menu">
				<ul class="menu-content">
					<li>
						<a href="Dashboard.php"><i class="fa fa-home"></i><span> Dashboard</span></a>

					<li>
						<a href="barang.php"><i class="fa fa-cubes" ></i><span> Barang</span></a>
					</li>
					<li>
						<a href="barang_laku.php"><i class="fa fa-shopping-cart"></i><span> Penjualan</span></a>
					</li>
					<li>
						<a href="logout.php" >	
						<i class="fa fa-sign-out" ></i><span>Logout</span></a>
					</li>
				</ul>
			</div>
		</aside>
