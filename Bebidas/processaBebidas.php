<?php
include ("../conecta.php");

if (isset($_POST['cadastrarBebida'])) {
    $nomeBebida = $_POST['nomeBebida'];
    $volumeBebida = $_POST['volumeBebida'];
    $valorBebida = $_POST['valorBebida'];

    $sql = "INSERT INTO bebidas (nome_bebida, litro_bebida, valor_bebida) VALUES ('$nomeBebida', '$volumeBebida', '$valorBebida')"; 
   
    $result = mysqli_query($conexao, $sql);
    header("Location:listarBebidas.php");
}

if (isset($_POST['editarBebida'])) {
    $idBebida = $_POST['idBebida'];
    $nomeBebida = $_POST['nomeBebida'];
    $volumeBebida = $_POST['volumeBebida'];
    $valorBebida = $_POST['valorBebida'];

    $sql = "UPDATE bebidas SET nome_bebida='$nomeBebida' litro_bebida='$volumeBebida' valor_bebida='$valorBebida' WHERE id_bebida=$idBebida";

    $result = mysqli_query($conexao, $sql);
    header("Location:listarBebidas.php");
}

if (isset($_GET['deletarBebida'])) {
    $idBebida = $_GET['deletarBebida'];

    $sql = "DELETE FROM bebidas WHERE id_bebida=$idBebida";

    $result = mysqli_query($conexao, $sql);
    header("Location:listarBebidas.php");
}