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
                            <input id="nomeuser" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Nome" autofocus>

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

                        <!-- Telefone -->
                        <div class="input-box">
                            <input id="telefoneuser" type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" pattern="\([0-9]{2}\)[0-9]{5}-[0-9]{4}" placeholder="Telefone: (XX)XXXXX-XXXX" >

                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- CEP -->
                        <div class="input-box">
                            <input id="cepuser" type="text" class="form-control @error('cep') is-invalid @enderror" name="cep" value="{{ old('cep') }}" required autocomplete="cep" pattern="[0-9]{5}-[0-9]{3}" placeholder="Cep (Apenas Numeros)" >

                            @error('cep')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Rua -->
                        <div class="input-box">
                            <input id="ruauser" type="text" class="form-control @error('rua') is-invalid @enderror" name="rua" value="{{ old('rua') }}" required autocomplete="rua" placeholder="Nome da Rua" >

                            @error('rua')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Bairro -->
                        <div class="input-box">
                            <input id="bairrouser" type="text" class="form-control @error('bairro') is-invalid @enderror" name="bairro" value="{{ old('bairro') }}" required autocomplete="bairro" placeholder="Nome do Bairro" >

                            @error('bairro')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <select  name="estado" id="select-estadouser" aria-label="Estado user" class="form-control me-2" required>
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito-Federal</option>
                            <option value="ES">Espirito Santo</option>
                            <option value="GO">Goiais</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grando do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                        </select>

                        <!-- Cidade -->
                        <div class="input-box">
                            <input id="cidadeuser" type="text" class="form-control @error('cidade') is-invalid @enderror" name="cidade" value="{{ old('cidade') }}" required autocomplete="cidade" placeholder="Cidade" >

                            @error('cidade')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Complemento -->
                        <div class="input-box">
                            <input id="complementouser" type="text" class="form-control @error('complemento') is-invalid @enderror" name="complemento" value="{{ old('complemento') }}" required autocomplete="complemento" placeholder="Complemento" >

                            @error('complemento')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Numero da casa-->
                        <div class="input-box">
                            <input id="numerouser" type="number" class="form-control @error('numero') is-invalid @enderror" name="numero" value="{{ old('numero') }}" required autocomplete="numero" placeholder="Numero" >

                            @error('numero')
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
                    <button class="submit action-button" target="_top">Cadastrar</button>

                    <br><br>

                </fieldset>

            </form>
        </div>
    </div>
</body>
</html>
