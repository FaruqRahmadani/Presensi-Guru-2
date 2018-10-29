@extends('layouts.master')
@section('content-heading','Dashboard')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-6">
			<div class="card card-default">
				<div class="card-header">Statistik Pegawai Di Tiap Jenjang</div>
				<div class="card-body">
					<div id="morris-bar"></div>
				</div>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="card card-default">
				<div class="card-header">Statistik Jenjang Sekolah</div>
				<div class="card-body">
					<div id="morris-donut"></div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
