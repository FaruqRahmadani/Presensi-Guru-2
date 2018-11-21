<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Rekap Presensi {{Auth::User()->Sekolah->nama}} Periode {{HDate::formatPeriode($periode)}}</title>
  </head>
  <body>
    Sekolah : {{Auth::User()->Sekolah->nama}} <br>
    Periode : {{HDate::formatPeriode($periode)}}
    <table class="table w-100">
      <thead>
        <tr>
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
            <td>{{$loop->iteration}}</td>
            <td class="text-center">{{$dataPegawai->nip}}</td>
            <td>{{$dataPegawai->nama}}</td>
            @foreach ($kategoriAbsen as $dataKategoriAbsen)
              <td class="text-center">{{$dataPegawai->Absensi->where('kategori_absen_id', $dataKategoriAbsen->id)->count()}}</td>
            @endforeach
            <td>{{$periode->daysInMonth - $dataPegawai->Absensi->count()}}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </body>
</html>
