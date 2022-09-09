<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">


    <!-- -->
    <link rel="preload" type="text/css" href="{{asset('css/normalize.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/normalize.css')}}"> 
    <link rel="icon" type="picture" href="{{asset('img/Icono.png')}}">
    <link rel="preload" type="text/css" href="{{asset('css/test.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/test.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <title> | SIVAR-TECHSTORE</title>
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>
<body>

    <main>
    <div class="navegacion"> <!-- Menu -->
    <header class="header">
       <a class="logo" href="#"><img class="logotipo" src="{{asset('img/Asset 7.webp')}}" alt="logo"></a>
        <nav>
            <ul class="nav__links">
              <li><a href="{{ route('register') }}" class="opciones bars-solid"><svg class="bars-solid"  xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 50 50" width="30px" height="40px"><path  fill=currentcolor d="M 0 7.5 L 0 12.5 L 50 12.5 L 50 7.5 Z M 0 22.5 L 0 27.5 L 50 27.5 L 50 22.5 Z M 0 37.5 L 0 42.5 L 50 42.5 L 50 37.5 Z"/></svg> Catalogo</a></li>
              <li><a href="{{ route('login') }}" class="opciones cotizar"><svg class="cotizar" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="30px" height="40px"><path fill="currentColor" d="M256 288c79.53 0 144-64.47 144-144s-64.47-144-144-144c-79.52 0-144 64.47-144 144S176.5 288 256 288zM351.1 320H160c-88.36 0-160 71.63-160 160c0 17.67 14.33 32 31.1 32H480c17.67 0 31.1-14.33 31.1-32C512 391.6 440.4 320 351.1 320z"/></svg> Iniciar Sesion</a></li>
              <li><a href="{{ route('register') }}" class="opciones carretilla"><svg class="carretilla"xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentcolor" d="M96 0C107.5 0 117.4 8.19 119.6 19.51L121.1 32H541.8C562.1 32 578.3 52.25 572.6 72.66L518.6 264.7C514.7 278.5 502.1 288 487.8 288H170.7L179.9 336H488C501.3 336 512 346.7 512 360C512 373.3 501.3 384 488 384H159.1C148.5 384 138.6 375.8 136.4 364.5L76.14 48H24C10.75 48 0 37.25 0 24C0 10.75 10.75 0 24 0H96zM128 464C128 437.5 149.5 416 176 416C202.5 416 224 437.5 224 464C224 490.5 202.5 512 176 512C149.5 512 128 490.5 128 464zM512 464C512 490.5 490.5 512 464 512C437.5 512 416 490.5 416 464C416 437.5 437.5 416 464 416C490.5 416 512 437.5 512 464z"/></svg> Compras</a></li>
            </ul>
        </nav>
    <a class="cta" href="{{ route('register') }}">¡REGISTRATE!</a> 

    <a alt="#" class="menu cta icono">≡</a> 

    <div class="overlay" id="mobile-menu">
        <a class="close">&times;</a>
        <div class="overlay__content">
            <a href="{{ route('register') }}">Catalogo</a>
            <a href="{{ route('register') }}">Cotizá</a>
            <a href="{{ route('register') }}">Compras</a> 
            <a href="{{ route('register') }}">Nosotros</a>
            <a  href="{{ route('register') }}">¡REGISTRATE!</a> 
        </div>
    </div>
    <script text="text/javascript" src="{{asset('js/menu.js')}}"></script>
   
</div>
<br><br><br><br><br>

