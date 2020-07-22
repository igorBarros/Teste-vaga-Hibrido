<?php
require_once "conecta.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];

if (empty($nome)) { ?>
    <script>
        alert('O campo Nome deve ser preenchido');
        window.location.replace("index.php");
    </script>
<?php } elseif (empty($email)) { ?>
    <script>
        alert('O campo Email deve ser preenchido');
        window.location.replace("index.php");
    </script>
<?php } elseif (empty($cpf)) { ?>
    <script>
        alert('O campo CPF deve ser preenchido');
        window.location.replace("index.php");
    </script>
<?php } else {
    $sql = "INSERT INTO `clientes` (`nome`, `email`, `cpf`, `telefone`) VALUES('$nome', '$email', '$cpf', '$telefone')";
    $novoCliente = mysqli_query($conexao, $sql);
}

if ($novoCliente) {
    echo "Cliente cadastrado com sucesso!"; ?>
    <a class="form-control" href="index.php">OK</a>
<?php
} else {
    echo "Tente novamente";
}
?>