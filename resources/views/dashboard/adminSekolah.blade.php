@extends('layouts.master')
@section('content-heading','Dashboard')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-7">
			<div class="card card-default">
				<div class="card-header">Statistik Absensi Pegawai</div>
				<div class="card-body">
					<div>
						<canvas id="chart-absensi-pegawai"></canvas>
	        </div>
				</div>
			</div>
		</div>
		<div class="col-lg-5">
			<div class="card card-default">
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
