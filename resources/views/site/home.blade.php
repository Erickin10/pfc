@extends('layouts.site')

@section('title', 'Socães&Gatos')
@section('content')
<!--Slide fotos-->
<div class="container-fluid">
    <div id="mainSlider" class="carousel slide" data-bs-ride="carousel">

      <!--Botoes-->
      <div class="carousel-indicators">

        <button type="button" data-bs-target="#mainSlider" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#mainSlider" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#mainSlider" data-bs-slide-to="2"></button>

      </div>

      <!--Fotos-->
      <div class="carousel-inner">

        <div class="carousel-item active">
          <img src="{{asset('imagens/vetcopia1.jpg')}}" class="d-block w-100" alt="Projetos de resgate">
          <div class="carousel-caption d-none d-md-block">
            <h2>Quer ajudar um bichinho?</h2>
            <p>Doe para alguma dessas ONGs</p>
            <a href="#" class="main-btn">Ver ONGs</a>
          </div>
        </div>

        <div class="carousel-item  ">
          <img src="{{asset('imagens/caotiti.jpeg')}}" class="d-block w-100" alt="Enconctrar bichinhos">
          <div class="carousel-caption d-none d-md-block">
            <h2>Perdeu seu bichinho?</h2>
            <p>Encontramos quase 400 bichinhos todos os anos</p>
            <a href="#" class="main-btn">Ver perdidos</a>
          </div>
        </div>

        <div class="carousel-item  ">
          <img src="{{asset('imagens/gato2.jpg')}}" class="d-block w-100" alt="Faca um bichinho feliz">
          <div class="carousel-caption d-none d-md-block">
            <h2>Quer trazer mais alegria pra sua vida?</h2>
            <p>Adote um de nossos bichinhos</p>
            <a href="#" class="main-btn">Ver bichinhos</a>
          </div>
        </div>

      </div>

      <a href="#mainSlider" class="carousel-control-prev" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only"></span>
      </a>

      <a href="#mainSlider" class="carousel-control-next" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only"></span>
      </a>

    </div>
  </div>

  <br><br>

  <!-- Barra de pesuqisa das ONGs -->
  <form action="" method="POST" class="d-flex mt-3" role="search">
    <input class="search-bar rounded" type="Procure uma ONG" placeholder="Procure uma ONG" aria-label="Procure uma ONG">
    <button type="submit" class="botaozin rounded" type="submit">Procurar</button>
  </form>

  <br><br>

  <!-- Achados -->
  <div id="about-area">

    <div class="container">
      <div class="col-12"><br>

        <h3 class="achados-home"> Achados </h3>

      </div>
    </div>

    <div class="slider">
      <div class="container">
        <div class="row slick_slide">

          <div class="col-3">
            <div class="team">

              <img src="imagens/cachorro encontrado.jpeg" alt="" class="img-fluid">
              <a href="#"></a>
              <h5> Vira-lata</h5>
              <p>Achado ontem</p>

            </div>
          </div>

          <div class="col-3">
            <div class="team">

              <img src="imagens/gatoperdido.jpg" alt="" class="img-fluid">
              <a href="#"></a>
              <h5> Gato</h5>
              <p>Achado faz 2 semanas</p>

            </div>
          </div>

          <div class="col-3">
            <div class="team">

              <img src="imagens/max.jpeg" alt="" class="img-fluid">
              <a href="#"></a>
              <h5>Max</h5>
              <p>Achado dia 01/09/22</p>

            </div>
          </div>

          <div class="col-3">
            <div class="team">

              <img src="imagens/salsicha achado.jpg" alt="" class="img-fluid">
              <a href="#"></a>
              <h5> Salsicha</h5>
              <p>Achado hoje</p>

            </div>
          </div>

        </div>
      </div>
    </div>

  </div>

  <!-- Perdidos -->
  <div id="about-area">

    <div class="container">
      <div class="col-12"><br>

        <h3 class="perdidos-home"> Perdidos </h3>

      </div>
    </div>

    <div class="slider">
      <div class="container">
        <div class="row slick_slide">

          <div class="col-3">
            <div class="team">

              <img src="imagens/cachorro encontrado.jpeg" alt="" class="img-fluid">
              <a href="#"></a>
              <h5> Vira-lata</h5>
              <p>Perdido ontem</p>

            </div>
          </div>

          <div class="col-3">
            <div class="team">

              <img src="imagens/gatoperdido.jpg" alt="" class="img-fluid">
              <a href="#"></a>
              <h5> Gato</h5>
              <p>Perdido faz 2 semanas</p>

            </div>
          </div>

          <div class="col-3">
            <div class="team">

              <img src="imagens/max.jpeg" alt="" class="img-fluid">
              <a href="#"></a>
              <h5>Max</h5>
              <p>Perdido dia 01/09/22</p>

            </div>
          </div>

          <div class="col-3">
            <div class="team">

              <img src="imagens/salsicha achado.jpg" alt="" class="img-fluid">
              <a href="#"></a>
              <h5> Salsicha</h5>
              <p>Perdido hoje</p>

            </div>
          </div>

        </div>
      </div>
    </div>

  </div>

  <!-- Sobre a SOCAES&GATOS -->
  <div id="about-area">

    <div class="container">
      <div class="row">

        <div class="col-12">

          <h3 class="sobrenos-home"> Sobre a SOCÃES&GATOS </h3>

        </div>

        <div class="col-md-6">
          <img class="img-fluid" src="{{asset('imagens/caoegato1.png')}}" alt="SOCAESEGATOS">
        </div>

        <div class="col-md-6">

          <h3 class="about-tittle">A melhor amiga para ajudar seu melhor amigo</h3>
          <p>
            Como ajudar cães e gatos? Por mais que a tecnologia e os meios de comunicação estejam cada vez mais avançados,
            você ainda pode ter dificuldade em encontrar e contatar abrigos e ONGs que ajudam esses animais.
          </p>
          <p>
            Ninguém está livre de imprevistos do acaso, principalmente quando o assunto são nossos bichinhos de estimação,
            sendo assim a qualquer momento podemos nos deparar com um grande problema como perder nosso pet.
          </p>
          <p>
            Ao passar por situações como essas, podemos ficar sem saber o que fazer, para contornar tais adversidades em 1 de junho de 2022 decidimos criar a SOCÃES&GATOS,
            uma organização que traz a solução para tais problemas, ela irá facilitar o seu trabalho e te fazer uma pessoa mais feliz.
          </p>

          <ul id="about-list">

            <li><i class="fas fa-check"></i>Te ajudamos a recuperar sua alegria encontrando seu pet </li>
            <li><i class="fas fa-check"></i>Te aliviamos o trabalho de se contatar com abrigos e ONGs </li>
            <li><i class="fas fa-check"></i>Te oferecemos diversos pets para colorir sua vida</li>
            <li><i class="fas fa-check"></i>Te oferecemos a oportunidade de fazer o bem </li>
            <li><i class="fas fa-check"></i>Não visamos nenhum tipo de meio lucrativo </li>

          </ul>
        </div>

      </div>
    </div>

  </div>

  <main>

    <!-- Sobre nós -->
    <h3 class="nossotime-home"> Nosso time </h3>
    <div class="container">
      <div class="row">

        <!-- Thomas -->
        <div class="col-md-4">
          <hr>
          <div class="profile-card-2"><img src="{{asset('imagens/foto-thomas10.jpeg')}}" class="img img-responsive">
            <div class="profile-name">Thomas Villegas</div>
            <div class="profile-username">thomstrong@hotmail.com</div>
            <div class="profile-icons">

              <a href="https://www.facebook.com/profile.php?id=100089690105655">
                <i class="fa fa-facebook" href="home.html"></i>
              </a>

              <a href="https://www.instagram.com/thomas.vtz/">
                <i class="fa fa-instagram"></i>
              </a>

              <a href="https://br.linkedin.com/in/thomas-villegas-aa3331226">
                <i class="fa fa-linkedin"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- Xavier -->
        <div class="col-md-4">
          <hr>
          <div class="profile-card-2"><img src="{{asset('imagens/foto-xavier10.jpeg')}}" class="img img-responsive">
            <div class="profile-name">Xavier Bogado</div>
            <div class="profile-username">xavisbelto@hotmail.com</div>
            <div class="profile-icons">

              <a href="https://www.facebook.com/xavier.bogado">
                <i class="fa fa-facebook" ></i>
              </a>

              <a href="https://www.instagram.com/xavier.bogado/">
                <i class="fa fa-instagram"></i>
              </a>

              <a href="https://pa.linkedin.com/in/franciscobogado">
                <i class="fa fa-linkedin"></i>
              </a>

            </div>
          </div>
        </div>

        <!-- Erick -->
        <div class="col-md-4">
          <hr>
          <div class="profile-card-2"><img src="{{asset('imagens/foto-erick10.jpeg')}}" class="img img-responsive">
            <div class="profile-name">Erick Felipe</div>
            <div class="profile-username">erickfsbarreto@gmail.com</div>
            <div class="profile-icons">

              <a href="https://www.facebook.com/profile.php?id=100008717918751">
                <i class="fa fa-facebook"></i>
              </a>

              <a href="https://www.instagram.com/erickin.03/">
                <i class="fa fa-instagram"></i>
              </a>

              <a href="https://br.linkedin.com/in/erick-felipe35">
                <i class="fa fa-linkedin"></i>
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>

    <br><br><br><br>

  </main>



</body>

<!--Scripts-->
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

<!--Font Awesome-->
<script src="https://kit.fontawesome.com/362d3e387c.js" crossorigin="anonymous"></script>

<!--Progress Bar-->
<script src="js/progessbar.min.js"></script>

<!--Parallax-->
<script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>

<script src="js/slick.min.js"></script>
<script src="js/custom.js"></script>

@endsection
