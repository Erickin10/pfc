@extends('layouts.site')

@section('title', 'Meus Posts')
@section('content')

<br><br><br>  <br>

     <h3 class="meusposts-main-title" style="line-height: 1.5; font-weight: 400;	font-family: Lato, Arial, sans-serif;">Meus posts</h3>
     <br><br><br>

    <div class="meusposts-container" class="img img-responsive">

        @foreach ($postsAchado as $post)

            @if( $post->id_Usuario == Auth::user()->id)

            <a href="{{route('site.galeria.achado.post-individual', ['post' => $post])}}"> <img src="{{asset($post->img_Animal)}}" alt="{{asset($post->img_Animal)}}"> </a>

            @endif

        @endforeach

        @foreach ($postsPerdido as $post)

            @if( $post->id_Usuario == Auth::user()->id)

            <a href="{{route('site.galeria.perdido.post-individual', ['post' => $post])}}"> <img src="{{asset($post->img_Animal)}}" alt="{{asset($post->img_Animal)}}"> </a>

            @endif
            
        @endforeach

      </div>

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
