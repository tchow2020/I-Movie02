<!DOCTYPE html>
<html>
  
  <title>Ação</title>
  <head>
  <meta charset="utf-8"> 
  <link rel="stylesheet" href="{{asset('assets\css\style.css')}}">
    {{-- EXEMPLO  de como puxar o css--}}
    {{-- <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}"> --}}
  </head>
     
  <body>
    
    @include('Layout.Menu')
   
    <div class="Aba-Menu">
     <div class="Post-Menu">
       <a href="">
        <img class="aquaman" src="{{asset('assets\img\Ação-Post\Aquaman.jpg')}}" width="168" height="300">
       </a>

       <a href="">
        <img class="endgame" src="{{asset('assets\img\Ação-Post\Avengers-Endgame.jpg')}}" width="168" height="300">
       </a>
      
       <a href="">
        <img class="in-time" src="{{asset('assets\img\Ação-Post\In-Time.jpg')}}" width="168" height="300">
       </a>
  
       <a href="">
        <img class="jhon-wick" src="{{asset('assets\img\Ação-Post\Jhon Wick 2.jpg')}}" width="168" height="300">
       </a>

       <a href="">
        <img class="logan" src="{{asset('assets\img\Ação-Post\Logan.jpg')}}" width="168" height="300">
       </a>
       
       <a href="">
        <img class="pantera-negra" src="{{asset('assets\img\Ação-Post\Pantera-Negra.jpg')}}" width="168" height="300">
       </a>

       <a href="">
        <img class="last-blood" src="{{asset('assets\img\Ação-Post\Rambo-Last-Blood.jpg')}}" width="168" height="300">
       
      </a>
       
       <a href="">
        <img class="resgate" src="{{asset('assets\img\Ação-Post\Resgate.jpg')}}" width="168" height="300">
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

     .aquaman{
       padding: 2px;
       margin: 2px;
       text-decoration: none;
    }
   
    .endgame{
      padding: 2px;
      margin: 2px;
      text-decoration: none;
    }  
   
    .jhon-wick{
      padding: 2px;
      margin: 2px;
      text-decoration: none;
    }

    .logan{
      padding: 2px;
      margin: 2px;
      text-decoration: none;
    }

    .pantera-negra{
      padding: 2px;
      margin: 2px;
      text-decoration: none;
    }
    
    .last-blood{
      padding: 2px;
      margin: 2px;
      text-decoration: none;
    }
    
    .in-time{
      padding: 2px;
      margin:2px;
      text-decoration: none;
    }

    .resgate{
      padding: 2px;
      margin: 2px;
      text-decoration: none;
    }

  </style>
   
   

   

</body>
   
   
     
      
    
    
</html>