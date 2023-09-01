<?php
/*  session_start();
    if(EMPTY($_SESSION)){
      print "<script>location.href='index.php';</script>";
    }
    */
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <title>Editar cadastro</title>
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
            <a class="nav-link" aria-current="page" href="inicio.php">Início</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cadastrar.php">Cadastrar itens</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="exibir.php">Exibir itens</a>
          </li>
      </div>
       <a class="btn btn-danger" href="logout.php">Sair</a>
    </div>
  </div>
</nav>

<?php

  include('config2.php');

  $sql = "SELECT * FROM itens WHERE id=".$_REQUEST["id"];

  $res = $conn->query($sql);
  $row = $res->fetch_object();

?>

<section class="vh-100 gradient-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2">Editar itens</h2>
              <p class="text-white-50 mb-5">Faça as alterações necessárias dos itens e clique em alterar:</p>
              <form action="?page=salvar" method="POST">
                <input type="hidden" name="acao" value="editar">
                <input type="hidden" name="id" value="<?php print $row->id; ?>">
                <div class="form-outline form-white mb-6">
                  <input type="text" name="nome" value="<?php print $row->nome; ?>" class="form-control form-control-lg" required/>
                  <label class="form-label" for="nome">nome</label>
                </div>
  
                <div class="form-outline form-white mb-6">
                  <input type="text" name="tipo" value="<?php print $row->tipo; ?>" class="form-control form-control-lg" />
                  <label class="form-label" for="tipo">Tipo do item</label>
                </div>

                <div class="form-outline form-white mb-6">
                  <input type="date" name="entrada" value="<?php print $row->entrada; ?>" class="form-control form-control-lg" required/>
                  <label class="form-label" for="entrada">Data de entrada</label>
                </div>

                <div class="form-outline form-white mb-6">
                  <input type="number" name="quantidade" value="<?php print $row->quantidade; ?>" class="form-control form-control-lg" required/>
                  <label class="form-label" for="quantidade">quantidade</label>
                </div>
                
                <div class="form-outline form-white mb-6">
                  <input type="text" name="destino" value="<?php print $row->destino; ?>" class="form-control form-control-lg" required/>
                  <label class="form-label" for="destino">onde será guardado?</label>
                </div>
  
                <button class="btn btn-outline-light btn-lg px-5" type="submit">Alterar</button>
              </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>