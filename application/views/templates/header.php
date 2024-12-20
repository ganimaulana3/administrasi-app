<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta name="description" content="Sistem Informasi Penggajian Selkom Group">
	<meta name="keywords" content="Sistem Informasi Penggajian Selkom Group">
	<meta name="author" content="Jihad">
	<title><?= $title ?> - Puskodal-Gedung Sate</title>
	<link rel="apple-touch-icon" href="<?= base_url() ?>assets/images/ico/apple-icon-120.png">
	<link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>assets/images/logo/puskodal2.png">
	<link
		href="<?= base_url() ?>assets/css/fonts/css93c2.css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700"
		rel="stylesheet">

	<!-- BEGIN: Vendor CSS-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendors/css/vendors.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendors/css/forms/toggle/switchery.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/plugins/forms/switch.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/core/colors/palette-switch.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendors/css/charts/chartist.css">
	<link rel="stylesheet" type="text/css"
		  href="<?= base_url() ?>assets/vendors/css/charts/chartist-plugin-tooltip.css">
	<link rel="stylesheet" type="text/css"
		  href="<?= base_url() ?>assets/vendors/css/tables/datatable/datatables.min.css">

	<link rel="stylesheet" type="text/css"
		  href="<?= base_url() ?>assets/vendors/css/pickers/daterange/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendors/css/pickers/pickadate/default.css">
	<link rel="stylesheet" type="text/css"
		  href="<?= base_url() ?>assets/vendors/css/pickers/pickadate/default.date.css">
	<link rel="stylesheet" type="text/css"
		  href="<?= base_url() ?>assets/vendors/css/pickers/pickadate/default.time.css">

	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendors/css/forms/selects/select2.min.css">

	<link rel="stylesheet" href="<?= base_url() ?>assets/css/plugins/easy-autocomplete/easy-autocomplete.min.css">
	<link rel="stylesheet"
		  href="<?= base_url() ?>assets/css/plugins/easy-autocomplete/easy-autocomplete.themes.min.css">
	<!-- END: Vendor CSS-->

	<!-- BEGIN: Theme CSS-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/bootstrap-extended.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/colors.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/components.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/fonts/line-awesome/css/line-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/fonts/line-awesome/1.1/css/line-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/fonts/feather/style.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/fonts/simple-line-icons/style.min.css">
	<!-- END: Theme CSS-->

	<!-- BEGIN: Page CSS-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/core/menu/menu-types/vertical-menu.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/core/colors/palette-gradient.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/core/colors/palette-gradient.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/pages/chat-application.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/pages/dashboard-analytics.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/plugins/pickers/daterange/daterange.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/plugins/animate/animate.min.css">
	<!-- END: Page CSS-->

	<!-- BEGIN: Custom CSS-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/style.css">
	<!-- END: Custom CSS-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
	<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
	<script src="Scripts/jquery-1.10.2.js"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script src="Scripts/chart_from_db.js"></script>

	<style>
		
	</style>

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->
<body class=" vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu"
	  data-color="bg-gradient-x-purple-blue" data-col="2-columns">

