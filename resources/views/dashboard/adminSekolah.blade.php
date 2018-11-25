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
							<h3 class="m-0">{{$sekolah->nama}}</h3>
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
							<p class="m-0 lead">{{HDate::formatDate($sekolah->Absensi->max('tanggal'))}}</p>
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
							<p class="m-0 lead">{{HDate::isLessOrEqualDate(now(), $sekolah->Absensi->max('tanggal'))? "Ada":"Tidak Ada"}}</p>
						</div>
						<div class="w-50 px-3 text-center">
							<div class="d-flex align-items-center flex-wrap justify-content-center">
								<i class="fa fa-check-circle fa-4x {{HDate::isLessOrEqualDate(now(), $sekolah->Absensi->max('tanggal'))? "text-success":"text-gray-light"}}"></i>
							</div>
						</div>
					</div>
					<hr class="w-100 mr-0">
				</div>
				<div class="list-group-item">
					<div class="d-flex align-items-center py-3">
						<div class="w-50 px-3">
							<p class="m-0 text-sm">Jumlah Pegawai</p>
							<p class="m-0 lead">{{$sekolah->Pegawai->count()}}</p>
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
		<div class="card card-default col-xl-8">
			<div class="list-group mb-3">
				<div class="list-group-item">
					<div class="d-flex align-items-center py-3">
						<div class="w-100 px-3">
							<h3 class="m-0" align="center"><i class="fa fa-chart-pie text-primary mr-4"></i> Statistik Presensi</h3>
						</div>
					</div>
					<hr class="w-100 mr-0">
				</div>
				<div class="list-group-item">
					<div class="d-flex align-items-center py-3">
						<div class="w-100 px-3">
							<div>
								<canvas id="statistikPresensi" data="{{Auth::User()->sekolah_id}}"></canvas>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection