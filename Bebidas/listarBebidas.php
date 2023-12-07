<?php
include_once("../conecta.php");
include_once('processaBebidas.php');

    // Seleciona todos os dados da tabela categorias 
    $sql = "SELECT * FROM bebidas";

    // Executa o Select
    $resultado = mysqli_query($conexao, $sql);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Bebidas</title>
</head>
<body>
    
<div class="container">
<hr>
<h3 class="container p-3 my-3 text-center" style="color: green;"> Lista de Bebidas </h3>
  <table class="table table-bordered">
    <thead  class="thead-light">
            <tr>
                <th class="text-center"> <b>Nome</b> </th>
                <th class="text-center"> <b>Volume</b> </th>
                <th class="text-center"> <b>Valor</b> </th>
                <th class="text-center" colspan="3"> <b>Opções</b> </th>
            </tr>
    </thead>
        <?php while ($dados = mysqli_fetch_assoc($resultado)) : ?>  
            <tr>
                    <td> <?php echo $dados['nome_bebida']; ?> </td>
                    <td> <?php echo $dados['litro_bebida']; ?> </td>
                    <td> <?php echo $dados['valor_bebida']; ?> </td>

                    <td class="text-center"> <a href="editarBebidas.php?editarBebida=<?php echo $dados['id_bebida']; ?>">
                        <img height='25' width='25' src='../img/edit.png'> </a> 
                    </td>
                    <td class="text-center"> <a href="processaBebidas.php?deletarBebida=<?php echo $dados['id_bebida']; ?>">
                        <img height='25' width='25' src='../img/delet.png' /> </a>
                    </td>
        </tr>

    </div>
    <?php endwhile; ?>
        </table>

</body>
</html>