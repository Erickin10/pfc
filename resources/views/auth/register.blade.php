<!Doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <title>Cadastre-se</title>

</head>
<body class="img js-fullheight"
style="background-image: url(imagens/doguinhologin.jpg);
width: 100%;
height: 100vh;
display: flex;
justify-content: center;
align-items: center;
background-size: cover;">

    <div class="container-cad">

        <div class="form-image">
            <img src="imagens/CADASTROP.png" alt="">
        </div>

        <div class= "form-cad">

            <form id="msform-cad" method="POST" action="{{ route('register') }}">
                @csrf

                <fieldset align-items: center>

                    <h6 class="fs-title-cad">Cadastre-se</h6>

                    <!-- Inputs-->
                    <div class="input-group">

                        <!-- Nome -->
                        <div class="input-box">
                            <input id="nomeuser" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Nome Completo" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="input-box">
                            <input id="emailuser" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-mail">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Senha -->
                        <div class="input-box">
                            <input id="senhauser" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Digite sua senha">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Confirmar senha -->
                        <div class="input-box">
                            <input id="confrimauser" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Digite sua senha novamente">
                        </div>

                    </div>

                    <!-- Botão de enviar dados -->
                    <a href="cadastro-certo.html" class="submit action-button" target="_top">Cadastrar</a>

                    <br><br>

                </fieldset>

            </form>
        </div>
    </div>
</body>
</html>
