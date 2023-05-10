<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
@component('mail::message')
<center><h3 class="titulo" style="text-align: center;">Gracias por comprar con nososotros<h3></center>
<br><br>
<p>Estimado cliente su compra fue realizada de manera exitosa, le invitamos a pasar a recogerla en la siguiente 
  dirección:
</p>

@component('mail::panel')
<h3>Residencial Bosques de Santa Teresa Casa 7 Senda 3, Santa Tecla, La Libertad</h3>
@endcomponent
{{config('APP_NAME') }}
@endcomponent