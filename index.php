<?php
require_once "conecta.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Teste Hibrido</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>

  <p><i>Para cadastrar um novo cliente, preencha o formulario abaixo;</i></p>
  <form method="POST" action="salvaUsuario.php">

    <label>Nome completo</label>
    <input type="text" name="nome" class="form-control" style="width: 250px;">

    <label>Email</label>
    <input type="text" name="email" class="form-control" style="width: 250px;">

    <label>CPF</label>
    <input type="number" name="cpf" class="form-control" style="width: 250px;">

    <label>Telefone</label>
    <input type="text" placeholder="(00) 0000-0000" name="telefone" class="form-control" style="width: 250px;">

    <button style="width:150px;" type="submit" class="btn btn-primary" name="btnSalvar">Salvar</button>
    </div>

  </form><br>
  <a href="consultaCliente.php">Consultar Clientes cadastrados</a>

</body>

</html>