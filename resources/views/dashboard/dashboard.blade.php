@extends('layouts.master')
@section('content-heading','Dashboard')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-6">
			<div class="card card-default">
				<div class="card-header">Statistik Pegawai Per Jenjang</div>
				<div class="card-body">
					<div>
						<canvas id="chart-pegawai-jenjang"></canvas>
	        </div>
				</div>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="card card-default">
				<div class="card-header">Statistik Jumlah Sekolah Per Jenjang</div>
				<div class="card-body">
					<div>
          	<canvas id="chart-sekolah-jenjang"></canvas>
          </div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="card card-default">
				<div class="card-header">Statistik Jenjang Sekolah</div>
				<div class="card-body">
					<div>
          	<canvas id="chart-pegawai-sekolah"></canvas>
          </div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
