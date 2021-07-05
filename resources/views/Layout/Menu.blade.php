<div id="menu">
    
     
    <table align="center" width="1000px">
       <th>
         <img class="logo" src="{{asset('assets/img/icons/camera-de-filme.png')}}">
       </th>
     <th class="Caixa-Busca">
      	<form method="get" action="{{route('movies.buscarFilme')}}">
        	<input id="caixa-busca" type="search" name="busca" placeholder="Digite seu Filme...">
       
        	<button style="border: 0; outline: none; background: none;"><img id="lupa-busca" alt="buscar"  src="{{asset('assets/img/Anime-Post/lupa.png')}}" width="20px" height="20px"></button>
				</form>
     </th> 
     
     <th><a href="{{route('index')}}">INÍCIO</a></th>
     <th><a href="{{route('index', ['categoria' => 'terror'])}}">TERROR</a></th>
     <th><a href="{{route('index', ['categoria' => 'acao'])}}">AÇÃO</a></th>
     <th><a href="{{route('index', ['categoria' => 'drama'])}}">DRAMA</a></th>
     <th><a href="{{route('index', ['categoria' => 'romance'])}}">ROMANCE</a></th>
     <th><a href="{{route('index', ['categoria' => 'anime'])}}">ANIME</a></th>
     <th><a href="{{route('index', ['categoria' => 'comedia'])}}">COMÉDIA</a></th>
     <th><a href="{{route('index', ['categoria' => 'lancamentos'])}}">LANÇAMENTOS</a></th>
    </table>
    
    
  </div>