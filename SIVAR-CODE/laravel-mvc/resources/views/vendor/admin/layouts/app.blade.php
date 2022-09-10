@extends('layouts.app')
<!DOCTYPE html>
<html lang="es"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="short-cut icon" type="picture" href="img/Icono.png">
    <title>PANEL DE ADMIN</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/prueba.css')}}">
    



<body class="bg-cdb-i">
    <nav class="navbar navbar-expand-lg sticky-top bg-cdb">
    <a class="navbar-brand enlace-principal" href="">Inicio</a>
      <button class="navbar-toggler bg-cdb" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
          <li class="nav-item">
          </li>
          <li class="nav-item">
            <a class="nav-link menu" href="/home"></i> Volver al Index</a>
          </li>
          <li class="nav-item ">
            <a  class="nav-link logout bg-danger" style="cursor:pointer" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
            {{ __('SALIR') }} 
         </a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="space"></div>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
            <div class="row text-center">
                <div class="col-sm-12 pt-4">
                    <br><br><br><br><br>
                    <img src="{{asset('img/asset-black.jpg')}}"  alt="log" width="100%">
                </div>
                <div class="col-sm-12 pt-lg-3 pt-xl-3 info-alumno">
                    <h4>Bienvenido:</h4>
                    <h5> {{ Auth::user()->name }}</h5>
                    <h6 class="info-alumno-extra"><b>Código: </b> 001</h6>
                    <h6 class="info-alumno-extra"><b>Nivel de empleado: </b> Normalito</h6>
<h6 class="info-alumno-extra">                  <div class="space"></div>
                </div>
            </div>
        </div>
        <div class="d-sm-none d-md-block col-md-6 col-lg-6 col-xl-8 text-center">
            <div class="pt-md-5 pt-lg-5 pt-xl-5"></div>
            <div class="pt-lg-3 pt-xl-5"></div>
            <div class="pt-xl-5"></div>
            <div class="pt-xl-1"></div>
            <div class="row">
                <div class="col-sm-12 col-xl-6 d-flex justify-content-center">
                    <a href="">
                        <div class="card text-white bg-cdb mb-3" style="max-width: 22rem;">
                            <div class="card-body">
                                <a href="Listado">
                                <img src="{{asset('img/caja.png')}}" alt="" width="60%">
                                <div class="pt-2"></div>
                                <h5 class="card-title" style="text-transform: capitalize">Productos de la tienda</h5> </a>
                                <p class="card-text">En este apartado se puede agregar, quitar o modificar los productos disponibles</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-12 col-xl-6 d-flex justify-content-center">
                        <div class="card text-white bg-cdb mb-3" style="max-width: 22rem;">
                            <div class="card-body">
                                <a href="/sale">
                                <img src="{{asset('img/ventas.png')}}"  alt="" width="60%">
                                <div class="pt-2"></div>
                                <h5 class="card-title">Ver ventas</h5></a>
                                <p class="card-text">Apartado para ver las ventas totales que se realicen en la tienda</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-12 col-xl-6 d-flex justify-content-center">
                    <div class="card text-white bg-cdb mb-3" style="max-width: 22rem;">
                        <div class="card-body">
                            <a href="/user">
                            <img src="https://d1nhio0ox7pgb.cloudfront.net/_img/g_collection_png/standard/512x512/users5.png"  alt="" width="60%">
                            <div class="pt-2"></div>
                            <h5 class="card-title">Ver Usuarios</h5></a>
                            <p class="card-text">Apartado para ver Clientes Registrados</p>
                        </div>
                    </div>
                </a>
            </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar bg-cbd mt-3">
    <div class="container-fluid">
        <div class="row mx-auto">
            <div class="col-12 text-center">

            </div>
        </div>
    </div>
</nav>
<center> <li id="li-translate"><div id="google_translate_element" class="google languaje"></div></li>

    <script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'es', includedLanguages: 'en,fr,es,pt', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, gaTrack: true}, 'google_translate_element');
            }
    </script>
    
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
   </center>
</body>
</html>