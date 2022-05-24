<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url(mix('site/bootstrap.css')) }}">
    <title>Listar</title>
</head>
<body>
<div class="container" style="background-color: rgba(0, 0, 0, 10%); padding: 5vh 0">
      <br>
      @csrf
      <table style="width: 100%" class="table table-striped">
            <h1 style="background-color: rgb(211, 211, 223);  text-align: center;">Produtos</h1>
            <thead class="table-dark">
                  <td>#</td>
                  <td>Nome</td>
                  <td>Valor</td>
                  <td>Estoque</td>
                  <td></td>
                  <td></td>
            </thead>
            <?php
                        foreach($produto as $element){
                              echo "<tr>";
                                    echo "<td>$element->id</td>";
                                    echo "<td>$element->nome</td>";
                                    echo "<td>R$$element->valor</td>";
                                    echo "<td>$element->estoque</td>";
                                    echo "<td><button class='btn btn-dark' onclick='document.location=\"editar/{$element->id}\"'>Editar</button></td>";
                                    echo "<td><button class='btn btn-dark' onclick='document.location=\"excluir/{$element->id}\"'>Excluir</button></td>";
                                    echo "</tr>";
                              }
                              ?>
            </table>
            <div style="width: fit-content; margin: auto;">
                  <button class='btn btn-dark' onclick="document.location = '/produtos/novo';">Cadastrar Novo</button>
            </div>
            
            <script src="{{ url(mix('site/jquery.js')) }}"></script>
            <script src="{{ url(mix('site/bootstrap.js')) }}"></script>
</body>
</html>