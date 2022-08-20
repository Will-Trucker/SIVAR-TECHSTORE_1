<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista Productos</title>
    <link rel="icon" href="<?php echo e(asset('img/Icono.png'), false); ?>">
    <link rel="preload" href="<?php echo e(asset('css/normalize.css'), false); ?>" type="text/css">
    <link rel="preload" href="<?php echo e(asset('css/normalize.css'), false); ?>" type="text/css">
    <link rel="preload" href="<?php echo e(asset('css/listado.css'), false); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('css/listado.css'), false); ?>" type="text/css">
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
                    <?php $__currentLoopData = $datos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $campos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                       <td><?php echo e($campos->id, false); ?></td>
                       <td><?php echo e($campos->nombre, false); ?></td>
                       <td><?php echo e($campos->categoria, false); ?></td>
                       <td><?php echo e($campos->proveedor, false); ?></td>
                       <td>$<?php echo e($campos->precio, false); ?> </td>
                       <td>
                       <center>  
                        <a class="btn btn-primary" href="productos/<?php echo e($campos->foto, false); ?>" target="blank_">Ver Foto</a> 
                       
                        <a class="btn btn-success" href="<?php echo e(url('/editarp',$campos->id), false); ?>">Editar</a> 
                        
                        <a class="btn btn-danger" href="<?php echo e(url('/delete',$campos->id), false); ?>">Eliminar</a></center></td>
                    </tr>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <div class="d-flex justify-content-end">
      
       
       <?php echo e($datos->links('pagination::bootstrap-5'), false); ?>

         
      </div>
   </div>
     


    </body>
</html><?php /**PATH C:\xampp\htdocs\SIVAR-TECHSTORE_1\laravel-mvc\resources\views/listado.blade.php ENDPATH**/ ?>