<!-- Slider -->
<!-- Slider -->
<div class="contenedor">
    <div class="slide-container active">
        <div class="slide">
        <div class="content text">
            <h3>Bienvenidos a SIVAR-TECHSTORE</h3>
          
            <p>Somos una empresa dedicada a vender productos relacionados al ambito tecnológico</p>

            <a href="{{ route('register') }}" class="btn">Sobre Nosotros</a>

            <video src="{{asset('img/Fan - 8064.mp4')}}" muted autoplay loop></video>
        </div>
        </div>
    </div>


    <div class="slide-container">
    <div class="slide">
        <div class="content text">
            <h3>Equipos para cualquier uso</h3>
            <p>No importa el entorno que sea, todos nuestros equipos son 100% adaptables</p>
            <a href="{{route('register')}}" class="btn">Ver Catalogo</a>
            <video src="{{asset('img/Video Card - 15793.mp4')}}" muted autoplay loop></video>
        </div>
        </div>
    </div>



    <div class="slide-container">
    <div class="slide">
        <div class="content text">
            <h3>100% calidad garantizada</h3>
            <p>Equipos con componentes de marcas reconocidas mundialmente</p>
            <a href="{{route('register')}}" class="btn">Nuestros Productos</a>
            <video src="{{asset('img/Cpu - 18031.mp4')}}" muted autoplay loop></video>
        </div> 
        </div>
    </div>



    <div class="slide-container">
    <div class="slide">
        <div class="content text">
            <h3>Contactanos</h3>
            <p>¿Tienes alguna consulta? Visita Nuestras redes sociales</p>
            <a href="https://linktr.ee/sivar_techstore" class="btn">Seguinos</a>
            <video src="{{asset('img/Laptop - 63.mp4')}}" muted autoplay loop></video>
        </div>
        </div>
    </div>
  
    <div id="next" onclick="next()"> > </div>
    <div id="prev" onclick="prev()"> < </div>

</div>
</header>
</main>
<br><br>
<!-- categorias principales -->
<section class="prod-Dest">
    <center><h1>PRODUCTOS DESTACADOS</h1>
    <hr class=" border-3 opacity-75" style="background: red; width: 430px; height: 7px; border: none; margin-top: -23px;"></center>
</sectio>
<div class="body__page">
     <div class="container__card">
      <div class="card c1">
        <div class="icon">
            <i class="fa-solid fa-display"></i>
        </div>
        
        <div class="info__description">
            <center><h3>MONITORES</h3></center>
             <p>Diferentes pantallas adaptables para cualquier entorno favorito.</p>
            <a href="{{route('register')}}">
            <input type="button" value="Leer Más">
            </a> 
           </div>
      </div>
      
      <div class="card c2">
        <div class="icon">
            <i class="fa-solid fa-memory"></i>
        </div>
        <div class="info__description">
             <center><h3>ALMACENAMIENTO</h3></center>
             <p>Memorias de cualquier capacidad para guardar cualquier archivo.</p>
             <a href="{{route('register')}}">
             <input type="button" value="Leer Más">
             </a>
            </div>
      </div>
      <div class="card c3">
        <div class="icon">
            <i class="fa-solid fa-keyboard"></i>
        </div>
        <div class="info__description">
            <center><h3>PERIFERICOS</h3></center>
             <p>Dispositivos adaptables a cualquier tipo de trabajo.</p>
             <a href="{{route('register')}}">
             <input type="button" value="Leer Más">
             </a>
            </div>
      </div>

      
     </div>
</div>
<!-- Fin categorias principales -->

<!-- Ofertas -->
<section class="ofertas">
    <center><h1>OFERTAS</h1>
    <hr class=" border-3 opacity-75" style="margin-top: -1.2%"></center>

    
</section>


<!-- Carrusel -->

<!-- Carrusel -->

