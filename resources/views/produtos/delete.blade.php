    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Delete</title>
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
                <a class="nav-link" href="">inicio</a>
                <a class="nav-link" href="">Listar</a>
                <a class="nav-link" href="{{route('alterar_produto', ['id'=> $produto->id])}}">Editar</a>
                <a class="nav-link" href="#">Excluir</a>
                </div>
            </div>
            </div>
        </nav>
        <div class="container-fluid" id="form">
        <div class="col-md-6">
        
            <form action="{{route('excluir_produto', ['id'=> $produto->id])}}" method="POST">
                @csrf
                <label for="">Tem certeza que deseja excluir este produto?</label><br>
                <input type="text" name="nome" value="{{ $produto->nome}}"><br>
                <button class="btn btn-success">Sim</button>
            </form>
        </div>
        </div>


        <script src="{{ url(mix('site/jquery.js')) }}"></script>
        <script src="{{ url(mix('site/bootstrap.js')) }}"></script>

    </body>
    </html>