<!-- BEGIN: Header-->
<nav
	class="bg-gradient-x-purple-blue header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light d-print-none">
	<div class="navbar-wrapper">
		<div class="navbar-container content">
			<div class="collapse navbar-collapse show" id="navbar-mobile">
				<ul class="nav navbar-nav mr-auto float-left">
					<li class="nav-item mobile-menu d-md-none mr-auto"><a
							class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
								class="ft-menu font-large-1"></i></a></li>
					<li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs"
															  href="#"></i></a></li>
					<li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i
								class="ficon ft-maximize"></i></a></li>
								<li class=" nav-item <?php if ($this->uri->segment(1) == 'dashboard') echo 'active' ?>"><a class="nav-link"
					href="<?= base_url('dashboard') ?>"><i class="ft-home"></i><span class="menu-title"
																					 data-i18n=""> Gallery</span></a>
					</li>

					<div class="btn-group">
					<li style="position: relative; bottom: 6px;" data-bs-toggle="dropdown" class=" nav-item"><a class="nav-link" href="#"><i class="ft-layers"></i><span class="menu-title"
																			 data-i18n="">Karyawan</span></a></li>
					<ul style="background: rgba(255,255,255,0.00); border: hidden; position: relative; top: 14px;" class="nav-item dropdown-menu">
						<li><a style="text-decoration: none; color: white; position: relative; left: 5px; font-family: bold;"
								href="<?= base_url('karyawan') ?>"><i class="uil uil-angle-double-right"></i> <i
									class="ft-users"> </i> Data 
								Karyawan</a>
						</li>
							<?php if ($this->session->userdata('session_hak_akses') == 'manajer'):?>
						<li data-toggle="modal" data-target="#bootstrap"><a style="text-decoration: none; color: white; position: relative; left: 5px; font-family: bold;">
						<i class="uil uil-angle-double-right"></i> <i class="ft-plus-circle"></i> Tambah data </a>
						</li>
					</ul>
					</div>

					<?php endif; ?>

					<div class="btn-group">
					<li style="position: relative; bottom: 6px;" data-bs-toggle="dropdown" class=" nav-item"><a class="nav-link" href="#"><i class="ft-award"></i><span class="menu-title"
																			 data-i18n="">Jabatan</span></a></li>
					<ul style="background: rgba(255,255,255,0.00); border: hidden; position: relative; top: 14px;" class="nav-item dropdown-menu">
						<li class="nav-item d-none d-md-block <?php if ($this->uri->segment(1) == 'jabatan') echo 'active' ?>"><a style="text-decoration: none; color: white; position: relative; left: 5px; font-family: bold;"
																								   href="<?= base_url('jabatan') ?>">
							<i class="uil uil-angle-double-right"></i> <i class="ft-award"></i> Data Jabatan</a>
						</li>
							<?php if ($this->session->userdata('session_hak_akses') == 'manajer'):?>
						<li data-toggle="modal" data-target="#tambah"><a style="text-decoration: none; color: white; position: relative; left: 5px; font-family: bold;">
						<i class="uil uil-angle-double-right"></i> <i class="ft-plus-circle"></i> Tambah jabatan</a>
						</li>
						<?php endif?>
					</ul>
					</div>

					<div class="btn-group">
					<li style="position: relative; bottom: 6px;" data-bs-toggle="dropdown" class=" nav-item"><a class="nav-link" href="#"><i class="ft-user-check"></i><span class="menu-title"
																			 data-i18n="">Absen</span></a></li>
						<ul style="background: rgba(255,255,255,0.00); border: hidden; position: relative; top: 14px;" class="dropdown-menu">
							<li><a style="text-decoration: none; color: white; position: relative; left: 5px; font-family: bold;";
							href="<?= base_url('absen') ?>"><i class="uil uil-angle-double-right"></i> <i class="ft-user-check"></i>
							<span class="menu-title" data-i18n=""> Data Absen</span></a>
							</li>
							<?php if ($this->session->userdata('session_hak_akses') == 'manajer'): ?>
							<li data-toggle="modal" data-target="#tambah"><a style="text-decoration: none; color: white; position: absolute; left: 5px; font-family: bold;">
								<i class="uil uil-angle-double-right"></i> <i class="ft-plus-circle"></i><span class="menu-title" data-i18n=""> Tambah Absen</span></a>
							</li>
							<?php endif; ?>
						</ul>
					</div>

					<li class=" nav-item d-none d-md-block <?php if ($this->uri->segment(1) == 'gaji') echo 'active' ?>"><a class="nav-link"
					href="<?= base_url('gaji') ?>"><i class="icon-wallet"></i><span class="menu-title"
																					data-i18n=""> Gaji</span></a>
					</li>

					<div class="btn-group">
					<li style="position: relative; bottom: 6px;" data-bs-toggle="dropdown" class=" nav-item"><a class="nav-link" href="#"><i class="ft-calendar"></i><span class="menu-title"
																			 data-i18n="">Pinjaman</span></a></li>
						<ul style="background: rgba(255,255,255,0.00); border: hidden; position: relative; top: 14px;" class="dropdown-menu">
							<li class=" nav-item d-none d-md-block <?php if ($this->uri->segment(1) == 'pinjam') echo 'active' ?>"><a style="text-decoration: none; color: white; position: relative; left: 5px; font-family: bold;"
							href="<?= base_url('pinjam') ?>"><i class="uil uil-angle-double-right"></i> <i class="ft-calendar"></i><span class="menu-title"
																					  data-i18n=""> Data Pinjaman</span></a>
							</li>
							<?php if ($this->session->userdata('session_hak_akses') == 'manajer'):?>
							<li data-toggle="modal" data-target="#tambah"><a style="text-decoration: none; color: white; position: absolute; left: 5px; font-family: bold;">
							<i class="uil uil-angle-double-right"></i> <i class="ft-plus-circle"></i> Tambah Pinjaman</a>
							</li>
							<?php endif ?>
							
						</ul>
					</div>
					
					<li class=" nav-item d-none d-md-block"><a class="nav-link" href="<?= base_url('laporan') ?>"><i class="ft-file"></i><span
						class="menu-title"
						data-i18n=""> Laporan</span></a>
					</li>
					<li class=" nav-item d-none d-md-block"><a class="nav-link" href="<?= base_url('grafik') ?>"><i class="uil uil-graph-bar"></i><span
						class="menu-title"
						data-i18n=""> Laporan Grafik</span></a>
					</li>
				</ul>
				<ul class="nav navbar-nav float-right">
					<li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link"
																   href="#" data-toggle="dropdown"> <span
								class="avatar avatar-online"><img
									src="<?= base_url() ?>assets/images/portrait/small/profil-circle-512.png"
									alt="avatar"></span></a>
						<div class="dropdown-menu dropdown-menu-right">
							<div class="arrow_box_right"><a class="dropdown-item" href="#"><span
										class="avatar avatar-online"><strong><?= $this->session->userdata('session_nama'); ?></strong></span><br><br>
									<?= $this->session->userdata('session_hak_akses'); ?>
									</span></a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="<?= base_url('logout') ?>"><i class="ft-power"></i>
									Logout</a>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</nav>
