

<header>
    <title>Iniciar Sesión</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" type="text/css" href="{{asset('css/login.css')}}">
        <link rel="icon" href="{{asset('img/Icono.png')}}">
        <link rel="preload" type="text/css" href="{{asset('css/normalize.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/normalize.css')}}"> 
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
               <!-- <div class="card-header">{{ __('Login') }}</div> --> 

                <div class="card-body form-log">
                    <form method="POST" action="{{ route('login') }}">
                    
                        @csrf
                          
                        <div class="row mb-3">
                            <br>
                            <center> <img src="img/Logo.jpeg" alt="" height="145px" width="400px" class="logo-form"> 
                            <h2>INICIO DE SESION</h2></center>
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('') }}</label>
                            <div class="log-form">
                            <div class="col-md-6 campos">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror fondo" name="email" placeholder="Nombre" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            <br>
                            <br>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 ">
                            <label for="password" class="col-md-4 col-form-label text-md-end ">{{ __('') }}</label>

                            <div class="col-md-6 campos">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror fondo" name="password" placeholder="Contraseña" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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
                                    {{ __('INICIAR SESION') }}
                                </button></center>

                                <!-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif -->
                                <p class="regist">¿No tienes una cuenta? | <a class="link" href="{{route('register')}}">Registrate ahora</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>