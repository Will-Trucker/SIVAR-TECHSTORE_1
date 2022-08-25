@extends('layouts.app')
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Carretilla</title>
    <link rel="stylesheet" href="css/Check.css">
    <link rel="preload" type="text/css" href="{{asset('css/normalize.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/normalize.css')}}">
    <link rel="icon" type="picture" href="{{asset('img/Icono.png')}}">
    <link rel="preload" type="text/css" href="{{asset('css/carrito.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/carrito.css')}}">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <div class="navegacion"> <!-- Menu -->
    <header class="header">
       <a class="logo" href="#"><img class="logotipo" src="{{asset('img/Asset 7.webp')}}" alt="logo"></a>
        <nav>
            <ul class="nav__links">
              <li><a href="#" class="opciones bars-solid"><svg class="bars-solid"  xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 50 50" width="30px" height="40px"><path  fill=currentcolor d="M 0 7.5 L 0 12.5 L 50 12.5 L 50 7.5 Z M 0 22.5 L 0 27.5 L 50 27.5 L 50 22.5 Z M 0 37.5 L 0 42.5 L 50 42.5 L 50 37.5 Z"/></svg> Catalogo</a></li>
              <li><a href="#" class="opciones cotizar"><svg class="cotizacion" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentcolor" d="M320 96H192L144.6 24.88C137.5 14.24 145.1 0 157.9 0H354.1C366.9 0 374.5 14.24 367.4 24.88L320 96zM192 128H320C323.8 130.5 328.1 133.3 332.1 136.4C389.7 172.7 512 250.9 512 416C512 469 469 512 416 512H96C42.98 512 0 469 0 416C0 250.9 122.3 172.7 179 136.4C183.9 133.3 188.2 130.5 192 128V128zM276.1 224C276.1 212.9 267.1 203.9 255.1 203.9C244.9 203.9 235.9 212.9 235.9 224V230C230.3 231.2 224.1 232.9 220 235.1C205.1 241.9 192.1 254.5 188.9 272.8C187.1 283 188.1 292.9 192.3 301.8C196.5 310.6 203 316.8 209.6 321.3C221.2 329.2 236.5 333.8 248.2 337.3L250.4 337.9C264.4 342.2 273.8 345.3 279.7 349.6C282.2 351.4 283.1 352.8 283.4 353.7C283.8 354.5 284.4 356.3 283.7 360.3C283.1 363.8 281.2 366.8 275.7 369.1C269.6 371.7 259.7 373 246.9 371C240.9 370 230.2 366.4 220.7 363.2C218.5 362.4 216.3 361.7 214.3 361C203.8 357.5 192.5 363.2 189 373.7C185.5 384.2 191.2 395.5 201.7 398.1C202.9 399.4 204.4 399.9 206.1 400.5C213.1 403.2 226.4 407.4 235.9 409.6V416C235.9 427.1 244.9 436.1 255.1 436.1C267.1 436.1 276.1 427.1 276.1 416V410.5C281.4 409.5 286.6 407.1 291.4 405.9C307.2 399.2 319.8 386.2 323.1 367.2C324.9 356.8 324.1 346.8 320.1 337.7C316.2 328.7 309.9 322.1 303.2 317.3C291.1 308.4 274.9 303.6 262.8 299.9L261.1 299.7C247.8 295.4 238.2 292.4 232.1 288.2C229.5 286.4 228.7 285.2 228.5 284.7C228.3 284.3 227.7 283.1 228.3 279.7C228.7 277.7 230.2 274.4 236.5 271.6C242.1 268.7 252.9 267.1 265.1 268.1C269.5 269.7 283 272.3 286.9 273.3C297.5 276.2 308.5 269.8 311.3 259.1C314.2 248.5 307.8 237.5 297.1 234.7C292.7 233.5 282.7 231.5 276.1 230.3L276.1 224z"/></svg> Cotizá</a></li>
              <li><a href="" class="position-relative opciones carretilla">
              <svg class="carretilla"xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentcolor" d="M96 0C107.5 0 117.4 8.19 119.6 19.51L121.1 32H541.8C562.1 32 578.3 52.25 572.6 72.66L518.6 264.7C514.7 278.5 502.1 288 487.8 288H170.7L179.9 336H488C501.3 336 512 346.7 512 360C512 373.3 501.3 384 488 384H159.1C148.5 384 138.6 375.8 136.4 364.5L76.14 48H24C10.75 48 0 37.25 0 24C0 10.75 10.75 0 24 0H96zM128 464C128 437.5 149.5 416 176 416C202.5 416 224 437.5 224 464C224 490.5 202.5 512 176 512C149.5 512 128 490.5 128 464zM512 464C512 490.5 490.5 512 464 512C437.5 512 416 490.5 416 464C416 437.5 437.5 416 464 416C490.5 416 512 437.5 512 464z"/></svg> Carrito
  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
   {{Cart::getContent()->count()}}
    <span class="visually-hidden"></span>
  </span>
