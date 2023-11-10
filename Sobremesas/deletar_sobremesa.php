<?php
include_once("conectar.php");
$conectar = conectar();

$id_sobremesa = $_GET['id_sobremesa'];
$sql = "DELETE FROM sobremesas WHERE id_sobremesa=$id_sobremesa";
$resultado = mysqli_query($conectar, $sql);

if($resultado == true){
    echo '{"ID":"' . $id_sobremesa . '"}';
} else {
    die("Erro ao Deletar Sobremesa" . mysqli_errno($conectar) . ": " . mysqli_error($conectar));
}

?>