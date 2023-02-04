<!Doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Login</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{asset('css/app.css')}}">

    <!-- Scripts -->
</head>
<body class="img js-fullheight" style="background-image: url(imagens/doguinhologin.jpg);">
    <div class="body">


        <section class="ftco-section">
			<div class="container-login">
				<div class="row justify-content-center">
					<div class="col-md-6 text-center mb-5">
						<img src="imagens/logzin.png" alt="Logo" width="70" height="64" class="logo-login d-inline-block align-text-top">

						<h2 class="login-title heading-section" style="line-height: 1.5; font-weight: 400;	font-family: Lato, Arial, sans-serif;">
							SOCÃES&GATOS
						</h2>

					</div>
				</div>
                <div class="row justify-content-center">
					<div class="col-md-6 col-lg-4">
						<div class="login-wrap p-0">

							<h3 class="mb-4 text-center" style="line-height: 1.5; font-weight: 400; font-family: 'Lato', Arial, sans-serif;">
								Tem uma conta?
							</h3>

                            <form method="POST" action="{{ route('login') }}" class="signin-form">
                            @csrf

								<div class="form-group">
                                    <input id="email" type="email" class="form-control-login @error('email') is-invalid @enderror"
                                            name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-mail" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
								</div>
								<div class="form-group">
                                    <input id="password" type="password" class="form-control-login @error('password') is-invalid @enderror"
                                    name="password" placeholder="Password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="fa fa-fw fa-eye field-icon toggle-password invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
								</div>

								<div class="form-group d-md-flex ">
									<div class="w-50">

                                        <label class="checkbox-wrap checkbox-primary">Lembrar de mim
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }} checked>
											<span class="checkmark"></span>
                                        </label>

									</div>
									<div class="w-50 text-md-right">
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}" style="color: #fff">
                                                Esqueci minha senha
                                            </a>
                                        @endif
									</div>
								</div>

						</div>
						<div class="form-group" >
                                <button type="submit" class="form-control-login btn btn-primary submit px-3">
                                    Login
                                </button>
                            </form>
							<br>

							@if (Route::has('register'))
                                    <a class="link-login" href="{{ route('register') }}">Cadastre-se</a>
                            @endif
							ou
							<a class="link-login" href="{{ route('site.cadastrar-ong') }}">Cadastre sua ONG</a>

						</div>
					</div>
				</div>
			</div>
		</section>
    </div>
</body>
</html>
