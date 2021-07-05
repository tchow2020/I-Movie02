<!DOCTYPE html>
<html>
  
  <title>Menu</title>
  <head>
  
  <meta charset="utf-8"> 
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    {{-- EXEMPLO --}}
    {{-- <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}"> --}}
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  </head>
     
  <body>
    
    @include('Layout.Menu')

    <div class="form-adicionar">
      <form class="form-area" action="{{ route('movies.create') }}" method="post">
        @csrf
        
        <div class="form-group mb-3">
          <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Titulo *</span>
          </div>
          <input required type="text" class="form-control form-input" name="titulo" aria-label="Titulo" aria-describedby="basic-addon1">
        </div>

        <div class="form-group mb-3">
          <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Descrição *</span>
          </div>
          <input required type="text" class="form-control form-input" name="descricao" aria-label="Descricao" aria-describedby="basic-addon1">
        </div>

        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">Categoria *</span>
        </div>
        <select required class="form-control form-input mb-3" name="category_id">
          @foreach($categories as $key => $category)
            <option value={{$category->id}}>{{$category->nome}}</option>
          @endforeach
        </select>

        <div class="form-group mb-3">
          <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Tag</span>
          </div>
          <input type="text" class="form-control form-input" name="tag" aria-label="Tag" aria-describedby="basic-addon1">
        </div>

        <div class="form-group mb-3">
          <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Capa *</span>
          </div>
          <input required type="text" class="form-control form-input" name="img_url" aria-label="Capa" aria-describedby="basic-addon1">
        </div>

        <div class="form-group mb-3">
          <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Ano *</span>
          </div>
          <input required type="text" class="form-control form-input" name="ano" aria-label="Ano" aria-describedby="basic-addon1">
        </div>

        <div class="row justify-content-center">
          <button class="btn btn-primary">Adicionar filme</button>
        </div>
        
      </form>
    </div>

    <style>
      .form-area {
        width: 260px;
      }

      .form-area label {
        color: #f9f9f9;
        font-family: Arial;
        font-size: 14px;
      }
      .input-area input{
        border-radius: 40px;
        background-color: #3e3e3e;
        outline: none;
        font-size: 15px;
        height: 28px;
        width: 100%;
        padding-left: 10px;
        color: white;
      }

      .form-adicionar {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100%;
        margin-top: 40px;
      }
    </style>
</body>
</html>