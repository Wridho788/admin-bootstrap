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

    <!-- datepicker -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/datepicker.css">

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
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"> Rp.
                                                <?php
                                                $queryMTD = "SELECT SUM(revenue) as revenue_mtd from excel where excel.date between '2020-01-01' and '2020-01-15'";
                                                $dataMtD = mysqli_query($koneksi, $queryMTD);
                                                while ($row = mysqli_fetch_assoc($dataMtD)) {
                                                    $row['revenue_mtd'];
                                                    $hasil_rupiah = " " . number_format($row['revenue_mtd'], 2, ',', '.');
                                                    echo round($hasil_rupiah,2);
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
                                                $queryreMTD = "SELECT SUM(revenue) as revenue_remtd from excel where excel.date BETWEEN '2020-01-01' and '2020-01-15'";
                                                $datareMtD = mysqli_query($koneksi, $queryreMTD);
                                                while ($row = mysqli_fetch_assoc($datareMtD)) {
                                                    $row['revenue_remtd'];
                                                    $hasil_rupiahMTD = " " . number_format($row['revenue_remtd'], 2, ',', '.');
                                                    $hasil_rupiahMTD;
                                                }

                                                $queryreLM = "SELECT SUM(revenue) as revenue_relm from excel where excel.date BETWEEN '2019-12-01' and '2019-12-15'";
                                                $datareLM = mysqli_query($koneksi, $queryreLM);
                                                while ($row = mysqli_fetch_assoc($datareLM)) {
                                                    $row['revenue_relm'];
                                                    $hasil_rupiahlm = " " . number_format($row['revenue_relm'], 2, ',', '.');
                                                    $hasil_rupiahlm;
                                                }

                                                $queryMoM = (($hasil_rupiahMTD / $hasil_rupiahlm - 1) * 100);
                                                echo round($queryMoM, 1);
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
                                                $queryMtd = "SELECT SUM(revenue) as revenue_md from excel where excel.date BETWEEN '2020-01-01' and '2020-01-15'";
                                                $datamtd = mysqli_query($koneksi, $queryMtd);
                                                while ($rowmtd = mysqli_fetch_assoc($datamtd)) {
                                                    $rowmtd['revenue_md'];
                                                    $hasil_rupiahmtd = "" . number_format($rowmtd['revenue_md'], 2, ',', '.');
                                                    $hasil_rupiahmtd;
                                                }

                                                $queryLY = "SELECT SUM(revenue) as revenue_ly from excel where excel.date BETWEEN '2019-01-01' and '2019-01-15'";
                                                $dataLY = mysqli_query($koneksi, $queryLY);
                                                while ($rowly = mysqli_fetch_assoc($dataLY)) {
                                                    $rowly['revenue_ly'];
                                                    $hasil_rupiahly = "" . number_format($rowly['revenue_ly'], 2, ',', '.');
                                                    $hasil_rupiahly;
                                                }

                                                $queryYoY = (($hasil_rupiahmtd / $hasil_rupiahly - 1) * 100);
                                                echo round($queryYoY, 1);
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
                                                $queryduLM = "SELECT SUM(revenue) as revenue_lm from excel where excel.date between '2019-12-01' and '2019-12-15'";
                                                $dataduLM = mysqli_query($koneksi, $queryduLM);
                                                while ($rowlm = mysqli_fetch_assoc($dataduLM)) {
                                                    $rowlm['revenue_lm'];
                                                    $hasil_rupiah = " " . number_format($rowlm['revenue_lm'], 2, ',', '.');
                                                    echo round($hasil_rupiah,2);
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
                                                Rp.
                                                <?php
                                                $queryduMTD = "SELECT SUM(revenue) as revenue_mtd from excel where excel.date between '2020-01-01' and '2020-01-15'";
                                                $dataduMtD = mysqli_query($koneksi, $queryduMTD);
                                                while ($row = mysqli_fetch_assoc($dataduMtD)) {
                                                    $row['revenue_mtd'];
                                                    $hasil_rupiahdumtd = " " . number_format($row['revenue_mtd'], 2, ',', '.');
                                                    $hasildu = round($hasil_rupiahdumtd);
                                                // $queryduMTD = "SELECT Avg(revenue) as revenue_mtd from excel where excel.date between '2020-01-01' and '2020-01-15'";
                                                // $dataduMtD = mysqli_query($koneksi, $queryduMTD);
                                                // while ($row = mysqli_fetch_assoc($dataduMtD)) {
                                                //     $row['revenue_mtd'];
                                                //     $hasil_rupiah = " " . number_format($row['revenue_mtd'], 2, ',', '.');
                                                //     echo $hasil_rupiah;
                                                }
                                                $duMtd = $hasildu / 15;
                                                echo round($duMtd,2);
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


                    <div class="row">
                        <!-- revenue mtd Card Example -->
                        <div class="container-fluid">
                            <div class="form-group">
                                <label>Update date:</label>
                                <input type="text" name="update-date" class="form-control datepicker" required />
                            </div>
                            <div class="form-group">
                                <label>Start date:</label>
                                <input type="text" name="tanggal" class="form-control datepicker-startdate" required />
                            </div>
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
                            <?php



                            ?>
                            <button type="button" class="btn btn-primary">Tampilkan</button>

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
                                                    $querySMS = "SELECT SUM(excel.revenue) as revenue_sms from excel WHERE excel.l1 = 'SMS P2P' AND excel.date BETWEEN '2020-01-01' and '2020-01-15'";
                                                    $dataSMS = mysqli_query($koneksi, $querySMS);
                                                    while ($row = mysqli_fetch_assoc($dataSMS)) {
                                                        $row['revenue_sms'];
                                                        $hasil_rupiah = " " . number_format($row['revenue_sms'], 2, ',', '.');
                                                        echo $hasil_rupiah;
                                                    }
                                                    ?>
                                                    B
                                                </td>
                                                <td>
                                                    Rp.
                                                    <?php
                                                    $queryV = "SELECT SUM(excel.revenue) as revenue_voice from excel WHERE excel.l1 = 'Voice P2P' AND excel.date BETWEEN '2020-01-01' and '2020-01-15'";
                                                    $dataV = mysqli_query($koneksi, $queryV);
                                                    while ($row = mysqli_fetch_assoc($dataV)) {
                                                        $row['revenue_voice'];
                                                        echo number_format($row['revenue_voice']);
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
                                                    $queryLMSMS = "SELECT SUM(excel.revenue) as revenue_lmsms from excel WHERE excel.l1 = 'SMS P2P' AND excel.date BETWEEN '2019-12-01' and '2019-12-15'";
                                                    $dataLMSMS = mysqli_query($koneksi, $queryLMSMS);
                                                    while ($row = mysqli_fetch_assoc($dataLMSMS)) {
                                                        $row['revenue_lmsms'];
                                                        $hasil_rupiahlmsms = " " . number_format($row['revenue_lmsms'], 2, ',', '.');
                                                        $hasil_rupiahlmsms;
                                                    }

                                                    $queryMTDSMS = "SELECT SUM(excel.revenue) as revenue_mtdsms from excel WHERE excel.l1 = 'SMS P2P' AND excel.date BETWEEN '2020-01-01' and '2020-01-15'";
                                                    $dataMtDsms = mysqli_query($koneksi, $queryMTDSMS);
                                                    while ($row = mysqli_fetch_assoc($dataMtDsms)) {
                                                        $row['revenue_mtdsms'];
                                                        $hasil_rupiahMTDsms = " " . number_format($row['revenue_mtdsms'], 2, ',', '.');
                                                        $hasil_rupiahMTDsms;
                                                    }
                                                    $queryMoMsms = (($hasil_rupiahMTDsms / $hasil_rupiahlmsms - 1) * 100);
                                                    echo round($queryMoMsms, 1);

                                                    ?> %
                                                </td>
                                                <td>
                                                    <?php
                                                    error_reporting(0);
                                                    $queryLMVOICE = "SELECT SUM(excel.revenue) as revenue_lmvoice from excel WHERE excel.l1 = 'Voice P2P' AND excel.date BETWEEN '2019-12-01' and '2019-12-15'";
                                                    $dataLMVOICE = mysqli_query($koneksi, $queryLMVOICE);
                                                    while ($row = mysqli_fetch_assoc($dataLMVOICE)) {
                                                        $row['revenue_lmvoice'];
                                                        $hasil_rupiahlmvoice = " " . number_format($row['revenue_lmvoice'], 2, ',', '.');
                                                        $hasil_rupiahlmvoice;
                                                    }
                                                    $queryMTDVOICE = "SELECT SUM(excel.revenue) as revenue_mtdvoice from excel WHERE excel.l1 = 'Voice P2P' AND excel.date BETWEEN '2020-01-01' and '2020-01-15'";
                                                    $dataMtDvoice = mysqli_query($koneksi, $queryMTDVOICE);
                                                    while ($row = mysqli_fetch_assoc($dataMtDvoice)) {
                                                        $row['revenue_mtdvoice'];
                                                        $hasil_rupiahMTDvoice = " " . number_format($row['revenue_mtdvoice'], 2, ',', '.');
                                                        $hasil_rupiahMTDvoice;
                                                    }
                                                    $queryMoMvoice = (($hasil_rupiahMTDvoice / $hasil_rupiahlmvoice - 1) * 100);
                                                    echo round($queryMoMvoice, 1);

                                                    ?> %
                                                </td>
                                            </tr>
                                            <!-- yoy -->
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <?php
                                                    error_reporting(0);
                                                    $queryMTDsms = "SELECT SUM(revenue) as revenue_mtdsms from excel WHERE excel.l1 = 'SMS P2P' AND excel.date BETWEEN '2020-01-01' and '2020-01-15'";
                                                    $dataMTDsms = mysqli_query($koneksi, $queryMTDsms);
                                                    while ($rowmtdsms = mysqli_fetch_assoc($dataMTDsms)) {
                                                        $rowmtdsms['revenue_mtdsms'];
                                                        $hasil_rupiahmtdsms = "" . number_format($rowmtdsms['revenue_mtdsms'], 2, ',', '.');
                                                        $hasil_rupiahmtdsms;
                                                    }

                                                    $queryLYsms = "SELECT SUM(revenue) as revenue_lysms from excel WHERE excel.l1 = 'SMS P2P' AND excel.date BETWEEN '2019-01-01' and '2019-01-15'";
                                                    $dataLYsms = mysqli_query($koneksi, $queryLYsms);
                                                    while ($row = mysqli_fetch_assoc($dataLYsms)) {
                                                        $row['revenue_lysms'];
                                                        $hasil_rupiahlysms = "" . number_format($row['revenue_lysms'], 2, ',', '.');
                                                        $hasil_rupiahlysms;
                                                    }
                                                    $queryYoYsms = (($hasil_rupiahmtdsms / $hasil_rupiahlysms - 1) * 100);
                                                    echo round($queryYoYsms, 1);
                                                    ?>
                                                    %
                                                </td>
                                                <td>
                                                    <?php
                                                    error_reporting(0);
                                                    $queryMtdvoice = "SELECT SUM(excel.revenue) as revenue_mdvoice from excel WHERE excel.l1 = 'Voice P2P' AND excel.date BETWEEN '2020-01-01' and '2020-01-15'";
                                                    $dataMtDvoice = mysqli_query($koneksi, $queryMtdvoice);
                                                    while ($row = mysqli_fetch_assoc($dataMtDvoice)) {
                                                        $row['revenue_mdvoice'];
                                                        $hasil_rupiahmtdvoice = " " . number_format($row['revenue_mdvoice'], 2, ',', '.');
                                                        $hasil_rupiahmtdvoice;
                                                    }

                                                    $queryLYvoice = "SELECT SUM(excel.revenue) as revenue_lyvoice from excel WHERE excel.l1 = 'Voice P2P' AND excel.date BETWEEN '2019-01-01' and '2019-01-15'";
                                                    $dataLYvoice = mysqli_query($koneksi, $queryLYvoice);
                                                    while ($row = mysqli_fetch_assoc($dataLYvoice)) {
                                                        $row['revenue_lyvoice'];
                                                        $hasil_rupiahlyvoice = " " . number_format($row['revenue_lyvoice'], 2, ',', '.');
                                                        $hasil_rupiahlyvoice;
                                                    }

                                                    $queryYoYvoice = (($hasil_rupiahmtdvoice / $hasil_rupiahlyvoice - 1) * 100);
                                                    echo round($queryYoYvoice, 1);
                                                    ?>
                                                    %
                                                </td>
                                            </tr>
                                           
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Content Row -->
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