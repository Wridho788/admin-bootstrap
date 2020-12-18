<?php
require("conf/conn.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- Custom fonts for this template-->
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link href="library/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<!-- Google Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.17.0/css/mdb.min.css" rel="stylesheet">
	<!-- Custom styles for this template-->
	<link href="css/sb-admin-2.min.css" rel="stylesheet">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<!-- Datepicker -->
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<!-- Datatables -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-flash-1.6.1/b-html5-1.6.1/b-print-1.6.1/r-2.2.3/datatables.min.css" />


	<title>Admin - Dashboard</title>


</head>

<body id="page-top">
	<!-- Page Wrapper -->
	<div id="wrapper">
		<!-- Sidebar -->
		<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
			<!-- Sidebar - Brand -->
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
				<div class="sidebar-brand-icon rotate-n-15">
					<i class="fas fa-laugh-wink"></i>
				</div>
				<div class="sidebar-brand-text mx-3">Admin <sup>2</sup></div>
			</a>
			<!-- Divider -->
			<hr class="sidebar-divider my-0">
			<!-- Nav Item - Dashboard -->
			<li class="nav-item active">
				<a class="nav-link" href="index.php">
					<i class="fas fa-fw fa-tachometer-alt"></i>
					<span>Dashboard</span></a>
			</li>
		</ul>
		<!-- End of Sidebar -->

		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">

				<!-- Topbar -->
				<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

					<!-- Sidebar Toggle (Topbar) -->
					<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
						<i class="fa fa-bars"></i>
					</button>

					<!-- Topbar Navbar -->
					<ul class="navbar-nav ml-auto">

						<!-- Nav Item - Search Dropdown (Visible Only XS) -->
						<li class="nav-item dropdown no-arrow d-sm-none">
							<a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fas fa-search fa-fw"></i>
							</a>
							<!-- Dropdown - Messages -->
							<div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
								<form class="form-inline mr-auto w-100 navbar-search">
									<div class="input-group">
										<input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
										<div class="input-group-append">
											<button class="btn btn-primary" type="button">
												<i class="fas fa-search fa-sm"></i>
											</button>
										</div>
									</div>
								</form>
							</div>
						</li>

						<!-- Nav Item - User Information -->
						<li class="nav-item dropdown no-arrow">
							<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="mr-2 d-none d-lg-inline text-gray-600 small">Ridho Wahyu Nugroho</span>
								<img class="img-profile rounded-circle" src="img/undraw_profile.svg">
							</a>
							<!-- Dropdown - User Information -->
							<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
								<a class="dropdown-item" href="#">
									<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
									Profile
								</a>
								<a class="dropdown-item" href="#">
									<i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
									Settings
								</a>
								<a class="dropdown-item" href="#">
									<i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
									Activity Log
								</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
									<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
									Logout
								</a>
							</div>
						</li>

					</ul>

				</nav>
				<!-- End of Topbar -->

				<!-- Begin Page Content -->
				<div class="container-fluid">
					<!-- Page Heading -->
					<div class="d-sm-flex align-items-center justify-content-between mb-4">
						<h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
					</div>
					<!-- begin form page -->

					<div class="container-fluid">
						<div class="form-group">
							<form method="get">
								<label>Update Date:</label>
								<input type="date" name="tanggal" class="form-control datepicker">
								<label>Start Date:</label>
								<input type="date" name="tanggal2" class="form-control datepicker">

								<h6>Revenue Type</h6>
								<select class="revenue form-control">
									<option>L1</option>
								</select>
								<br>
								<h6>Select Area</h6>
								<select class="form-control">
									<option>All</option>

								</select>
								<br>
								<h6>Select Region</h6>
								<select class="form-control">
									<option>All</option>
									<option>SUMBAGUT </option>
									<option>SUMBAGTENG</option>
									<option>SUMBAGSEL</option>

								</select>
								<br>
								<h6>Select L1_Name</h6>
								<select class="l1 form-control">
									<option>All</option>
									<option>SMS P2P</option>
									<option>Voice P2P</option>
								</select>
								<br>
								<button type="submit" class="btn btn-primary" value="FILTER">Tampilkan</button>

							</form>

						</div>

						<br>
						<!-- Content Row -->
						<div class="row">
							<!-- revenue mtd Card Example -->
							<div class="col-xl-3 col-md-6 mb-4">
								<div class="card border-left-primary shadow h-100 py-2">
									<div class="card-body">
										<div class="row no-gutters align-items-center">
											<div class="col mr-2">
												<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
													Revenue MTD</div>
												<div class="h5 mb-0 font-weight-bold text-gray-800">
													Rp.
													<?php
													if (isset($_GET['tanggal'])) {
														$tgl = $_GET['tanggal'];
														$tgl2 = $_GET['tanggal2'];
														$sql = mysqli_query($koneksi, "SELECT SUM(revenue) as revenue_mtd from excel where excel.date between '$tgl' and '$tgl2'");
														$data = mysqli_fetch_array($sql);
														$data['revenue_mtd'];
														$hasil_rupiah = " " . number_format($data['revenue_mtd'], 2, ',', '.');
														echo round($hasil_rupiah, 1);
													} else {
														$sql = mysqli_query($koneksi, "SELECT * from excel");
													}
													?>
													B
												</div>
											</div>
											<div class="col-auto">
												<i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- growth MoM Card Example -->
							<div class="col-xl-3 col-md-6 mb-4">
								<div class="card border-left-success shadow h-100 py-2">
									<div class="card-body">
										<div class="row no-gutters align-items-center">
											<div class="col mr-2">
												<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
													Growth MoM</div>
												<!-- perbaiki MoM -->
												<div class="h5 mb-0 font-weight-bold text-gray-800">
													<?php
													error_reporting(0);
													if (isset($_GET['tanggal'])) {
														$tgl = $_GET['tanggal'];
														$tgl2 = $_GET['tanggal2'];

														$sql = mysqli_query($koneksi, "SELECT SUM(revenue) as revenue_mtd from excel where excel.date between '$tgl' and '$tgl2'");
														$data = mysqli_fetch_array($sql);
														$data['revenue_mtd'];
														$hasil_rupiah = " " . number_format($data['revenue_mtd'], 2, ',', '.');
														$hasil_rupiah;

														$sqllastmonth = mysqli_query($koneksi, "SELECT SUM(revenue) as revenue_lm from excel where excel.date between DATE_SUB('$tgl', INTERVAL 1 MONTH) and DATE_SUB('$tgl2', INTERVAL 1 MONTH)");
														$datalm = mysqli_fetch_array($sqllastmonth);
														$datalm['revenue_lm'];
														$hasil_rupiahlastmonth = " " . number_format($datalm['revenue_lm'], 2, ',', '.');
														$hasil_rupiahlastmonth;

														$queryMoM = (($hasil_rupiah / $hasil_rupiahlastmonth - 1) * 100);
														echo round($queryMoM, 1);
													} else {
														$sql = mysqli_query($koneksi, "SELECT * from excel");
													}
													?>
													%
												</div>
											</div>
											<div class="col-auto">
												<i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- growth YoY Card Example -->
							<div class="col-xl-3 col-md-6 mb-4">
								<div class="card border-left-success shadow h-100 py-2">
									<div class="card-body">
										<div class="row no-gutters align-items-center">
											<div class="col mr-2">
												<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
													Growth YoY</div>
												<div class="h5 mb-0 font-weight-bold text-gray-800">
													<?php
													error_reporting(0);
													if (isset($_GET['tanggal'])) {
														$tgl = $_GET['tanggal'];
														$tgl2 = $_GET['tanggal2'];

														$sql = mysqli_query($koneksi, "SELECT SUM(revenue) as revenue_mtd from excel where excel.date between '$tgl' and '$tgl2'");
														$data = mysqli_fetch_array($sql);
														$data['revenue_mtd'];
														$hasil_rupiah = " " . number_format($data['revenue_mtd'], 2, ',', '.');
														$hasil_rupiah;

														$sqllastyear = mysqli_query($koneksi, "SELECT SUM(revenue) as revenue_ly from excel where excel.date between DATE_SUB('$tgl', INTERVAL 1 YEAR) and DATE_SUB('$tgl2', INTERVAL 1 YEAR)");
														$dataly = mysqli_fetch_array($sqllastyear);
														$dataly['revenue_ly'];
														$hasil_rupiahlastyear = " " . number_format($dataly['revenue_ly'], 2, ',', '.');
														$hasil_rupiahlastyear;

														$queryYoY = (($hasil_rupiah / $hasil_rupiahlastyear - 1) * 100);
														echo round($queryYoY, 1);
													} else {
														$sql = mysqli_query($koneksi, "SELECT * from excel");
													}
													?>
													%
												</div>
											</div>
											<div class="col-auto">
												<i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- DU Last Month Card Example -->
							<div class="col-xl-3 col-md-6 mb-4">
								<div class="card border-left-success shadow h-100 py-2">
									<div class="card-body">
										<div class="row no-gutters align-items-center">
											<div class="col mr-2">
												<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
													DU Last Month</div>
												<div class="h5 mb-0 font-weight-bold text-gray-800"> Rp.
													<?php
													error_reporting(0);
													if (isset($_GET['tanggal'])) {
														$tgl = $_GET['tanggal'];
														$tgl2 = $_GET['tanggal2'];
														$sqllastmonth = mysqli_query($koneksi, "SELECT SUM(revenue) as revenue_lm from excel where excel.date between DATE_SUB('$tgl', INTERVAL 1 MONTH) and DATE_SUB('$tgl2', INTERVAL 1 MONTH)");
														$datalm = mysqli_fetch_array($sqllastmonth);
														$datalm['revenue_lm'];
														$hasil_rupiahlastmonth = " " . number_format($datalm['revenue_lm'], 2, ',', '.');
														echo round($hasil_rupiahlastmonth, 1);
													} else {
														$sql = mysqli_query($koneksi, "SELECT * from excel");
													}
													?>
												</div>
											</div>
											<div class="col-auto">
												<i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- DU MTD Card Example -->
							<div class="col-xl-3 col-md-6 mb-4">
								<div class="card border-left-success shadow h-100 py-2">
									<div class="card-body">
										<div class="row no-gutters align-items-center">
											<div class="col mr-2">
												<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
													DU MTD</div>
												<div class="h5 mb-0 font-weight-bold text-gray-800">
													<?php
													error_reporting(0);
													if (isset($_GET['tanggal'])) {
														$tgl = $_GET['tanggal'];
														$tgl2 = $_GET['tanggal2'];

														$sql = mysqli_query($koneksi, "SELECT SUM(revenue) as revenue_mtd from excel where excel.date between '$tgl' and '$tgl2'");
														$data = mysqli_fetch_array($sql);
														$data['revenue_mtd'];
														$hasil_rupiah = " " . number_format($data['revenue_mtd'], 2, ',', '.');
														$hasildu = round($hasil_rupiah, 1);

														// $sql_diff = mysqli_query($koneksi,"SELECT * from excel where excel.date between '$tgl' and '$tgl2' ");
														$tglawal = new DateTime("$tgl");
														$tglakhir = new DateTime("$tgl2");
														$d = $tglakhir->diff($tglawal)->days + 1;
														$d;
														
														$duMtd = $hasildu / $d;
														echo round($duMtd,2);
													} else {
														$sql = mysqli_query($koneksi, "SELECT * from excel");
													}
													?>
												</div>
											</div>
											<div class="col-auto">
												<i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<br>
						<!-- Begin Page Content -->
						<div class="container-fluid">

							<!-- DataTales Example -->
							<div class="card shadow mb-4">
								<div class="card-header py-3">
									<h6 class="m-0 font-weight-bold text-primary">L1 Data Table</h6>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
											<thead>
												<tr>
													<th>BroadBand</th>
													<th>Digital Services</th>
													<th>SMS P2P</th>
													<th>Voice P2P</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Revenue MTD</td>
													<td>Revenue MTD</td>
													<td>Revenue MTD</td>
													<td>Revenue MTD</td>
												</tr>
												<!-- revenue mtd -->
												<tr>
													<td></td>
													<td></td>
													<td>
														Rp.
														<?php
														if (isset($_GET['tanggal'])) {
															$tgl = $_GET['tanggal'];
															$tgl2 = $_GET['tanggal2'];
															$sqlsms = mysqli_query($koneksi, "SELECT SUM(excel.revenue) as revenue_sms from excel WHERE excel.l1 = 'SMS P2P' AND excel.date BETWEEN '$tgl' and '$tgl2'");
															$datasms = mysqli_fetch_array($sqlsms);
															$datasms['revenue_sms'];
															$hasil_rupiahsms = " " . number_format($datasms['revenue_sms'], 2, ',', '.');
															echo round($hasil_rupiahsms, 2);
														} else {
															$sql = mysqli_query($koneksi, "SELECT * from excel");
														}
														?>
														B
													</td>
													<td>
														Rp.
														<?php
														if (isset($_GET['tanggal'])) {
															$tgl = $_GET['tanggal'];
															$tgl2 = $_GET['tanggal2'];
															$sqlvoice = mysqli_query($koneksi, "SELECT SUM(excel.revenue) as revenue_voice from excel WHERE excel.l1 = 'Voice P2P' AND excel.date BETWEEN '$tgl' and '$tgl2'");
															$datavoice = mysqli_fetch_array($sqlvoice);
															$datavoice['revenue_voice'];
															$hasil_rupiahvoice = " " . number_format($datavoice['revenue_voice'], 2, ',', '.');
															echo round($hasil_rupiahvoice, 2);
														} else {
															$sql = mysqli_query($koneksi, "SELECT * from excel");
														}
														?>
														B
													</td>
												</tr>
												<!-- mom -->
												<tr>
													<td></td>
													<td></td>
													<td>
														<?php
														error_reporting(0);
														if (isset($_GET['tanggal'])) {
															$tgl = $_GET['tanggal'];
															$tgl2 = $_GET['tanggal2'];

															$sqlsmsmtd = mysqli_query($koneksi, "SELECT SUM(revenue) as revenue_smsmtd from excel WHERE excel.l1 = 'SMS P2P' AND excel.date between '$tgl' and '$tgl2'");
															$datasmsmtd = mysqli_fetch_array($sqlsmsmtd);
															$datasmsmtd['revenue_smsmtd'];
															$hasil_rupiahsmsmtd = " " . number_format($datasmsmtd['revenue_smsmtd'], 2, ',', '.');
															$hasil_rupiahsmsmtd;

															$sqlsmslastmonth = mysqli_query($koneksi, "SELECT SUM(revenue) as revenue_smslm from excel WHERE excel.l1 = 'SMS P2P' AND excel.date between DATE_SUB('$tgl', INTERVAL 1 MONTH) and DATE_SUB('$tgl2', INTERVAL 1 MONTH)");
															$datasmslm = mysqli_fetch_array($sqlsmslastmonth);
															$datasmslm['revenue_smslm'];
															$hasil_rupiahlastmonthsms = " " . number_format($datasmslm['revenue_smslm'], 2, ',', '.');
															$hasil_rupiahlastmonthsms;

															$queryMoMsms = (($hasil_rupiahsmsmtd / $hasil_rupiahlastmonthsms - 1) * 100);
															echo round($queryMoMsms, 1);
														} else {
															$sql = mysqli_query($koneksi, "SELECT * from excel");
														}
														?>
														%
													</td>
													<td>
														<?php
														error_reporting(0);
														if (isset($_GET['tanggal'])) {
															$tgl = $_GET['tanggal'];
															$tgl2 = $_GET['tanggal2'];

															$sqlvoicemtd = mysqli_query($koneksi, "SELECT SUM(revenue) as revenue_voicemtd from excel WHERE excel.l1 = 'Voice P2P' AND excel.date between '$tgl' and '$tgl2'");
															$datavoicemtd = mysqli_fetch_array($sqlvoicemtd);
															$datavoicemtd['revenue_voicemtd'];
															$hasil_rupiahvoicemtd = " " . number_format($datavoicemtd['revenue_voicemtd'], 2, ',', '.');
															$hasil_rupiahvoicemtd;

															$sqlvoicelastmonth = mysqli_query($koneksi, "SELECT SUM(revenue) as revenue_voicelm from excel WHERE excel.l1 = 'Voice P2P' AND excel.date between DATE_SUB('$tgl', INTERVAL 1 MONTH) and DATE_SUB('$tgl2', INTERVAL 1 MONTH)");
															$datavoicelm = mysqli_fetch_array($sqlvoicelastmonth);
															$datavoicelm['revenue_voicelm'];
															$hasil_rupiahlastmonthvoice = " " . number_format($datavoicelm['revenue_voicelm'], 2, ',', '.');
															$hasil_rupiahlastmonthvoice;

															$queryMoMvoice = (($hasil_rupiahvoicemtd / $hasil_rupiahlastmonthvoice - 1) * 100);
															echo round($queryMoMvoice, 1);
														} else {
															$sql = mysqli_query($koneksi, "SELECT * from excel");
														}
														?>
														%
													</td>
												</tr>
												<!-- yoy -->
												<tr>
													<td></td>
													<td></td>
													<td>
														<?php
														error_reporting(0);
														if (isset($_GET['tanggal'])) {
															$tgl = $_GET['tanggal'];
															$tgl2 = $_GET['tanggal2'];

															$sql_mtd_sms = mysqli_query($koneksi, "SELECT SUM(revenue) as revenue_mtdsms from excel WHERE excel.l1 = 'SMS P2P' AND excel.date between '$tgl' and '$tgl2'");
															$data_mtd_sms = mysqli_fetch_array($sql_mtd_sms);
															$data_mtd_sms['revenue_mtdsms'];
															$hasil_rupiah_mtd_sms = " " . number_format($data_mtd_sms['revenue_mtdsms'], 2, ',', '.');
															$hasil_rupiah_mtd_sms;

															$sqllastyear_sms = mysqli_query($koneksi, "SELECT SUM(revenue) as revenue_lysms from excel WHERE excel.l1 = 'SMS P2P' AND excel.date between DATE_SUB('$tgl', INTERVAL 1 YEAR) and DATE_SUB('$tgl2', INTERVAL 1 YEAR)");
															$dataly_sms = mysqli_fetch_array($sqllastyear_sms);
															$dataly_sms['revenue_lysms'];
															$hasil_rupiahlastyear_sms = " " . number_format($dataly_sms['revenue_lysms'], 2, ',', '.');
															$hasil_rupiahlastyear_sms;

															$queryYoYsms = (($hasil_rupiah_mtd_sms / $hasil_rupiahlastyear_sms - 1) * 100);
															echo round($queryYoYsms, 1);
														} else {
															$sql = mysqli_query($koneksi, "SELECT * from excel");
														}
														?>
														%
													</td>
													<td>
														<?php
														error_reporting(0);
														if (isset($_GET['tanggal'])) {
															$tgl = $_GET['tanggal'];
															$tgl2 = $_GET['tanggal2'];

															$sql_mtd_voice = mysqli_query($koneksi, "SELECT SUM(revenue) as revenue_mdvoice from excel WHERE excel.l1 = 'Voice P2P' AND excel.date between '$tgl' and '$tgl2'");
															$data_mtd_voice = mysqli_fetch_array($sql_mtd_voice);
															$data_mtd_voice['revenue_mdvoice'];
															$hasil_rupiah_mtd_voice = " " . number_format($data_mtd_voice['revenue_mdvoice'], 2, ',', '.');
															$hasil_rupiah_mtd_voice;

															$sqllastyear_voice = mysqli_query($koneksi, "SELECT SUM(revenue) as revenue_lyvoice from excel WHERE excel.l1 = 'Voice P2P' AND excel.date between DATE_SUB('$tgl', INTERVAL 1 YEAR) and DATE_SUB('$tgl2', INTERVAL 1 YEAR)");
															$dataly_voice = mysqli_fetch_array($sqllastyear_voice);
															$dataly_voice['revenue_lyvoice'];
															$hasil_rupiahlastyear_voice = " " . number_format($dataly_voice['revenue_lyvoice'], 2, ',', '.');
															$hasil_rupiahlastyear_voice;

															$queryYoYvoice = (($hasil_rupiah_mtd_voice / $hasil_rupiahlastyear_voice - 1) * 100);
															echo round($queryYoYvoice, 1);
														} else {
															$sql = mysqli_query($koneksi, "SELECT * from excel");
														}
														?>
														%
													</td>
												</tr>

										</table>
									</div>
								</div>
							</div>
						</div>
						<!-- Content Row - chart -->
						<div class="row">
							<!-- Area Chart -->
							<div class="col-xl-8 col-lg-7">
								<div class="card shadow mb-4">
									<!-- Card Header - Dropdown -->
									<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
										<h6 class="m-0 font-weight-bold text-primary">Trending Daily Usage </h6>

									</div>
									<!-- Card Body -->
									<div class="card-body">
										<div class="chart-area">
											<canvas id="myAreaChart"></canvas>
										</div>
									</div>
								</div>
							</div>
							<!-- Pie Chart -->
							<div class="col-xl-4 col-lg-5">
								<div class="card shadow mb-4">
									<!-- Card Header - Dropdown -->
									<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
										<h6 class="m-0 font-weight-bold text-primary">Pie Chart</h6>
										<div class="dropdown no-arrow">

										</div>
									</div>
									<!-- Card Body -->
									<div class="card-body">
										<div class="chart-pie pt-4 pb-2">
											<canvas id="myPieChart"></canvas>
										</div>
										<div class="mt-4 text-center small">
											<span class="mr-2">
												<i class="fas fa-circle text-primary"></i> Digital Service
											</span>
											<span class="mr-2">
												<i class="fas fa-circle text-success"></i> BroadBand
											</span>
											<span class="mr-2">
												<i class="fas fa-circle text-info"></i> Voice P2P
											</span>
										</div>
									</div>
								</div>
							</div>

							<!-- Bar Chart -->
							<div class="card shadow mb-4">
								<div class="card-header py-3">
									<h6 class="m-0 font-weight-bold text-primary">Growth Daily Usage</h6>
								</div>
								<div class="card-body">
									<div class="chart-bar">
										<canvas id="myBarChart"></canvas>
									</div>

								</div>
							</div>
						</div>
					</div>
					<!-- /.container-fluid -->
				</div>
				<!-- End of Main Content -->
				<!-- Footer -->
				<footer class="sticky-footer bg-white">
					<div class="container my-auto">
						<div class="copyright text-center my-auto">
							<span>Copyright &copy; 2020</span>
						</div>
					</div>
				</footer>
				<!-- End of Footer -->

			</div>
			<!-- End of Content Wrapper -->

		</div>
		<!-- End of Page Wrapper -->

		<!-- Scroll to Top Button-->
		<a class="scroll-to-top rounded" href="#page-top">
			<i class="fas fa-angle-up"></i>
		</a>

		<!-- Logout Modal-->
		<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
						<button class="close" type="button" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
					<div class="modal-footer">
						<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
						<a class="btn btn-primary" href="login.html">Logout</a>
					</div>
				</div>
			</div>
		</div>



		<script type="text/javascript">
			$(function() {
				$(".datepicker").datepicker({
					format: 'yyyy-mm-dd',
					autoclose: true,
					todayHighlight: true,
				});
			});
		</script>
		<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
		<script src="js/bootstrap-datepicker.js"></script>
		<!-- Bootstrap core JavaScript-->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

		<!-- Core plugin JavaScript-->
		<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

		<!-- Custom scripts for all pages-->
		<script src="js/sb-admin-2.min.js"></script>

		<!-- Page level plugins -->
		<script src="vendor/chart.js/Chart.min.js"></script>

		<!-- Page level custom scripts -->
		<script src="js/demo/chart-area-demo.js"></script>
		<script src="js/demo/chart-pie-demo.js"></script>
		<script src="js/demo/chart-bar-demo.js"></script>
		<script src="js/custom.js"></script>

		<!-- JQuery -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<!-- Bootstrap tooltips -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
		<!-- Bootstrap core JavaScript -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
		<!-- MDB core JavaScript -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.17.0/js/mdb.min.js"></script>

</body>

</html>