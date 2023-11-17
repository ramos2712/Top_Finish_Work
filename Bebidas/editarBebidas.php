<?php
include_once("../conecta.php");

$idBebida = $_GET['editarBebida'];

$sql = "SELECT * FROM bebidas WHERE idbebida=" . $idBebida;

$resultado = mysqli_query($conexao, $sql);
$dados = mysqli_fetch_assoc($resultado);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Bebida</title>
</head>
<body>
    
<div class="container">
    <h1> Editar Bebida </h1>
    <hr>
    <div class="row">
    <form action="processaBebidas.php" method="POST">
        <input type="hidden" name="idBebida" value="<?php echo $idBebida; ?>" />

        <div class="form-group">
        <label> Nome </label>
        <input class="form-control" type="text" name="nomeBebida" value="<?php echo $dados['nome_bebida']; ?>" required="required"/> <br>
        </div>

        <div class="form-group">
        <label> Volume </label>
        <input class="form-control" type="text" name="volumeBebida" value="<?php echo $dados['litro_bebida']; ?>" required="required"/> <br>
        </div>

        <div class="form-group">
        <label> Valor </label>
        <input class="form-control" type="text" name="valorBebida" value="<?php echo $dados['valor_bebida']; ?>" required="required"/> <br>
        </div>


        <div class="form-group">
        <button class="btn btn-success" type="submit" name="editarBebida"> Editar </button>
        </div>

    </form>
    </div>

</body>
</html>