<!DOCTYPE html>
<html>
  
  <title>Menu</title>
  <head>
  
  <meta charset="utf-8"> 
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  </head>
     
  <body>
    
    @include('Layout.Menu')

    <div class="ver-filme">
      <div class="filme-area">
        <div class="img-area">
          <img src="{{$movie->img_url}}"/>
          <div class="text-area">
            <h3>{{$movie->titulo}}</h3>
            <p>{{$movie->descricao}}</p>
          </div>
        </div>
        <div>
          <h4>Ano: {{$movie->ano}}</h4>
        </div>
      </div>
    </div>

    <style>
     .ver-filme {
        display: flex;
        flex-direction: column;
        margin-top: 60px;
        margin: 60px 40px 0 40px;
        font-family: Arial;
     }

     .img-area {
       display: flex;
     }
     .img-area img {
       width: 310px;
       height: 420px;
     }

     .text-area {
        margin-left: 14px;
     }
  </style>
</body>
</html>