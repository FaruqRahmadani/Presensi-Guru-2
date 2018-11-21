<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Rekap Presensi {{Auth::User()->Sekolah->nama}} Periode {{HDate::formatPeriode($periode)}}</title>
    <style>
      .table-title {
        text-align: center;
      }
      .center {
        text-align: center;
      }
      .title-nama {
        min-width: 300px;
      }
      td {
        padding: 5px;
      }
      .table-striped tr:nth-child(even) {
          background-color: #f2f2f2;
      }
    </style>
  </head>
  <body>
    <table width="100%">
      <tr>
        <td width="15%">Sekolah</td>
        <td>: <strong>{{Auth::User()->Sekolah->nama}}</strong></td>
      </tr>
      <tr>
        <td width="15%">Periode</td>
        <td>: {{HDate::formatPeriode($periode)}}</td>
      </tr>
    </table>
    <hr>
    <br>
    <table class="table-striped" width="100%" border="0.5" cellspacing="0">
      <thead>
        <tr class="table-title">
          <th>#</th>
          <th>NIP</th>
          <th>Nama Pegawai</th>
          @foreach ($kategoriAbsen as $dataKategoriAbsen)
            <th>
              <i class="fa fa-circle" style="color: {{$dataKategoriAbsen->kode_warna}}"></i>
              {{$dataKategoriAbsen->kode}}
            </th>
          @endforeach
          <th>
            <i class="fa fa-circle" style="color: #000000"></i>
            Tanpa Keterangan
          </th>
        </tr>
      </thead>
      <tbody>
        @foreach ($pegawai as $dataPegawai)
          <tr>
            <td class="center">{{$loop->iteration}}</td>
            <td class="center">{{$dataPegawai->nip}}</td>
            <td style="padding-left: 5px; width: 170px;">{{$dataPegawai->nama}}</td>
            @foreach ($kategoriAbsen as $dataKategoriAbsen)
              <td class="center">{{$dataPegawai->Absensi->where('kategori_absen_id', $dataKategoriAbsen->id)->count()}}</td>
            @endforeach
            <td class="center">{{$periode->daysInMonth - $dataPegawai->Absensi->count()}}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </body>
</html>