<section class="SectionCarrusel">
  <div class="BotonesCarrusel">
        <button class="pre-btn"><img src="images/arrow.png" alt="">></button>
        <button class="nxt-btn"><img src="images/arrow.png" alt="">></button>
  </div>
        <div class="SectionCarrusel-Contenedor">
            <div class="CartaCarrusel">
                <div class="CartaImagen">

                    <img src="https://i.ebayimg.com/images/g/u58AAOSw7ZlZor1C/s-l300.jpg" class="product-thumb" alt="">
                </div>
                <div class="SectionCarrusel-informacion">
                    <h3 class="CarruselTitulo">AMD CPU RYZEN 5 1600 AM4</h3>
                    <span class="price">$210.21</span>
                </div>
            </div>
            <div class="CartaCarrusel">
                <div class="CartaImagen">

                    <img src="https://th.bing.com/th/id/R.dbda01a569181c52e19e0a71b1e5b7b0?rik=Uxy1G%2bhx%2bhvvfQ&pid=ImgRaw&r=0" class="product-thumb" alt="">
                </div>
                <div class="SectionCarrusel-informacion">
                    <h3 class="CarruselTitulo">Intel Core i5-12600K</h3>
                    <span class="price">$215.74</span>
                </div>
            </div>
            <div class="CartaCarrusel">
                <div class="CartaImagen">

                    <img src="https://th.bing.com/th/id/OIP.VtFKd5fnKd9kgYZP1jCXagHaHa?pid=ImgDet&rs=1" class="product-thumb" alt="">
                </div>
                <div class="SectionCarrusel-informacion">
                    <h3 class="CarruselTitulo">Kingston Fury Beast</h2>
                    <span class="price">$254.00</span>
                </div>
            </div>
            <div class="CartaCarrusel">
                <div class="CartaImagen">

                    <img src="https://th.bing.com/th/id/OIP.sIe-BDXN1u6_QXK6gly0nAHaHa?pid=ImgDet&rs=1" class="product-thumb" alt="">
                </div>
                <div class="SectionCarrusel-informacion">
                    <h3 class="title-carro">Corsair Dominator Platinium RGB DDR4</h3>
                    <span class="price">$339.99</span>
                </div>
            </div>
            <div class="CartaCarrusel">
                <div class="CartaImagen">

                    <img src="https://th.bing.com/th/id/R.82ceb8f5c402d368b2189303fc78607b?rik=PXsyUymPx0gXnw&pid=ImgRaw&r=0" class="product-thumb" alt="">
                </div>
                <div class="SectionCarrusel-informacion">
                    <h3 class="CarruselTitulo">WD My Passport - Disco Duro Portátil, 5TB</h3>
                    <span class="price">$61.99</span>
                </div>
            </div>
           
            </div>
        </div>
    </section>

    <script src="{{asset('js/Carrousel.js')}}"></script>
   
<!-- Footer -->
    <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="">
                        <img src="{{asset('img/Asset 7.png')}}" alt="Logo de Sivar-Techstore">
                    </a>
                </figure>
            </div>
            <div class="box">
                <h2>SOBRE NOSOTROS</h2>
                <p>Somos una tienda dedicada a la venta de Equipos y componentes informaticos...</p>
                <button class="boton-us"><a href="{{route('register')}}">Más informacion</a></button>
            </div>
            <div class="box">
                <div class="box">
                    <h2 class="foot-title">¡Seguinos!</h2>
                    <div class="contactos">
                        <a href="https://www.facebook.com/profile.php?id=100082198156835" target="_blank" class="facebook"><svg class="red-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="23px" height="23px"><path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg></a>
                        <a href="https://www.instagram.com/sivar_techstore/" target="_blank" class="instagram"><svg class="red-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="23px" height="26px"><path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg></a>
                        <a href="https://twitter.com/SivarTechstore"  target="_blank" class="twitter"><svg class="red-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="23px" height="23px"><path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/></svg></a>
                        <a href="#" class="mail"><svg class="red-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="23px" height="26px"><path fill="currentColor" d="M464 64C490.5 64 512 85.49 512 112C512 127.1 504.9 141.3 492.8 150.4L275.2 313.6C263.8 322.1 248.2 322.1 236.8 313.6L19.2 150.4C7.113 141.3 0 127.1 0 112C0 85.49 21.49 64 48 64H464zM217.6 339.2C240.4 356.3 271.6 356.3 294.4 339.2L512 176V384C512 419.3 483.3 448 448 448H64C28.65 448 0 419.3 0 384V176L217.6 339.2z"/></svg></a>
                    </div> 
                 </div>
             </div>
            </div>
        </div>
        <div class="grupo-2">
            <small>&copy; 2022 <b>SIVAR-TECHSTORE</b> | Todos los Derechos Reservados</small>
            <li id="li-translate"><div id="google_translate_element" class="google languaje"></div></li>

            <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({pageLanguage: 'es', includedLanguages: 'en,fr,es', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, gaTrack: true}, 'google_translate_element');
                    }
            </script>
            
            <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    
               </div>
    </footer>

    <script src="{{asset('js/test.js')}}" type="text/javascript"></script>
</body>
</html>