<?php
include "conectar.php";
$conexao = conectar();
$sobremesa = json_decode(file_get_contents("php://input")); //pega os dados crus e transforma em um objeto

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $sql = "INSERT INTO sobremesas (nome_sobremesa, tipo_sobremesa, valor_sobremesa) 
    VALUES ('$sobremesa->nome_sobremesa', '$sobremesa->tipo_sobremesa' , '$sobremesa->valor_sobremesa')";
    $result = mysqli_query($conexao, $sql);

    if ($result == true) {
        $sobremesa->id_sobremesa = mysqli_insert_id($conexao); //retorna o último id gerado
        echo json_encode($sobremesa);
    } else {
        die("Erro ao Cadastrar Sobremesa. Erro: " . mysqli_errno($conexao) . " " . mysqli_error($conexao));
    }
} else if ($_SERVER['REQUEST_METHOD'] == "PUT"){
    $sql = "UPDATE sobremesas 
    SET nome_sobremesa='$sobremesa->nome_sobremesa', tipo_sobremesa='$sobremesa->tipo_sobremesa', valor_sobremesa='$sobremesa->valor_sobremesa' 
    WHERE id_sobremesa='$sobremesa->id_sobremesa'";
    $result = mysqli_query($conexao, $sql);

    if ($result == true) {
        echo json_encode($sobremesa);
    } else {
        die("Erro ao Editar Sobremesa. Erro: " . mysqli_errno($conexao) . " " . mysqli_error($conexao));
    }
}