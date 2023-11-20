<?php
include_once('../conecta.php');

if (isset($_POST['cadastrar'])) {
    $nome_prato = $_POST['nome_prato'];
    $categoria_prato = $_POST['categoria_prato'];
    $valor_prato = $_POST['valor_prato'];

    $sql = "INSERT INTO pratos_principais (nome_prato, categoria_prato, valor_prato) VALUES ('$nome_prato','$categoria_prato', '$valor_prato')";
    mysqli_query($conexao, $sql);
    header("Location:VisuPratos.php");
}

if (isset($_POST['editar'])) {
    $id_prato = $_POST['id_prato'];
    $nome_prato = $_POST['nome_prato'];
    $categoria_prato = $_POST['categoria_pratp'];
    $valor_prato = $_POST['valor_prato'];

    $sql = "UPDATE pratos_principais 
    SET nome_prato='$nome_prato', categoria_prato='$categoria_prato', valor_prato ='$valor_prato' 
    WHERE id_prato=$id_prato";
    mysqli_query($conexao, $sql);
    header("Location:VisuPratos.php");
}

if (isset($_GET['deletar'])) {
    $ID = $_GET['deletar'];

    $sql = "DELETE FROM pratos_principais WHERE id_prato=$ID";
    mysqli_query($conexao, $sql);
    header("Location:VisuPratos.php");
}
?>