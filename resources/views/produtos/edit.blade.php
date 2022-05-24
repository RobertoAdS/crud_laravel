<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
    <link rel="stylesheet" href="{{ url(mix('site/bootstrap.css')) }}">
</head>
<body>
    <nav class="navbar-resposive absolute rounded-full navbar-expand-lg navbar-dark" style="background-color: #585e56; color:aliceblue">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Produto</a>
          <br>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link" href="/porudtos/novo">Inicio</a>
              <a class="nav-link" href="/produtos/table">Listar</a>
            </div>
          </div>
        </div>
      </nav>
        <div class="container col-md-3" id="form">
        
          <div class="card " style="background-color: darkgray; align-items: center; border-radius: 15px;">
            <form action="{{route('alterar_produto', ['id'=> $produto->id])}}" method="post">
                @csrf
                
                <label class="row sm-3" for="lblNome">Nome:</label>
                <input type="text" name="nome" value="{{ $produto->nome }}">
                <br><br>
                <label class="row sm-3" for="lblNome">Valor:</label>
                <input type="text" name="valor" value="{{ $produto->valor }}">
                <br><br>
                <label class="row sm-3" for="lblNome">Quantidade:</label>
                <input type="text" name="estoque" value="{{ $produto->estoque }}">
                <br><br>
                <button class="btn btn-success" style="text-align: right">Cadastrar</button>
          </div>
        </form>
      </div>
       

    
    <script src="{{ url(mix('site/jquery.js')) }}"></script>
    <script src="{{ url(mix('site/bootstrap.js')) }}"></script>
</body>
</html>