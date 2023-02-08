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

    <title>Cadastre sua Ong</title>

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

            <form id="msform-cad" action="{{route('site.cadastrar-ong.form')}}" method="POST" >
            @csrf

                <fieldset align-items: center>

                    <h6 class="fs-title-cad">Cadastre sua ONG</h6>

                    <!-- Inputs-->
                    <div class="input-group">

                        <!-- Nome -->
                        <div class="input-box">
                            <input id="nomeong"
                                type="text"
                                name="name"
                                placeholder="Nome"
                                required>
                        </div>

                        <!-- Email -->
                        <div class="input-box">
                            <input id="emailong"
                                type="email"
                                name="email"
                                placeholder="E-mail"
                                required>
                        </div>

                        <!-- Descrição -->
                        <div class="input-box">
                            <input id="descricaoong"
                                type="text"
                                name="description"
                                placeholder="Descricão"
                                required>
                        </div>

                        <!-- Telefone
                        pattern="\([0-9]{2}\)[0-9]{5}-[0-9]{4}" -->
                        <div class="input-box">
                            <input id="telefoneONG"
                                name="phone"
                                maxlength="14"
                                placeholder="Telefone:(XX)XXXXX-XXXX"

                                required>
                        </div>

                        <!-- CNPJ -->
                        <!-- pattern="[0-9]{2}.[0-9]{3}.[0-9]{3}/[0-9]{4}.[0-9]{2}" -->
                        <div class="input-box">
                            <input id="cnpjong"
                            name="cnpj"
                            maxlength="18"
                            placeholder="CNPJ:XX.XXX.XXX/XXXX-XX"
                            required>
                        </div>

                        <!-- CEP -->
                        <div class="input-box">

                                <input
                                type="text"
                                class="form-control shadow-none"
                                id="cepong"
                                name="cep"
                                placeholder="CEP:XXXXXXXX"
                                maxlength="9"
                                minlength="9"
                                required>

                        </div>

                        <!-- Rua -->
                        <div class="input-box">

                                <input
                                type="text"
                                class="form-control shadow-none"
                                id="ruaong"
                                name="rua"
                                placeholder="Rua"
                                required>

                        </div>

                        <!-- Bairro -->
                        <div class="input-box">
                            <input
                            type="text"
                            class="form-control shadow-none"
                            id="bairrong"
                            name="bairro"
                            placeholder="Bairro"
                            required>
                        </div>

                        <div class="input-box">
                            <select  name="estado" id="select-estadoong" class="form-control shadow-none" required>
                                <option value="" selected>Estado</option>
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
                        </div>

                        <!-- Cidade -->
                        <div class="input-box">
                            <input
                            type="text"
                            class="form-control shadow-none"
                            id="cidadong"
                            name="cidade"
                            placeholder="Cidade"
                            required>
                        </div>

                        <!-- Complemento -->
                        <div class="input-box">
                            <input id="complementong"
                            type="text"
                            name="complemento"
                            placeholder="Complemento"
                            required>
                        </div>

                        <!-- Numero da casa-->
                        <div class="input-box">
                            <input id="numeroong"
                            type="number"
                            name="numero"
                            placeholder="Número"
                            required>
                        </div>

                        <input type="hidden" name="aproved" value="false">

                    </div>

                    <!-- Botão de enviar dados -->
                    <button type="submit" class="submit action-button" target="_top">Cadastrar</button>

                    <br><br>

                </fieldset>

            </form>
        </div>
    </div>
</body>
</html>
