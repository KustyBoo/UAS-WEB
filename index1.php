<?php

	require "konfirmasi-admin.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>EKIN</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="index1.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php"><b>EKIN</b></a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
						<form method="post">
							<span class="submit">
								<input type="hidden" name="logout" value="1"/>
								<input type="submit" value="Logout"/>
							</span>
						</form>
				</ul>
			</div>
		</div>
	</nav>

	<div id="myCarousel" class="carousel slide" data-ride="carousel">

		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
		</ol>

		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="https://static.nike.com/a/images/f_auto/dpr_1.0,cs_srgb/w_1768,c_limit/d2cf20d3-8dd5-4f8d-966f-fc41288be41f/nike-just-do-it.jpg" alt="Image">
				<div class="carousel-caption">
					<h3><b> EKIN </b></h3>
					<h4><b>- Est 2022 - </b></h3>
				</div>
			</div>

			<div class="item">
				<img src="https://static.nike.com/a/images/f_auto/dpr_1.0,cs_srgb/w_1768,c_limit/26e1f949-04db-4b1a-8082-9603fa69975c/nike-just-do-it.jpg" alt="Image">
				<div class="carousel-caption">
					<h3><b> EKIN </b></h3>
					<h4><b>- Est 2022 - </b></h3>
				</div>
			</div>
		</div>

		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

	<div class="container text-center">
		<h3>- Masukkan Data Sepatu - </h3><br>
		<div class="row">
			<div class="col-sm-4">
				<div class="well">
					<form name="finput" method="POST" action="#">
						<table border="1" width="80%" align="center" cellpadding="5" cellspacing="0">
							<tr>
								<td width="50%">Nama Sepatu</td>
								<td width="50%"><input type="text" name="nama"></td>
							</tr>
							<tr>
								<td>Warna Sepatu</td>
								<td><input type="text" name="warna"></td>
							</tr>								
							<tr>
								<td>Brand Sepatu</td>
								<td><input type="text" name="brand"></td>
							</tr>
							<tr>
								<td>Jenis Sepatu</td>
								<td><input type="text" name="jenis"></td>
							</tr>
							<tr>
							<tr>
								<td>Ukuran Sepatu</td>
								<td><input type="text" name="ukuran"></td>
							</tr>
								<td colspan="2" align="center">
									<input type="submit" name="tampil" value="Submit">
								</td>
							</tr>
						</table>
					</form>
				</div>
			</div>
		</div>
	</div><br>

	<div class="container text-center">
		<h3>- Tampilan Data Sepatu - </h3><br>
		<div class="row">
			<div class="col-sm-4">
				<div class="well">
					<form name="finput" method="POST" action="#">
					<table border="1" width="80%" align="center" cellpadding="1" cellspacing="0">
							<tr>
								<td width="50%">Nama Sepatu</td>
								<td width="50%">
									<?php
										$nama = isset($_POST['nama']) ? $_POST['nama'] : "";
										echo $nama;
									?>
								</td>
							</tr>
							<tr>
								<td>Warna Sepatu</td>
								<td>
									<?php
										$warna = isset($_POST['warna']) ? $_POST['warna'] : "";
										echo $warna;
									?>
								</td>
							</tr>
							<tr>
								<td>Brand Sepatu</td>
								<td>
									<?php
										$brand = isset($_POST['brand']) ? $_POST['brand'] : "";
										echo $brand;
									?>
								</td>
							</tr>
							<tr>
								<td>Jenis Sepatu</td>
								<td>
									<?php
										$jenis = isset($_POST['jenis']) ? $_POST['jenis'] : "";
										echo $jenis;
									?>
								</td>
							</tr>
							<tr>
							<tr>
								<td>Ukuran Sepatu</td>
								<td>
									<?php
										$ukuran = isset($_POST['ukuran']) ? $_POST['ukuran'] : "";
										echo $ukuran;
									?>
								</td>
						</table>
					</form>
				</div>
			</div>
		</div>
	</div><br>

	<footer class="container-fluid text-center">
        <p> Managed and Owned by Felix Christopher Afrian</p>
        <p> E-mail : christoperafrian@Gmail.com</p>
		<p> Instagram : @f.chris.a </p>
	</footer>

</body>

</html>