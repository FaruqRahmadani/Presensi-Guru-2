"TESTING HANYAR" <br>
Data User :  {{$user}}<br>
Data Reset Password : {{$user->LastPasswordReset}}<br>
Link : {!!route('resetPasswordSetPassword', ['token' => $user->LastPasswordReset->token])!!}
