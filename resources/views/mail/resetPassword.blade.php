<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title></title>
</head>
<style>
  @import url(//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,400italic);
  body {
    font-family: "Source Sans Pro", sans-serif;
    color: #656565;
  }
  @media only screen and (max-width:480px) {
    table {
      width: 100%;
    }
  }
  @media only screen and (min-width:540px) {
    table {
      width: 70%;
    } 
  }
  table {
    text-align: center;
  }
  .btn {
    display: inline-block;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    user-select: none;
    border: 1px solid transparent;
    padding: 0.375rem 1rem;
    font-size: 1rem;
    line-height: 1.52857;
    border-radius: 0.25rem;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out; 
  }
  .btn-app {
    border-radius: 3px;
    font-size: 13px;
    -webkit-appearance: none;
    outline: none !important;
    transition: all 0.1s;
    text-decoration: none;
    padding: 0.625rem 1.25rem; 
  }
  .btn-primary {
    color: #fff;
    background-color: #5d9cec;
    border-color: #5d9cec; 
  }
  .btn-primary:hover {
    color: #fff;
    background-color: #3b87e8;
    border-color: #2f80e7; 
  }
  .btn-primary:focus, .btn-primary.focus {
    box-shadow: 0 0 0 0.2rem rgba(93, 156, 236, 0.5); 
  }
</style>
<body>
  <table border="0" cellpadding="0" cellspacing="0" align="center">
    <tr>
      <td>
        <h2>
          Halo, {{$user->nama}}
        </h2>
      </td>
    </tr>
    <tr>
      <td align='center' style='padding:5px;'>
        <table>
          <tr>
            <td align="center" style="background:#fff; padding:30px 37px;-webkit-border-radius: 10px; -moz-border-radius: 10px; border-radius: 10px; border: 1px solid #cfdbe2; border-top-width: 3px;">
              <p style="margin-bottom: 40px;">
                Anda baru saja mengirimkan permintaan untuk reset password. Jika anda merasa tidak meminta reset password, abaikan email ini.<br>
                Untuk mereset password, silahkan klik link dibawah ini.
              </p>
              <a href="{!!route('resetPasswordSetForm', ['token' => $user->LastPasswordReset->token])!!}" class="btn btn-app btn-lg btn-primary">Ganti Password</a>
              <p style="margin-top: 40px;">
                Alamat tersebut hanya aktif untuk 6 jam dari permintaan ganti password. Ulangi proses ganti password jika alamat sudah tidak bisa digunakan.
              </p>
            </td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <td>
        <p>
          &copy; 2018 - Dinas Pendidikan <strong>Kab. Banjar</strong>
        </p>
      </td>
    </tr>
  </table>  
</body>

</html>