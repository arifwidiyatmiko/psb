<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" href="<?=base_url()?>assets/img/logo-sai-lead.png">
	<title><?=$this->config->item('site_title')?></title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="<?= base_url();?>assets/plugins/bootstrap/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= base_url();?>assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="<?= base_url();?>assets/plugins/Ionicons/css/ionicons.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="<?= base_url();?>assets/plugins/datatables.net-bs/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url();?>assets/plugins/datatables.net-Buttons-1.5.2/css/buttons.dataTables.min.css">
	<!-- Chosen -->
	<link rel="stylesheet" href="<?= base_url();?>assets/plugins/chosen/chosen.css">
	 <!-- SELECT 2 -->
    <link rel="stylesheet" href="<?= base_url();?>assets/plugins/select2/select2.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url();?>assets/styles/AdminLTE.min.css">
	<!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="<?= base_url();?>assets/styles/skins/_all-skins.min.css">
	<link rel="stylesheet" href="<?= base_url();?>assets/styles/tugas.css">
	<link rel="stylesheet" href="<?= base_url();?>assets/styles/style.css">
	<link rel="stylesheet" href="<?= base_url();?>assets/styles/loading.css">

	<style>
		.panel-fullscreen {
			display: block;
			z-index: 9999;
			position: fixed;
			width: 100%;
			height: 100%;
			top: 0;
			right: 0;
			left: 0;
			bottom: 0;
			overflow: auto;
		}

   		 #mapDiv { height: 400px; width: 100 !important;}

   		.fileUpload {
		    position: relative;
		    overflow: hidden;
		    margin: 10px;
		}
		.fileUpload input.upload {
		    position: absolute;
		    top: 0;
		    right: 0;
		    margin: 0;
		    padding: 0;
		    font-size: 20px;
		    cursor: pointer;
		    opacity: 0;
		    filter: alpha(opacity=0);
		}
	</style>
	<!-- LEAFLET -->
	  <script src="<?php echo base_url();?>assets/jQuery/jquery-1-11-1.min.js"></script>
	  <script type="text/javascript" src="<?php echo base_url();?>assets/scripts/lodash.min.js"></script>
	  <script src="<?= base_url()?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
	$.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url()?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?= base_url()?>assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url()?>assets/plugins/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?= base_url()?>assets/plugins/datatables.net-Buttons-1.5.2/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url()?>assets/plugins/datatables.net-JSZip-2.5.0/jszip.min.js"></script>
<script src="<?= base_url()?>assets/plugins/datatables.net-Buttons-1.5.2/js/buttons.html5.min.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url()?>assets/plugins/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- Slimscroll -->
<script src="<?= base_url()?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url()?>assets/plugins/fastclick/lib/fastclick.js"></script>
<!-- Chosen -->
<script src="<?= base_url()?>assets/plugins/chosen/chosen.jquery.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url()?>assets/scripts/adminlte.min.js"></script>
<!-- SELECT 2 -->
<script src="<?= base_url()?>assets/plugins/select2/select2.min.js"></script>

<!-- Datepicker -->
<script src="<?= base_url()?>assets/dist/js/bootstrap-datepicker.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>


	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- Google Font -->
	<link rel="stylesheet" href="<?= base_url();?>assets/styles/css.css">
</head>
<body class="hold-transition skin-blue-light sidebar-mini">

<div id='loader'>
	<div class="spinner"></div>
</div>

<script src="<?= base_url();?>assets/scripts/loading.js"></script>

<div class="wrapper">
	<header class="main-header">
		<!-- Logo -->

		<a href="/" class="logo" style="background-color: white;">

        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b><img alt="Brand" src="<?=base_url()?>assets/img/logo-sai-lead.png" width="50"></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><img alt="Brand" src="<?=base_url()?>assets/img/logo-sai-lead.png" width="70"></span>
    </a>

		<!-- Header Navbar: style can be found in header.less -->
		<nav class="navbar navbar-static-top">
			<!-- Sidebar toggle button-->
			<a href="javascript:void(0);" class="sidebar-toggle" data-toggle="push-menu" role="button">
				<span class="sr-only">Toggle navigation</span>
			</a>
			<div class="navbar-custom-menu">
				<ul class="nav navbar-nav">
					 <li class="dropdown user user-menu">
			            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
			              <span class="hidden-xs"><?=$this->session->userdata('adminpsb')->namaLengkap?></span>
			            </a>
			            <ul class="dropdown-menu">
			              <!-- User image -->
			              <li class="user-header">
			                <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"> -->

			                <p>
			                 <?=$this->session->userdata('adminpsb')->namaLengkap." - ".$this->session->userdata('adminpsb')->nomorSeluler?>
			                  <small><?=$this->session->userdata('adminpsb')->status?></small>
			                </p>
			              </li>
			                <!-- /.row -->
			              </li>
			              <!-- Menu Footer-->
			              <li class="user-footer">
			                <div class="pull-right">
			                  <a href="<?= base_url()?>Dashboard/out" class="btn btn-default btn-flat">Keluar</a>
			                </div>
			              </li>
			            </ul>
			          </li>
				</ul>
			</div>
		</nav>
	</header>
	<!-- Left side column. contains the logo and sidebar -->
	<aside class="main-sidebar">
		<!-- sidebar: style can be found in sidebar.less -->
		<section class="sidebar">
			<!-- sidebar menu: : style can be found in sidebar.less -->
			<ul class="sidebar-menu" data-widget="tree">
				<li class="header">Sistem Penerimaan Siswa Baru</li>
				<li>
					<a href="<?=base_url()?>Dashboard">
						<i class="fa fa-home"></i> <span>Dashboard</span>
					</a>
				</li>
				<li class="treeview">
		          <a href="#">
		            <i class="fa fa-laptop"></i>
		            <span>Calon Siswa</span>
		            <span class="pull-right-container">
		              <i class="fa fa-angle-left pull-right"></i>
		            </span>
		          </a>
		          <ul class="treeview-menu">
		            <li><a href="<?=base_url()?>Dashboard/siswa/KB"><i class="fa fa-circle-o"></i> Kelompok Bermain</a></li>
		            <li><a href="<?=base_url()?>Dashboard/siswa/TK"><i class="fa fa-circle-o"></i> Taman Kanak-kanan</a></li>
		            <li><a href="<?=base_url()?>Dashboard/siswa/SD"><i class="fa fa-circle-o"></i> Sekolah Dasar</a></li>
		            <li><a href="<?=base_url()?>Dashboard/siswa/"><i class="fa fa-circle-o"></i> Semua Pendaftar</a></li>
		          </ul>
		        </li>
				<li class="treeview">
		          <a href="#">
		            <i class="fa fa-laptop"></i>
		            <span>Data Master</span>
		            <span class="pull-right-container">
		              <i class="fa fa-angle-left pull-right"></i>
		            </span>
		          </a>
		          <ul class="treeview-menu">
		            <li><a href="<?=base_url()?>Dashboard/guru"><i class="fa fa-circle-o"></i> Data Guru</a></li>
		          </ul>
		        </li>
		        <li>
					<a href="<?=base_url()?>Dashboard/out">
						<i class="fa fa-link"></i> <span>Keluar</span>
					</a>
				</li>
			</ul>
		</section>
		<!-- /.sidebar -->
	</aside>