<!-- END: Header-->


<!-- BEGIN: Main Menu-->
<!--<div class="main-menu menu-fixed menu-light menu-accordion d-print-none menu-shadow " data-scroll-to-active="true"
	 data-img="<?= base_url() ?>assets/images/backgrounds/02.jpg">
	<div class="navbar-header">
		<ul class="nav navbar-nav flex-row">
			<li class="nav-item mr-auto"><a class="navbar-brand" href="<?= base_url('dashboard') ?>">
					<img class="brand-logo"
						 alt="Chameleon admin logo"
						 src="<?= base_url() ?>assets/images/logo/puskodal2.png"/>
					<h3 class="brand-text">Puskodal</h3></a></li>
			<li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
		</ul>
	</div>
	<div class="navigation-background"></div>
	<div class="main-menu-content">
		<ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
			<li class=" nav-item <?php if ($this->uri->segment(1) == 'dashboard') echo 'active' ?>"><a
					href="<?= base_url('dashboard') ?>"><i class="ft-home"></i><span class="menu-title"
																					 data-i18n="">Gallery</span></a>
			</li>
			<li class=" nav-item"><a href="#"><i class="ft-layers"></i><span class="menu-title"
																			 data-i18n="">Data Master</span></a>
				<ul class="menu-content">
					<li class="<?php if ($this->uri->segment(1) == 'karyawan') echo 'active' ?>"><a
							class="menu-item"
							href="<?= base_url('karyawan') ?>"><i
								class="ft-users"> </i> Data
							Karyawan</a>
					</li>
					<li class="<?php if ($this->uri->segment(1) == 'jabatan') echo 'active' ?>"><a class="menu-item"
																								   href="<?= base_url('jabatan') ?>"><i
								class="ft-award"></i> Data Jabatan</a>
					</li>
				</ul>
			</li>
			<li class=" nav-item <?php if ($this->uri->segment(1) == 'absen') echo 'active' ?>"><a
					href="<?= base_url('absen') ?>"><i class="ft-user-check"></i><span class="menu-title"
																					   data-i18n="">Absen</span></a>
			</li>
			<li class=" nav-item <?php if ($this->uri->segment(1) == 'gaji') echo 'active' ?>"><a
					href="<?= base_url('gaji') ?>"><i class="icon-wallet"></i><span class="menu-title"
																					data-i18n="">Gaji</span></a>
			</li>
			<li class=" nav-item <?php if ($this->uri->segment(1) == 'pinjam') echo 'active' ?>"><a
					href="<?= base_url('pinjam') ?>"><i class="ft-calendar"></i><span class="menu-title"
																					  data-i18n="">Pinjaman</span></a>
			</li>
			<li class=" nav-item"><a href="<?= base_url('laporan') ?>"><i class="ft-file"></i><span
						class="menu-title"
						data-i18n="">Laporan</span></a>
			</li>
		</ul>
	</div>
</div>-->
<!-- END: Main Menu-->

<!-- BEGIN: Content-->
<div class="app-content content">
	<div class="content-wrapper">
		<div class="content-wrapper-before"></div>
		<div class="content-header row">
		</div>
		<div class="content-body"><!-- Revenue, Hit Rate & Deals -->
