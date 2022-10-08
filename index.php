<?php

	require "konfirmasi-user.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>EKIN</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="index.css">
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
						<span class="button">
							<input type="hidden" name="logout" value="1" />
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
					<h3><b> NIKE </b></h3>
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
		<h3> - Shoes of the day - </h3>
			<div class="row">
				<div class="col-sm-5">
					<div class="well">
						<img src="https://images.squarespace-cdn.com/content/v1/5afceb6f5ffd2052611eff46/1620265160178-VBFLPCXNPR66AJEX9SO0/nike-dunk-low-white-black-2021-panda-hallofsneakz.png?format=750w" alt="shoes of the day"  width="50%">
						<p><b>Nike Dunk Low "Black White"</b></p>
					</div>
				</div>
			</div>
	</div>

	<div class="container text-center">
		<h3>- Tampilan Data Sepatu - </h3><br>
		<div class="row">
			<div class="col-sm-4">
				<div class="well">
					<form name="finput">
						<table border="1" width="80%" align="center" cellpadding="1" cellspacing="0">
							<tr>
								<td width="50%">Nama Sepatu</td>
								<td width="50%">
									Nike Dunk Low "Black White"
								</td>
							</tr>
							<tr>
								<td>Warna Sepatu</td>
								<td>
									Hitam - Putih
								</td>
							</tr>
							<tr>
								<td>Brand Sepatu</td>
								<td>
									Nike
								</td>
							</tr>
							<tr>
								<td>Jenis Sepatu</td>
								<td>
									Dunk Low
								</td>
							</tr>
							<tr>
							<tr>
								<td>Ukuran Sepatu</td>
								<td>
									36 - 45
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
