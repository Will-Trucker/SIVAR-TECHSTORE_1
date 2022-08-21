<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista Productos</title>
    <link rel="icon" href="{{asset('img/Icono.png')}}">
    <link rel="preload" href="{{asset('css/normalize.css')}}" type="text/css">
    <link rel="preload" href="{{asset('css/normalize.css')}}" type="text/css">
    <link rel="preload" href="{{asset('css/listado.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/listado.css')}}" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    
   <!--Boostrap 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>-->
   
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
    <body>
     <div class="container">
        <h1 class="title">Productos Registrados</h1>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>CATEGORIA</th>
                <th>PROVEEDOR</th>
                <th>PRECIO</th>
                <th>OPCIONES</th>
                </thead>
                    <tbody>
                    @foreach($datos as $campos)
                    <tr>
                       <td>{{$campos->id}}</td>
                       <td>{{$campos->nombre}}</td>
                       <td>{{$campos->categoria}}</td>
                       <td>{{$campos->proveedor}}</td>
                       <td>${{$campos->precio}} </td>
                       <td>
                       <center>  
                        <a class="btn btn-primary" href="productos/{{$campos->foto}}" target="blank_">Ver Foto</a> 
                       
                        <a class="btn btn-success" href="{{url('/editarp',$campos->id)}}">Editar</a> 
                        
                        <a class="btn btn-danger" href="{{url('/delete',$campos->id)}}">Eliminar</a></center></td>
                    </tr>
               @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-end">
      
       
       {{ $datos->links('pagination::bootstrap-5') }}
         
      </div>
   </div>
     


    </body>
</html>