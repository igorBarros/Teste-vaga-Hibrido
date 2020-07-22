<?php
require_once "conecta.php";

$sql = "SELECT * FROM `clientes`";
$clientes = mysqli_query($conexao, $sql);

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
    <a href="index.php">Pagina Inicial</a> <br><br>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Código Cliente</th>
                <th scope="col">Nome</th>
                <th scope="col">CPF</th>
                <th scope="col">Email</th>
                <th scope="col">Telefone</th>
                <th scope="col">Ação</th>

            </tr>
        </thead>
        <?php while($cliente = mysqli_fetch_assoc($clientes)){ ?>

        <tbody>
            <td> <?php echo $cliente['id_clientes'] ?></td>
            <td> <?php echo $cliente['nome'] ?></td>
            <td> <?php echo $cliente['cpf'] ?></td>
            <td> <?php echo $cliente['email'] ?></td>
            <td> <?php echo $cliente['telefone'] ?></td>
            <td>
            <?php
            $id = $cliente['id_clientes'];
            echo "<a href=excluirCliente.php?id=".$id.">Excluir cliente</a>";?> <br>
            <?php
            echo "<a href=alterarCliente.php?id=".$id.">Alterar cadastro</a>";
            ?>
            </td>
        </tbody>

        <?php } ?>
    </table>
</body>

</html>