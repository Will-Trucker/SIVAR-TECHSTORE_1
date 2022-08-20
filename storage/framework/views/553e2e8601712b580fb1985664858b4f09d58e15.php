<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Productos</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="icon" href="<?php echo e(asset('img/Icono.png'), false); ?>">
    <link rel="preload" type="text/css" href="<?php echo e(asset('css/normalize.css'), false); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/normalize.css'), false); ?>">
    <link rel="preload" href="<?php echo e(asset('css/add_cat.css'), false); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('css/add_cat.css'), false); ?>" type="text/css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>
<body>
    <center>

        <form action="EnvioCat" method="post" class="form-register" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
                <img src="<?php echo e(asset('img/Logo.jpeg'), false); ?>" width="350px" height="145px" class="logo">
                <br>
                <h2 class="title-form">AGREGAR CATEGORIA</h2>
                <input type="text" name="nombre" id="nombre" class="controls" placeholder="Categoria" required> 
                <br>
                <br>
                <div class="archivo">
                <label for="archivo"><i class="fa-solid fa-file-image"></i> Agregar Imagen</label>
                <input type="file" id="archivo" name="archivo"   required>
                <br>
                <h4 id="nombre-a"></h4>
                <script src="<?php echo e(asset('./js/agregar.js'), false); ?>" type="text/javascript"></script>
            </div>
             <br>
                <button class="btn-neon" type="submit">
              
                    <span id="span1"></span>
                    <span id="span2"></span>
                    <span id="span3"></span>
                    <span id="span4"></span>
                    Registrar
           
            </button>
        
        
            </form>
        </center>
</body>
</html><?php /**PATH C:\xampp\htdocs\SIVAR-TECHSTORE_1\laravel-mvc\resources\views/agregar.blade.php ENDPATH**/ ?>