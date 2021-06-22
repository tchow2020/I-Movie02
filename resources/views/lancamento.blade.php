<!Doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Lançamentos</title>
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>


<body>
    
    @include('Layout.Menu')  
    
    <div class="Aba-lançamentos">     
      <div class="Post-lançamentos">  
        <a  href="">
        <img class="post-GodzilavsKong" src="{{asset('assets/img/Lançamentos-Post/Post-GodzilavsKong.jpg')}}" width="168" height="300">
        </a>
      
        <a href="">
      <img class="post-invocação" src="{{asset('assets/img/Lançamentos-Post/Invocação do mal 3.jfif')}}" width="168" height="300">
        </a>

        <a href="">
      <img class="post-mortal-combat" src="{{asset('assets/img/Lançamentos-Post/Mortal combat.jfif')}}" width="168" height="300">
        </a>

        <a href="">
      <img class="post-viuva-negra" src="{{asset('assets/img/Lançamentos-Post/Viúva negra.jpg')}}" width="168" height="300">
        </a>

        <a href="">
      <img class="post-Venon" src="{{asset('assets/img/Lançamentos-Post/Venon 2.png')}}" width="168" height="300">
       </a>

       <a href="">
      <img class="post-eternos" src="{{asset('assets/img/Lançamentos-Post/os eternos.jfif')}}" width="168" height="300">
       </a>

       <a href="">
      <img class="post-Matrix-4" src="{{asset('assets/img/Lançamentos-Post/Matrix-4.jpg')}}" width="168" height="300"> 
       </a>

       <a href="">
       <img class="post-Liga-Justiça" src="{{asset('assets/img/Lançamentos-Post/Liga da Justiça.jpg')}}" width="168" height="300">  
       </a>
      
    </div>
  </div>
     
  <style>
 
    .Aba-lançamentos{
     padding: 10px; 
     margin: 10px; 
     text-align: center;
     text-decoration: none;
    }  

    .Post-lançamentos{
     padding: 10px;  
     margin: 2px;
     text-decoration: none;
    }

   .post-GodzilavsKong {
    padding: 2px;     
    margin: 2px; 
    text-decoration: none; 
   }
 
   .post-invocação{
    padding: 2px;
    margin: 2px;  
    text-decoration: none;
   }   

   .post-mortal-combat{
    padding: 2px;
    margin: 2px; 
    text-decoration: none;
   }

   .post-viuva-negra{
    padding: 2px;
    margin: 2px;
    text-decoration: none; 
   }

   .post-Venon{
     padding: 2px;
     margin:  2px;
     text-decoration: none;
   }

   .post-eternos{
    padding: 2px;
    margin: 2px;
    text-decoration: none; 
   } 

   .post-Matrix-4{
    padding: 2px; 
    margin: 2px;     
    text-decoration: none;
   }

   .post-Liga-Justiça{
    padding: 2px;
    margin:2px;
    text-decoration: none;
   }

   .test{
     cursor:pointer;
   } 
 </style>


</body>

</html>