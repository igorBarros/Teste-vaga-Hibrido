<?php
require_once "conecta.php";
$id = $_GET['id'];
 
$sql = "DELETE FROM `clientes` WHERE `id_clientes` = $id";
$excluir = mysqli_query($conexao, $sql);

if ($excluir) {
    echo "Cliente excluido com sucesso!"; ?>
    <a class="form-control" href="consultaCliente.php">OK</a>
<?php
} else {
    echo "Tente novamente";
}
?>