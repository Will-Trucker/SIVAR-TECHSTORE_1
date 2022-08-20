

<header>
    <title>Iniciar Sesión</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/login.css'), false); ?>">
        <link rel="icon" href="<?php echo e(asset('img/Icono.png'), false); ?>">
        <link rel="preload" type="text/css" href="<?php echo e(asset('css/normalize.css'), false); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/normalize.css'), false); ?>"> 
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
</header>
<body>
<br><br><br><br><br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               <!-- <div class="card-header"><?php echo e(__('Login'), false); ?></div> --> 

                <div class="card-body form-log">
                    <form method="POST" action="<?php echo e(route('login'), false); ?>">
                    
                        <?php echo csrf_field(); ?>
                          
                        <div class="row mb-3">
                            <br>
                            <center> <img src="img/Logo.jpeg" alt="" height="145px" width="400px" class="logo-form"> 
                            <h2>INICIO DE SESION</h2></center>
                            <label for="email" class="col-md-4 col-form-label text-md-end"><?php echo e(__(''), false); ?></label>
                            <div class="log-form">
                            <div class="col-md-6 campos">
                                <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> fondo" name="email" placeholder="Nombre" value="<?php echo e(old('email'), false); ?>" required autocomplete="email" autofocus>
                            <br>
                            <br>
                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message, false); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="row mb-3 ">
                            <label for="password" class="col-md-4 col-form-label text-md-end "><?php echo e(__(''), false); ?></label>

                            <div class="col-md-6 campos">
                                <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> fondo" name="password" placeholder="Contraseña" required autocomplete="current-password">

                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message, false); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <br>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                            <center><button type="submit" class="btn btn-primary btn-neon" style="text-decoration:none">
                                <span id="span1"></span>
			                    <span id="span2"></span>
			                    <span id="span3"></span>
			                    <span id="span4"></span>
                                    <?php echo e(__('INICIAR SESION'), false); ?>

                                </button></center>

                                <!-- <?php if(Route::has('password.request')): ?>
                                    <a class="btn btn-link" href="<?php echo e(route('password.request'), false); ?>">
                                        <?php echo e(__('Forgot Your Password?'), false); ?>

                                    </a>
                                <?php endif; ?> -->
                                <p class="regist">¿No tienes una cuenta? | <a class="link" href="<?php echo e(route('register'), false); ?>">Registrate ahora</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<?php /**PATH C:\xampp\htdocs\SIVAR-TECHSTORE_1\laravel-mvc\resources\views/auth/login.blade.php ENDPATH**/ ?>