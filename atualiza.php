<?php
require_once "conecta.php";

$id = $_GET['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];

if (empty($nome)) { ?>
    <script>
        alert('O campo Nome deve ser preenchido');
        window.location.replace("consultaCliente.php");
    </script>
<?php } elseif (empty($email)) { ?>
    <script>
        alert('O campo Email deve ser preenchido');
        window.location.replace("consultaCliente.php");
    </script>
<?php } elseif (empty($cpf)) { ?>
    <script>
        alert('O campo CPF deve ser preenchido');
        window.location.replace("consultaCliente.php");
    </script>
<?php } else {
$sql = "UPDATE `clientes` SET `nome` = '$nome', `email` = '$email', `cpf` = '$cpf', `telefone` = '$telefone' WHERE `id_clientes` = $id";
$atualiza = mysqli_query($conexao, $sql);
}
if ($atualiza) {
    echo "Cadastro atualizado com sucesso!"; ?>
    <a class="form-control" href="consultaCliente.php">OK</a>
<?php
} else {
    echo "Tente novamente";
}
?>