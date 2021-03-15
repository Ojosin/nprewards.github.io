@component('mail::message')
# Dear {{$name}}

Berikut ini link untuk ubah password.
<br>
<br>
Klik tombol dibawah ini
@component('mail::button', ['url' => url('change_password?&id='.$id.'&email='.$email.'&type_user='.$type_user.'&type_login=change_password&key='.md5($id).'')])
Ubah Password
@endcomponent

Terima Kasih,<br>
Admin Inkindo
@endcomponent
