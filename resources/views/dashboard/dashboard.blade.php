@extends('layouts.master')
@section('content-heading','Dashboard')
@section('content')
<div class="container-fluid">
	<div class="row">
		<!-- START card-->
		<div class="col-xl-3 col-md-6">
			<div class="card flex-row align-items-center align-items-stretch border-0 no-padding">
				<div class="col-4 d-flex align-items-center bg-danger-dark justify-content-center rounded-left">
					<em class="fa fa-building fa-3x"></em>
				</div>
				<div class="col-8 py-3 bg-danger rounded-right">
					<div class="h2 mt-0">1700</div>
					<small>Sekolah Dasar</small>
				</div>
			</div>
		</div>
		<!-- START card-->
		<div class="col-xl-3 col-md-6">
			<div class="card flex-row align-items-center align-items-stretch border-0 no-padding">
				<div class="col-4 d-flex align-items-center bg-primary-dark justify-content-center rounded-left">
					<em class="fa fa-building fa-3x"></em>
				</div>
				<div class="col-8 py-3 bg-primary rounded-right">
					<div class="h2 mt-0">1700</div>
					<small>Sekolah Menegah Pertama</small>
				</div>
			</div>
		</div>
		<!-- START card-->
		<div class="col-xl-3 col-md-6">
			<div class="card flex-row align-items-center align-items-stretch border-0 no-padding">
				<div class="col-4 d-flex align-items-center bg-gray-dark justify-content-center rounded-left">
					<em class="fa fa-building fa-3x"></em>
				</div>
				<div class="col-8 py-3 bg-gray rounded-right">
					<div class="h2 mt-0">1700</div>
					<small>Sekolah Menengah Atas</small>
				</div>
			</div>
		</div>
		<!-- START card-->
		<div class="col-xl-3 col-md-6">
			<div class="card flex-row align-items-center align-items-stretch border-0 no-padding">
				<div class="col-4 d-flex align-items-center bg-warning-dark justify-content-center rounded-left">
					<em class="icon-people fa-3x"></em>
				</div>
				<div class="col-8 py-3 bg-warning rounded-right">
					<div class="h2 mt-0">1700</div>
					<small>Pegawai</small>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6">
			<div class="card card-default">
				<div class="card-header">Statistik Absensi</div>
				<div class="card-body">
					<div id="morris-bar"></div>
				</div>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="card card-default">
				<div class="card-header">Statistik Jumlah Pegawai Di Masing-Masing Jenjang</div>
				<div class="card-body">
					<div id="morris-donut"></div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection