<?php if(Session::has('Mensaje')): ?> <?php echo e(Session::get('Mensaje'), false); ?>

<?php endif; ?>
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
    <link rel="preload" href="<?php echo e(asset('css/add_product.css'), false); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('css/add_product.css'), false); ?>" type="text/css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>
<body>
    <center>

        <form action="EnvioProducto" method="post" class="form-register" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
                <img src="<?php echo e(asset('img/Logo.jpeg'), false); ?>" width="350px" height="145px" class="logo">
                <br>
                <h2 class="title-form">AGREGAR PRODUCTOS</h2>
                <input class="controls" type="text" name="nombre" id="nombre" placeholder="Producto" required>
               <!-- <input type="text" name="categoria" id="categoria" class="controls" placeholder="Categoria" required> -->
                <select name="categoria" id="categoria" class="formulario__campo controls">
                    <option disabled selected > SELECCIONAR LA CATEGORIA </option> <br>
                     
                    <option value="Motherboard">Motherboard</option>
                    <option value="Microprocesadores">Microprocesadores</option>
                    <option value="Tarjetas de Video">Tarjetas de Video</option>
                    <option value="Enfriamiento">Enfriamiento</option>
                    <option value="Almacenamiento">Almacenamiento</option>
                    <option value="Monitores">Monitores</option>
                    <option value="Case">Case</option>
                </select> 
               <br> 
               <br>
             <!--  <input type="text" name="proveedor" id="proveedor" class="controls" placeholder="Proveedor" required> -->
               <select name="proveedor" id="proveedor" class="formulario__proveedor" required>
                  <option disabled  placehoder="Proveedor" class="proveedor"> Proveedor </option> <br>
                     
                     <option value="MSI">MSI</option>
                     <option value="RAZER">RAZER</option>
                     <option value="AORUS">AORUS</option>
                     <option value="REDRAGON">REDRAGON</option>
                     <option value="GIGABYTE">GIGABYTE</option>
                     <option value="ASUS">ASUS</option>
                     <option value="ASROCK">ASROCK</option>
                     <option value="INTEL">INTEL</option>
                     <option value="AMD">AMD</option>
                     <option value="SAPPHIRE">SAPPHIRE</option>
                     <option value="COOLER MASTER">COOLER MASTER</option>
                     <option value="CORSAIR">CORSAIR</option>
                     <option value="BE QUIET!">BE QUIET!</option>
                     <option value="NZXT">NZXT</option>
                     <option value="G.SKILL">G.SKILL</option>
                     <option value="KINGSTON">KINGSTON</option>
                     <option value="LaCie">LaCie</option>
                     <option value="SEAGATE">SEAGATE</option>
                     <option value="WESTERN DIGITAL">WESTERN DIGITAL</option>
                     <option value="SandDisk">SAND DISK</option>
                     <option value="ACER">ACER</option>
                     <option value="DELL">DELL</option>
                     <option value="PHILIPS">PHILIPS</option>
                     <option value="SAMSUNG">SAMSUNG</option>
                     <option value="AOC">AOC</option>
                     <option value="FRACTAL DESIGN">FRACTAL DESIGN</option>
                  </select>
                <br>
                <br>
                <input class="controls" type="number" name="precio" id="precio" placeholder="$ Precio" required step="0.01" min="0"> 
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
</html><?php /**PATH C:\xampp\htdocs\SIVAR-TECHSTORE_1\laravel-mvc\resources\views/product.blade.php ENDPATH**/ ?>