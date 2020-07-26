<?php
require_once "conecta.php";
$id = $_GET['id'];
$sql = "SELECT * FROM `clientes` WHERE `id_clientes` = $id";
$clientes = mysqli_query($conexao, $sql);
$id = $_GET['id'];

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
    <h5>Dados do cliente</h5>
    <?php while ($cliente = mysqli_fetch_assoc($clientes)) { ?>
        <div class="card-body text-secondary">
            <label for="">Código Cliente: <?php echo $cliente['id_clientes']; ?> </label><br>
            <label for="">Nome: <?php echo $cliente['nome']; ?></label><br>
            <label for="">CPF: <?php echo $cliente['cpf']; ?></label><br>
            <label for="">Email: <?php echo $cliente['email']; ?></label><br>
            <label for="">Telefone: <?php echo $cliente['telefone']; ?></label>
        </div>
        <p><i>Preencha os dados para alterar os dados do cliente <b><?php echo $cliente['nome']; ?></b></i></p>
    <?php } ?>
    <form method="POST" action="atualiza.php?id=<?php echo $id; ?>">

        <label>Nome completo</label>
        <input type="text" name="nome" class="form-control" style="width: 250px;">

        <label>Email</label>
        <input type="text" name="email" class="form-control" style="width: 250px;">

        <label>CPF</label>
        <input type="number" name="cpf" class="form-control" style="width: 250px;">

        <label>Telefone</label>
        <input type="text" placeholder="(00) 0000-0000" name="telefone" class="form-control" style="width: 250px;">

        <button style="width:150px;" type="submit" name="btnSalvar">Alterar</button>
        </div>

    </form><br>
</body>

</html>