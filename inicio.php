<?php
  session_start();
    if(EMPTY($_SESSION)){
      print "<script>location.href='index.php';</script>";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <title>Página inicial</title>
</head>
<body>
<nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Almoxarifado Fac</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Escolha uma opção:</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="?page=inicio">Início</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=cadastrar">Cadastrar itens</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=exibir">Exibir itens</a>
          </li>
      </div>
       <a class="btn btn-danger" href="logout.php">Sair</a>
    </div>
  </div>
</nav>

<div class="container">
  <div class="row">
    <div class="col mt-5">
      <?php
        switch(@$_REQUEST["page"]) {
          case "cadastrar":
            include("./cadastrar/cadastrar.php");
          break;
          case "exibir":
            include("./cadastrar/exibir.php");
          break;
          case "salvar":
            include("./cadastrar/salvar.php");
          break;
          case "editar":
            include("./cadastrar/editar.php");
          break;
          default:
            print "<h1>Bem vindo ". $_SESSION["nome"]."!</h1>";
        }
      ?>
    </div>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>