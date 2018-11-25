@extends('layouts.master')
@section('content-heading','Dashboard')
@section('content')
<div class="container-fluid">
	<div class="card-deck">
		<div class="card card-default col-xl-4">
			<div class="list-group mb-3">
				<div class="list-group-item">
					<div class="d-flex align-items-center py-3">
						<div class="w-50 px-3">
							<p class="m-0 lead">Perum Suryono Tbk</p>
						</div>
						<div class="w-50 px-3 text-center">
							<div class="d-flex align-items-center flex-wrap justify-content-center">
								<i class="fa fa-university fa-4x text-grey"></i>
							</div>
						</div>
					</div>
					<hr class="w-100 mr-0">
				</div>
				<div class="list-group-item">
					<div class="d-flex align-items-center py-3">
						<div class="w-50 px-3">
							<p class="m-0 text-sm">Update Terakhir</p>
							<p class="m-0 lead">1 Deseber 2018</p>
						</div>
						<div class="w-50 px-3 text-center">
							<div class="d-flex align-items-center flex-wrap justify-content-center">
								<i class="fa fa-calendar fa-4x text-primary"></i>
							</div>
						</div>
					</div>
					<hr class="w-100 mr-0">
				</div>
				<div class="list-group-item">
					<div class="d-flex align-items-center py-3">
						<div class="w-50 px-3">
							<p class="m-0 text-sm">Status Update Hari Ini</p>
							<p class="m-0 lead">Tidak Ada</p>
						</div>
						<div class="w-50 px-3 text-center">
							<div class="d-flex align-items-center flex-wrap justify-content-center">
								<i class="fa fa-check-circle fa-4x text-gray-light"></i>
								<!-- jika  ada update hri ini clas text-gray-light jdi text-success -->
							</div>
						</div>
					</div>
					<hr class="w-100 mr-0">
				</div>
				<div class="list-group-item">
					<div class="d-flex align-items-center py-3">
						<div class="w-50 px-3">
							<p class="m-0 text-sm">Jumlah Pegawai</p>
							<p class="m-0 lead">67</p>
						</div>
						<div class="w-50 px-3 text-center">
							<div class="d-flex align-items-center flex-wrap justify-content-center">
								<i class="fa fa-users fa-4x text-purple"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="card card-default">
			<div class="card-header">
				<div class="card-title">Statistik Kategori Abesnsi</div>
			</div>
			<div class="card-body">
				<div>
					<canvas id="chart-kategori-absensi"></canvas>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection