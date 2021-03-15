@component('mail::message')
# Dear {{$name}}

Terima kasih telah melakukan pendaftaran untuk menjadi anggota SBU INKINDO.
<br>
<br>
Dan berikut ini kami informasikan untuk username password anda :
<br>
<br>
Username : {{$email}}
<br>
Password : {{$password}}
<br>
<br>
<br>
Untuk mengaktifkan akun anda klik tombol dibawah ini
@component('mail::button', ['url' => url('login?&id='.$id.'&email='.$email.'&type_user=user_bu&type_login=activatedAccount&key='.md5($id).'')])
Aktifkan.
@endcomponent

Terima Kasih,<br>
Admin Inkindo
@endcomponent
