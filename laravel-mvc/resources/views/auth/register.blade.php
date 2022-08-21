
<body>
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="preload" type="text/css" href="{{asset('css/normalize.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/normalize.css')}}"> 
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/Formulario.css')}}">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
 
            <section class="form-register">
                <img src="{{asset('img/logo.jpeg')}}" width="400px" height="150px" class="logo">
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <h2 class="title-form">¡REGISTRATE!</h2>
                        <div class="row mb-3">
                            <label for="name"  class="col-md-4 col-form-label text-md-end ">{{ __('') }} </label>

                            <div class="col-md-6">
                                <input id="name" type="text" placeholder="Nombre y Apellidos" class="form-control @error('name') is-invalid @enderror controls" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('') }}</label>

                            <div class="col-md-6">
                                <input id="email" placeholder="Correo Electronico" type="email" class="form-control @error('email') is-invalid @enderror controls" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('') }}</label>

                            <div class="col-md-6">
                                <input id="password" placeholder="Contraseña" type="password" class="form-control @error('password') is-invalid @enderror controls" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('') }}</label>

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
                                    {{ __('Registrate ahora') }}
                                </button></center>
                            </div>
                        </div>
                        <p class="regist">¿Ya tienes una cuenta? | <a class="link" href="{{route('login')}}">Iniciar Sesión</a></p>
                    </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

