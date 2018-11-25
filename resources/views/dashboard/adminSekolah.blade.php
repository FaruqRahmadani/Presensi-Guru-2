@extends('layouts.master')
@section('content-heading','Dashboard')
@section('content')
<div class="container-fluid">
	<div class="mb-4">
		<div class="card-deck">
			<div class="card card-default col-md-8">
				<div class="card-header">Statistik Absensi Pegawai</div>
				<div class="card-body">
					<div>
						<canvas id="chart-absensi-pegawai"></canvas>
					</div>
				</div>
			</div>
			<div class="card card-default col-md-4">
				<div class="card-header">Statistik Kategori Abesnsi</div>
				<div class="card-body">
					<div>
						<canvas id="chart-kategori-absensi"></canvas>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection