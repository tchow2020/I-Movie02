<!DOCTYPE html>
<html>
  
  <title>Menu</title>
  <head>
  
  <meta charset="utf-8"> 
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    {{-- EXEMPLO --}}
    {{-- <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}"> --}}
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  </head>
     
  <body>
    
    @include('Layout.Menu')

    <div class="Aba-Menu">
      <div>
        <a class="add-button" href="{{route('adicionarFilme')}}">
          <i class="fas fa-plus"></i> Adicionar filme
        </a>
      </div>
      
      @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
      @endif
      @if(session('error'))
        <div class="alert alert-error">
          {{ session('error') }}
        </div>
      @endif
     <div class="Post-Menu">
       <div class="movie-area">
          @foreach($movies as $key => $movie)
            <a href="{{route('movies.ver', ['titulo' => $movie->titulo])}}">
              <img class="Post-Filme" src="{{$movie->img_url}}">
            </a>
          @endforeach
        </div>
        @if ($movies->count() <= 0)
          <div class="no-movie">
            <span>Não existe filmes no momento</span>
          </div>
        @endif
     </div>

    </div>

    <style>
     .Aba-Menu{
       padding: 10px;
       margin: 10px;
       text-align: center;
       text-decoration: none;
     }
     
     .Post-Menu{
       padding: 10px;
       margin: 2px;
     }

     .Post-Filme{
       padding: 2px;
       margin: 2px;
       text-decoration: none;
       opacity: 1;
       height: 274px;
       width: 168px;
       transition: 0.2s;
     } 
       
    .Post-Filme:hover{
      opacity: 0.6;  
      
    }

    .add-button {
      color: #f9f9f9;
      font-size: 16px;
      font-family: Arial;
      text-decoration: none;
      transition: .2s;
    }
    .add-button:hover {
      opacity: .8;
    }

    .no-movie {
      margin-top: 60px;
    }
    .no-movie span{
      color: #f9f9f9;
      font-family: Arial;
    }

    .movie-area {
      position: relative;
    }
  </style>
   
   

</body>
</html>