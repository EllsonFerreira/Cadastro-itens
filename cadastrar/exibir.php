<?php
/*  session_start();
    if(EMPTY($_SESSION)){
      print "<script>location.href='index.php';</script>";
    }
    */
?>

<div class="container">
  <div class="row">
    <div class="col mt-5">
      <?php
          print "<h1>Exibir itens</h1>";
      ?>
    </div>
  </div>
</div>

<?php

  include('config2.php');

  $sql = "SELECT * FROM itens";
  
  $res = $conn->query($sql);

  $qtd = $res->num_rows;

  if ($qtd > 0) {
    print "<table class='table table-hover table-dark table-striped-columms table-bordered'>";
    print "<tr>";
    print "<th>#</th>";
    print "<th>Nome</th>";
    print "<th>Categoria</th>";
    print "<th>Data de entrada</th>";
    print "<th>Quantidade</th>";
    print "<th>Local de destino</th>";
    print "<th>Ações</th>";
    print "</tr>";
    while($row = $res->fetch_object()) {
      print "<tr>";
      print "<td>".$row->id."</td>";
      print "<td>".$row->nome."</td>";
      print "<td>".$row->tipo."</td>";
      print "<td>".$row->entrada."</td>";
      print "<td>".$row->quantidade."</td>";
      print "<td>".$row->destino."</td>";
      print "<td>
              <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>Editar</button>
              
              <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" class='btn btn-danger'>Excluir</button>
            </td>";
      print "</tr>";
    }
    print "</table>";
  }else {
    print "<p class='alert-danger'> Não encontrou resultados!</p>";
  }
?>