</a></li>
            </ul>
        </nav>
        <h3 class="bienvenido">Hola {{ Auth::user()->name }} <br><br> <a  class="cta" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       {{ __('SALIR') }}   
                                    </a></h3>

    <a alt="#" class="menu cta icono">≡</a>

    <div class="overlay" id="mobile-menu">
        <a class="close">&times;</a>
        <div class="overlay__content">
            <a href="#">Catalogo</a>
            <a href="#">Cotizá</a>
            <a href="#">Compras</a>
            <a href="registro.html">¡REGISTRATE!</a>
            <a href="Login.html">Iniciar Sesion</a>
        </div>
    </div>
    <script text="text/javascript" src="{{asset('js/menu.js')}}"></script>

</div>

</header>
<br><br><br><br><br><br><br>

{{Cart::getContent()}}
<div class="container">
<table class="table">
  <thead class="table-dark">
   
  </thead>
  <tbody>
    ...
  </tbody>
</table>
</div>
   <!-- <section class="CheC">
    
      <div class="CaD">
        <h1>Mi Carrito</h1>
      </div>
      <div class="DG">
      <div class="DT">
      <div class="Tabla">
        <div class="TCab">
          <div class="TTCab">
            <h4>Nombre</h4>
            <hr class="LS">
          </div>
          <hr class="BT">
          <div class="TTCab1">
            <img src="" alt="">
            <p class="DPT"> <b>Producto</b><br>Especificaciones</p>
          </div>
        </div>
        <div class="TCab">
          <div class="TTCab">
            <h4>Precio</h4>
            <hr class="LS">
          </div>
          <hr class="BT">
          <div class="TTCab1">
            <p class="PC">$ </p>
          </div>
        </div>
        <div class="TCab">
          <div class="TTCab">
            <h4>Cantidad</h4>
            <hr class="LS">
          </div>
          <hr class="BT">
          <div class="TTCab1">
            <input class="ContTabla" type="number" name="tentacles" min="1" max="100">
          </div>
        </div>
        <div class="TCab">
          <div class="TTCab">
            <h4>Subtotal</h4>
            <hr class="LS">
          </div>
          <hr class="BT">
          <div class="TTCab1">
            <p class="PC">$0.00 </p>
          </div>
        </div>
      </div>
    </div>
-->
      <div class="DYF">
        <div class="DP">
          <div class="DEn">
            <p>Contenido de la canasta</p>
          </div>
          <div class="DCu">
            <div class="NP">
              <p>Producto 1 -</p>
              <p>Producto 2 -</p>
              <p>Servicio total -</p>
            </div>
            <div class="PP">
              <p>$0.00</p>
              <p>$00.00</p>
              <p>$00.00</p>
            </div>
          </div>
          <div class="DPie">
            <hr class="BArri">
            <div class="CTCP">
            <div class="CT">
              <h4>Total</h4>
            </div>
            <div class="CP">
              <h4>$0.00</h4>
            </div>
          </div>
            <hr class="BAba">
          </div>
        </div>
        <div class="ARP">
          <a class="RP" href="#">Realizar pago</a>
        </div>
      </div>
    </div>
    </section>
    <footer class="pie-pagina">
            <div class="grupo-1">
                <div class="box">
                    <figure>
                        <a href="/home">
                            <img src="{{asset('img/Asset 7.png')}}" alt="Logo de Sivar Techstore">
                        </a>
                    </figure>
                </div>
                <div class="box">
                    <h2>SOBRE NOSOTROS</h2>
                    <p>Somos una tienda dedicada a la venta de Equipos y componentes informaticos</p>
                </div>
                <div class="box">
                    <div class="box">
                        <h2 class="foot-title">¡Seguinos!</h2>
                        <div class="contactos">
                            <a href="https://www.facebook.com/profile.php?id=100082198156835" class="facebook" target="_blank"><svg class="red-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="23px" height="23px"><path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg></a>
                            <a href="https://www.instagram.com/sivar_techstore/" class="instagram" target="_blank"><svg class="red-2"  target="_blank" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="23px" height="26px"><path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg></a>
                            <a href="https://twitter.com/SivarTechstore"  target="_blank" class="twitter"><svg class="red-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="23px" height="23px"><path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/></svg></a>
                            <a href="www.sivar.techstore123@outlook.com" class="mail"><svg class="red-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="23px" height="26px"><path fill="currentColor" d="M464 64C490.5 64 512 85.49 512 112C512 127.1 504.9 141.3 492.8 150.4L275.2 313.6C263.8 322.1 248.2 322.1 236.8 313.6L19.2 150.4C7.113 141.3 0 127.1 0 112C0 85.49 21.49 64 48 64H464zM217.6 339.2C240.4 356.3 271.6 356.3 294.4 339.2L512 176V384C512 419.3 483.3 448 448 448H64C28.65 448 0 419.3 0 384V176L217.6 339.2z"/></svg></a>
                        </div> 
                     </div>
                 </div>
                </div>
            </div>
            <div class="grupo-2">
                <small>&copy; 2022 <b>SIVAR-TECHSTORE</b> | Todos los Derechos Reservados</small>
                <div id="google_translate_element" class="google"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
	new google.translate.TranslateElement({pageLanguage: 'es', includedLanguages: 'en,fr,es', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, gaTrack: true}, 'google_translate_element');
        }
</script>

<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        </div>                
            </div>
        </footer>
  </body>
</html>