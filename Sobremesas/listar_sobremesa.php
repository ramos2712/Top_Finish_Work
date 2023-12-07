<?php
include_once ("conectar.php");
$conexao = conectar();
$sql = "SELECT * FROM sobremesas ORDER BY id_sobremesa ASC";
$resultado = mysqli_query($conexao, $sql);

if($resultado == true){
    $sobremesa = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
    echo json_encode($sobremesa);
} else {
    die("Erro ao Listar Sobremesas" . mysqli_errno($conexao) . ": " . mysqli_error($conexao));
}
?>