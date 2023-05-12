<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=preload href="{{asset('css/normalize.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}" type="test/css">
    <link rel="preload" href="{{asset('css/editarp.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/editarp.css')}}" type="text/css">
    <link rel="icon" href="{{asset('img/Gonly-bolsa.png')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Editar</title>
</head>
<body>
      <form action="{{url('/update',$campos->id)}}" method="post" class="form-register" enctype="multipart/form-data">
        @csrf
            <img src="{{asset('img/Logo1.png')}}" width="350px" height="145px" class="logo">
            <br>
            <h2 class="title-form">EDITAR PRODUCTOS</h2>
            <input class="controls" type="text" name="nombre" id="nombre" placeholder="Producto" value="{{$campos->nombre}}" required>
            <input type="text" name="categoria" id="categoria" class="controls" placeholder="Categoria" value="{{$campos->categoria}}" required>
            <!--  <select name="categorias" class="formulario__campo">
                  <option disabled selected > Seleccionar Categoria </option> 
                  <br> 
                  <option value="Perifericos">Perifericos</option>
                  <option value="Computadoras">Computadoras</option>
                  <option value="Gaming">Gaming</option>
                  <option value="Componentes">Componentes</option>
                </select> 
               <br> -->
               <br>
               <input type="text" name="proveedor" id="proveedor" class="controls" placeholder="Proveedor" value="{{$campos->proveedor}}" required>
               <!-- <select name="proveedor" class="formulario__proveedor">
                  <option disabled selected placehoder="Proveedor" class="proveedor"> Proveedor </option> <br>
                     
                     <option value="MSI">MSI</option>
                     <option value="RAZER">RAZER</option>
                     <option value="AORUS">AORUS</option>
                     <option value="REDRAGON">REDRAGON</option>
                  </select>-->
                <br>
                <input class="controls" type="number" name="precio" id="precio" placeholder="$ Precio" required step="0.01" value="{{$campos->precio}}" min="0">
                
             <div class="archivo">
          <center> <img src="/productos/{{$campos->image_path}}" height="80px" width="100px"> </center>
                
                <label for="archivo"><i class="fa-solid fa-file-image"></i> Agregar Imagen</label>
                <input type="file" id="archivo" name="archivo"  required>
                <br>
                <h4 id="nombre-a"></h4>
                <script src="{{asset('./js/agregar.js')}}" type="text/javascript"></script>
            </div>
             
             <center>
                <button class="btn-neon" type="submit">
              
                    <span id="span1"></span>
                    <span id="span2"></span>
                    <span id="span3"></span>
                    <span id="span4"></span>
                    Registrar
           
            </button>
            <center>
        
            @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
            </form>
        </center>
</body>
</html>