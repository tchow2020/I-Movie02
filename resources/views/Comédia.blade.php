<!DOCTYPE html>
<html>
  
  <title>Comédia</title>
  <head>
  <meta charset="utf-8"> 
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    {{-- EXEMPLO --}}
    {{-- <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}"> --}}
  </head>
     
  <body>
    
    @include('Layout.Menu')

    <div class="Aba-Menu">
     <div class="Post-Menu">
       <a href="">
        <img class="branquelas" src="{{asset('assets\img\Comédia-Post\branquelas.jpg')}}" width="168" height="300">
       </a>

       <a href="">
        <img class="pernas-ar" src="{{asset('assets\img\Comédia-Post\De-Pernas-Ar.jpg')}}" width="168" height="300">
       </a>
      
       <a href="">
        <img class="deadpool" src="{{asset('assets\img\Comédia-Post\deadpoll.jpg')}}" width="168" height="300">
       </a>
  
       <a href="">
        <img class="gente-grande" src="{{asset('assets\img\Comédia-Post\gente-grande.jpg')}}" width="168" height="300">
       </a>

       <a href="">
        <img class="mãe-peça" src="{{asset('assets\img\Comédia-Post\mãe-peça.jpg')}}" width="168" height="300">
       </a>
       
       <a href="">
        <img class="meu-garoto" src="{{asset('assets\img\Comédia-Post\meu-garoto.jpg')}}" width="168" height="300">
       </a>

       <a href="">
        <img class="shazam" src="{{asset('assets\img\Comédia-Post\Shazam.jpg')}}" width="168" height="300">
       </a>

       <a href="">
        <img class="zoham" src="{{asset('assets\img\Comédia-Post\Zohan.jpg')}}" width="168" height="300">
       </a>

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


     .branquelas{
       padding: 2px;
       margin: 2px;
       text-decoration: none;
     }
   
    .pernas-ar{
      padding: 2px;
      margin: 2px;
      text-decoration: none;
    }  
   
    .deadpool{
      padding: 2px;
      margin: 2px;
      text-decoration: none;
    }

    .gente-grande{
      padding: 2px;
      margin: 2px;
      text-decoration: none;
    }

    .mãe-peça{
      padding: 2px;
      margin: 2px;
      text-decoration: none;
    }
    
    .meu-garoto{
      padding: 2px;
      margin: 2px;
      text-decoration: none;
    }
    
    .shazam{
      padding: 2px;
      margin:2px;
      text-decoration: none;
    }

    .zoham{
      padding: 2px;
      margin: 2px;
      text-decoration: none;
    }

  </style>
  
   

</body>
   
   
     
      
    
    
</html>