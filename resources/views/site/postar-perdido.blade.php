@extends('layouts.site')

@section('title', 'Criar Postagem')
@section('content')
  <br><br><br><br>

  <h3 class="main-title-p"> Perdido </h3>

  <!-- Formulário de passos de progressão -->
  <form action="{{route('site.postar-perdido.form')}}" method="POST" enctype="multipart/form-data" class="msform-post" id="msform-post">

    @csrf
    <!-- Barra de progressão -->
    <ul id="progressbar">
      <li class="active">Idenficicação</li>
      <li>Reconhecimento</li>
      <li>Observações</li>
    </ul>

    <!-- Fieldsets -->

    <!-- Fieldset 1 -->
    <fieldset align-items: center>

      <h2 class="fs-title-post">Passo 1</h2>
      <h3 class="fs-subtitle-post">Nos conte sobre o seu pet</h3>

      <select name="type_Animal" id="select-input">
        <option value="Gatoucachorro">É um gato ou um cachorro?</option>
        <option value="Gato">Gato</option>
        <option value="Cachorro">Cachorro</option>
      </select>
      <input type="text" name="name_Animal" placeholder="Qual é o nome dele?" />
      <input type="text" name="breed_Animal" placeholder="Qual é a raça dele?" />
      <input type="text" name="color_Animal" placeholder="Qual é a cor dele?"  />
      <input type="text" name="age_Animal" id="idade" placeholder="Quantos anos ele tem?"/>
      <select name="gender_Animal" id="select-input" >
          <option value="Genero">Qual é gênero dele?</option>
          <option value="Macho">Macho</option>
          <option value="Fêmea">Fêmea</option>
      </select>
      <select name="size_Animal" id="select-input">
          <option value="Porte">Qual é o porte dele?</option>
          <option value="Grande">Grande</option>
          <option value="Médio">Médio</option>
          <option value="Pequeno">Pequeno</option>
      </select>
      <img src="imagens/dogcatsob.png" alt="cachorro" id="imagem-dogcatsob1">

      <input type="button" name="next" class="next action-button" value="Próximo" />

    </fieldset>

    <!-- Fieldset 2 -->
    <fieldset>

      <h2 class="fs-title-post">Passo 2</h2>
      <h3 class="fs-subtitle-post">Nos mostre seu pet</h3>

      <div class="file-upload">

        <img src="imagens/dogcatsob.png" alt="cachorro" id="imagem-dogcatsob2">

        <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">
          Adicionar imagem
        </button>
        <div class="image-upload-wrap">
          <input class="file-upload-input" name="img_Animal" type="file" multiple onchange="readURL(this);" accept="image/*" />
          <div class="drag-text">
            <h3>Solte a imagem aqui </h3>
          </div>
        </div>

        <div class="file-upload-content">
          <img class="file-upload-image" src="#" alt="your image" />
          <div class="image-title-wrap">
            <button type="button" onclick="removeUpload()" class="remove-image">
              Remover
              <span class="image-title">o upload da imagem</span>
            </button>
          </div>
        </div>
      </div>

      <input type="button" name="previous" class="previous action-button" value="Anterior" />
      <input type="button" name="next" class="next action-button" value="Próximo" />

    </fieldset>

    <!-- Fieldset 3 -->
    <fieldset >

        <h2 class="fs-title-post">Passo 3</h2>
        <h3 class="fs-subtitle-post">Nos conte outros detalhes</h3>
        <img src="imagens/dogcatsob.png" alt="cachorro" id="imagem-dogcatsob3">
        <input type="text" name="lost_Animal" placeholder="Onde ele foi perdido?" />
        <input type="text" name="post_Description" placeholder="Observações" />
        <input type="number" name="bounty_Animal" step="1" min="0" max="99999.99" id="recompensa" placeholder="Recompensa(opcional)"/>
        <input type="hidden" name="id_Usuario" value="{{Auth::user()->id}}"/>

       <input type="button" name="previous" class="previous action-button" value="Anterior" />
       <button type="submit" class="submit action-button">Enviar</button>

    </fieldset>

  </form>

  <main>
  </main>

</body>

<!--Scripts-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<!--Font Awesome-->
<script src="https://kit.fontawesome.com/362d3e387c.js" crossorigin="anonymous"></script>

<!--Progress Bar-->
<script src="js/progessbar.min.js"></script>

<script src="js/postar.js"></script>
@endsection
