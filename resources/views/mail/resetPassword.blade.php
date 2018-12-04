<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <div class="card card-default">
    <div class="card-body">
      <h5 class="card-title">Halo {{$user->nama}},</h5>
      <p class="card-text">
        Anda baru saja meminta reset password. Jika anda merasa tidak meminta reset password, abaikan email ini.<br>
        Untuk mereset password, silahkan klik link dibawah ini.
      </p>
      <div class="text-center">
        <a href="{!!route('resetPasswordSetForm', ['token' => $user->LastPasswordReset->token])!!}" class="btn btn-oval btn-info">Ganti Password</a>
      </div>
      <p class="card-text">
        Alamat tersebut hanya aktif untuk 6 jam dari permintaan ganti password. Ulangi proses ganti password jika alamat sudah tidak bisa digunakan.
      </p>
    </div>
    <div class="card-footer">
      <div class="text-sm text-muted text-center">
        &copy; 2018 - Dinas Pendidikan <strong>Kab. Banjar</strong>
      </div>
    </div>
  </div>
</body>
</html>
