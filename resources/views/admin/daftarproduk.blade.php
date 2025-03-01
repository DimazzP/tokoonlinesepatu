<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width. initial-scale=1.0">
    <title>Pengaturan | Tv Store</title>

	<!-- Boxicons -->
	<link rel="stylesheet" href="{{ asset('boxicons.min.css') }}" >
	<!-- My CSS -->
	<link rel="stylesheet" href="{{ asset('style.css') }}">
    {{-- bootstrap --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Product List</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">



</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">Tv Store</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="{{ route('admin.daftarproduk') }}">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Daftar Produk</span>
				</a>
			</li>
			<li>
				<a href="{{ route('admin.create') }}">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Add Penjualan</span>
				</a>
			</li>
			<li>
				<a href="{{ route('admin.pesanan') }}">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Pesanan</span>
				</a>
			</li>
			<li>
				<a href="{{ route('admin.laporan') }}">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Laporan</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="{{ route('admin.pengaturan') }}">
					<i class='bx bxs-cog' ></i>
					<span class="text">Pengaturan</span>
				</a>
			</li>
			<li>
				<a href="{{ route('login') }}" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit"  class="search-btn">cari</button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="{{ asset('img/riyan.jpeg') }}">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Daftar Produk</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a>
			</div>

			{{-- <ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3>5000 pcs</h3>
						<p>New Order</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>10000</h3>
						<p>Visitors</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3>100 Juta</h3>
						<p>Total Pendapatan</p>
					</span>
				</li>
			</ul> --}}



        </main>

		<!-- MAIN -->
	</section>
	<!-- CONTENT -->


	<script src="{{ asset('script.js') }}"></script>
</body>
</html>

