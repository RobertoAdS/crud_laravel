<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show</title>
    <link rel="stylesheet" href="{{ url(mix('site/bootstrap.css')) }}">
</head>
<body>
    <nav class="navbar-resposive absolute rounded-full navbar-expand-lg navbar-dark" style="background-color: #4ec915; color:aliceblue">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Produto</a>
          <br>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link" href="{{url('/produtos/novo')}}">inicio</a>
              <a class="nav-link" href="">Listar</a>
              <a class="nav-link" href="{{route('alterar_produto')}}">Editar</a>
              <a class="nav-link" href="">Excluir</a>
            </div>
          </div>
        </div>
      </nav>
      <div class="container-fluid" id="form">
        <div class="col-md-6">
    
            <form action="" method="POST">
                
                <label for="lblNome">Nome:</label>
                <input type="text" name="nome" value="{{ $produto->nome }}">
                <br><br>
                <label for="lblNome">Valor:</label>
                <input type="text" name="valor" value="{{ $produto->valor }}">
                <br><br>
                <label for="lblNome">Quantidade:</label>
                <input type="text" name="estoque" value="{{ $produto->estoque }}">
                
            </form>
        </div>
        </div>

<script src="{{ url(mix('site/jquery.js')) }}"></script>
<script src="{{ url(mix('site/bootstrap.js')) }}"></script>

</body>
</html>