<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href= "./css/bootstrap.min.css"rel="stylesheet" type="text/css"> 
    <title>CadastroCarros</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
    <a class="navbar-brand" href="#">Cadastro CARROS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">

          <a class="nav-link active" aria-current="page" href="index.php">Home</a>

        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=novo">Novo Carro</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=listar">Listar Carro</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container" >
  <div class="row" >
    <div class="col mt-5" >
    <?php
    include("config.php");
    switch (@$_REQUEST["page"]) {
        case "novo":
            include("novo-carro.php");
            break;
        case "listar":
            include("listar-carro.php");
            break;
        case "salvar":
            include("salvar-carro.php");
            break;
        case "editar":
            include("editar-carro.php");
            break;
        default:
            print "<h1>BEM VINDO</h1>";
    }
    ?> 
    </div>
  </div>
</div>

<!-- Optional JavaScript; choose one of the two! -->
<!-- Option 1: Bootstrap Bundle with Popper -->
<script type="test/javascript" src="./js/bootstrap.min.js"></script>
</body>
</html>