
<body>
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="preload" type="text/css" href="<?php echo e(asset('css/normalize.css'), false); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/normalize.css'), false); ?>"> 
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php echo e(asset('css/Formulario.css'), false); ?>">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
 
            <section class="form-register">
                <img src="<?php echo e(asset('img/logo.jpeg'), false); ?>" width="400px" height="150px" class="logo">
                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('register'), false); ?>">
                        <?php echo csrf_field(); ?>
                        <h2 class="title-form">¡REGISTRATE!</h2>
                        <div class="row mb-3">
                            <label for="name"  class="col-md-4 col-form-label text-md-end "><?php echo e(__(''), false); ?> </label>

                            <div class="col-md-6">
                                <input id="name" type="text" placeholder="Nombre y Apellidos" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> controls" name="name" value="<?php echo e(old('name'), false); ?>" required autocomplete="name" autofocus>

                                <?php $__errorArgs = ['name'];
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

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end"><?php echo e(__(''), false); ?></label>

                            <div class="col-md-6">
                                <input id="email" placeholder="Correo Electronico" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> controls" name="email" value="<?php echo e(old('email'), false); ?>" required autocomplete="email">

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

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end"><?php echo e(__(''), false); ?></label>

                            <div class="col-md-6">
                                <input id="password" placeholder="Contraseña" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> controls" name="password" required autocomplete="new-password">

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

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end"><?php echo e(__(''), false); ?></label>

                            <div class="col-md-6">
                                <input id="password-confirm" placeholder="Cofirmar Contraseña" type="password" class="form-control controls" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <p><input type="checkbox" id="cbox2" value="second_checkbox" checked> <label for="cbox2"><a href="#">Terminos y Condiciones</a></p>
                        <br>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <center><button type="submit" class="btn btn-primary btn-neon" style="text-decoration:none">
                                <span id="span1"></span>
			                    <span id="span2"></span>
			                    <span id="span3"></span>
			                    <span id="span4"></span>
                                    <?php echo e(__('Registrate ahora'), false); ?>

                                </button></center>
                            </div>
                        </div>
                        <p class="regist">¿Ya tienes una cuenta? | <a class="link" href="<?php echo e(route('login'), false); ?>">Iniciar Sesión</a></p>
                    </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>

</body>


<?php /**PATH C:\xampp\htdocs\SIVAR-TECHSTORE_1\laravel-mvc\resources\views/auth/register.blade.php ENDPATH**/ ?>