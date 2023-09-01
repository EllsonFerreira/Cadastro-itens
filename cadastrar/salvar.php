<?php

  include('config2.php');

  switch($_REQUEST["acao"]) {
    case 'cadastrar':
      $nome = $_POST["nome"];
      $tipo = $_POST["tipo"];
      $entrada = $_POST["entrada"];
      $quantidade = $_POST["quantidade"];
      $destino = $_POST["destino"];

      $sql = "INSERT INTO itens (nome, tipo, entrada, quantidade, destino) VALUES ('{$nome}', '{$tipo}', '{$entrada}', '{$quantidade}', '{$destino}')";

      $res = $conn->query($sql);

      if ($res==true) {
        print "<script>alert('Cadastro realizado com sucesso!');</script>";
        print "<script>location.href='?page=exibir';</script>";
        
      }else {
        print "<script>alert('Não foi possível cadastrar!');</script>";
        print "<script>location.href='?page=exibir';</script>";
        
      }
    break;

    case 'editar':
      $nome = $_POST["nome"];
      $tipo = $_POST["tipo"];
      $entrada = $_POST["entrada"];
      $quantidade = $_POST["quantidade"];
      $destino = $_POST["destino"];

      $sql = "UPDATE itens SET 
                nome= '{$nome}',
                tipo= '{$tipo}',
                entrada= '{$entrada}',
                quantidade= '{$quantidade}',
                destino= '{$destino}'
              WHERE
                  id=".$_REQUEST["id"];

      $res = $conn->query($sql);

      if ($res==true) {
        print "<script>alert('Cadastro editado com sucesso!');</script>";
        print "<script>location.href='?page=exibir';</script>";
        
      }else {
        print "<script>alert('Não foi possível editar!');</script>";
        print "<script>location.href='?page=exibir';</script>";
        
      }
    break;
    
    case 'excluir':
      $sql = "DELETE FROM itens WHERE id=".$_REQUEST["id"];

      $res = $conn->query($sql);

      if ($res==true) {
        print "<script>alert('Cadastro excluído com sucesso!');</script>";
        print "<script>location.href='?page=exibir';</script>";
        
      }else {
        print "<script>alert('Não foi possível excluir!');</script>";
        print "<script>location.href='?page=exibir';</script>";
        
      }
    break;
  }

?>