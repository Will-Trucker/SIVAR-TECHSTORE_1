<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios Registrados</title>
    <link rel="icon" href="{{asset('img/Gonly-bolsa.png')}}">
    <link rel="preload" href="{{asset('css/normalize.css')}}" type="text/css">
    <link rel="preload" href="{{asset('css/normalize.css')}}" type="text/css">
    <link rel="preload" href="{{asset('css/usuario.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/usuario.css')}}" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
    <body>
        <main>
            <div class="navegacion"> <!-- Menu -->
            <header class="header">
               <a class="logo" href="/admin"><img class="logotipo" src="{{asset('img/Logo1.png')}}" alt="logo"></a>
                <nav>
                    <ul class="nav__links">
                      <li><a href="/home" class="opciones bars-solid"><svg class="bars-solid"  xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 50 50" width="30px" height="40px"><path  fill=currentcolor d="M 0 7.5 L 0 12.5 L 50 12.5 L 50 7.5 Z M 0 22.5 L 0 27.5 L 50 27.5 L 50 22.5 Z M 0 37.5 L 0 42.5 L 50 42.5 L 50 37.5 Z"/></svg>Vista</a></li>
                      <li><a href="#" class="opciones cotizar"><svg class="cotizar" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="30px" height="40px"><path fill="currentColor" d="M320 96H192L144.6 24.88C137.5 14.24 145.1 0 157.9 0H354.1C366.9 0 374.5 14.24 367.4 24.88L320 96zM192 128H320C323.8 130.5 328.1 133.3 332.1 136.4C389.7 172.7 512 250.9 512 416C512 469 469 512 416 512H96C42.98 512 0 469 0 416C0 250.9 122.3 172.7 179 136.4C183.9 133.3 188.2 130.5 192 128V128zM276.1 224C276.1 212.9 267.1 203.9 255.1 203.9C244.9 203.9 235.9 212.9 235.9 224V230C230.3 231.2 224.1 232.9 220 235.1C205.1 241.9 192.1 254.5 188.9 272.8C187.1 283 188.1 292.9 192.3 301.8C196.5 310.6 203 316.8 209.6 321.3C221.2 329.2 236.5 333.8 248.2 337.3L250.4 337.9C264.4 342.2 273.8 345.3 279.7 349.6C282.2 351.4 283.1 352.8 283.4 353.7C283.8 354.5 284.4 356.3 283.7 360.3C283.1 363.8 281.2 366.8 275.7 369.1C269.6 371.7 259.7 373 246.9 371C240.9 370 230.2 366.4 220.7 363.2C218.5 362.4 216.3 361.7 214.3 361C203.8 357.5 192.5 363.2 189 373.7C185.5 384.2 191.2 395.5 201.7 398.1C202.9 399.4 204.4 399.9 206.1 400.5C213.1 403.2 226.4 407.4 235.9 409.6V416C235.9 427.1 244.9 436.1 255.1 436.1C267.1 436.1 276.1 427.1 276.1 416V410.5C281.4 409.5 286.6 407.1 291.4 405.9C307.2 399.2 319.8 386.2 323.1 367.2C324.9 356.8 324.1 346.8 320.1 337.7C316.2 328.7 309.9 322.1 303.2 317.3C291.1 308.4 274.9 303.6 262.8 299.9L261.1 299.7C247.8 295.4 238.2 292.4 232.1 288.2C229.5 286.4 228.7 285.2 228.5 284.7C228.3 284.3 227.7 283.1 228.3 279.7C228.7 277.7 230.2 274.4 236.5 271.6C242.1 268.7 252.9 267.1 265.1 268.1C269.5 269.7 283 272.3 286.9 273.3C297.5 276.2 308.5 269.8 311.3 259.1C314.2 248.5 307.8 237.5 297.1 234.7C292.7 233.5 282.7 231.5 276.1 230.3L276.1 224z"/></svg> Ventas</a></li>
                      <li><a href="/admin" class="position-relative opciones carretilla"><svg class="carretilla" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M319.9 320c57.41 0 103.1-46.56 103.1-104c0-57.44-46.54-104-103.1-104c-57.41 0-103.1 46.56-103.1 104C215.9 273.4 262.5 320 319.9 320zM369.9 352H270.1C191.6 352 128 411.7 128 485.3C128 500.1 140.7 512 156.4 512h327.2C499.3 512 512 500.1 512 485.3C512 411.7 448.4 352 369.9 352zM512 160c44.18 0 80-35.82 80-80S556.2 0 512 0c-44.18 0-80 35.82-80 80S467.8 160 512 160zM183.9 216c0-5.449 .9824-10.63 1.609-15.91C174.6 194.1 162.6 192 149.9 192H88.08C39.44 192 0 233.8 0 285.3C0 295.6 7.887 304 17.62 304h199.5C196.7 280.2 183.9 249.7 183.9 216zM128 160c44.18 0 80-35.82 80-80S172.2 0 128 0C83.82 0 48 35.82 48 80S83.82 160 128 160zM551.9 192h-61.84c-12.8 0-24.88 3.037-35.86 8.24C454.8 205.5 455.8 210.6 455.8 216c0 33.71-12.78 64.21-33.16 88h199.7C632.1 304 640 295.6 640 285.3C640 233.8 600.6 192 551.9 192z"/> </svg> Panel
        </a>
        </li>
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
                   <center> <a href="/home">Vista</a> </center>
                    <a href="#">Compras</a> 
                    <a href="/admin">Panel</a>
                    <a  href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                               {{ __('SALIR') }}  </a>
                </div>
            </div>
            <script text="text/javascript" src="{{asset('js/menu.js')}}"></script>
           
        </div>
    </header>
    <br>
    <br>
    <br>
    <br>
    <br>
     <div class="container">
        <h1 class="title">Usuarios Registrados</h1>
        
        <table class="table" translate="no">
            <thead>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>EMAIL</th>
                <th>CONTRASEÑA</th>
                <th>FECHA DE CREACIÓN</th>
                </thead>
                    <tbody>
                    @foreach($data as $user)
                    <tr>
                       <td>{{$user->id}}</td>
                       <td>{{$user->name}}</td>
                       <td>{{$user->email}}</td>
                       <td>{{$user->password}}</td>
                       <td>{{$user->created_at}} </td>
                    
                    </tr>
               @endforeach
            </tbody>
        </table>
   </div>
   <br><br>
   <br>
   <center>
   <li id="li-translate"><div id="google_translate_element" class="google languaje"></div></li>

   <script type="text/javascript">
   function googleTranslateElementInit() {
       new google.translate.TranslateElement({pageLanguage: 'es', includedLanguages: 'en,fr,es,pt', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, gaTrack: true}, 'google_translate_element');
           }
   </script>
   
   <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


   </center>
    </body>
</html>