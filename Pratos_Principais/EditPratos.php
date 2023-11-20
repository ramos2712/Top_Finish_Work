<?php
include_once("../conecta.php");
$ID = $_GET['editar'];
$sql = "SELECT * FROM pratos_principais WHERE id_prato=" . $ID;
$resultado = mysqli_query($conexao, $sql);
$dados = mysqli_fetch_assoc($resultado);
?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <title>Editar Prato Principal</title>
</head>
<body style="background-image: url('../img/');background-size:cover; background-repeat:no-repeat; background-attachment: fixed;">
<div class="container-sm mt-3 p-3 w-50 text-center bg-info border rounded shadow">
        <div class="row">
            <div class="col">
                <p class="mt-2 h3"> <i>Editar Pratos Principais</i> </p>
            </div>
            <div class="col">
                <button class="btn btn-light m-2"><a href="VisuPratos.php" class="text-decoration-none text-dark">Voltar</a></button>
            </div>
        </div>
        <hr>
        <form action="ProcessaPratos.php" method="POST">
            <input type="hidden" name="id_prato" value="<?php echo $dados['id_prato']; ?>" />
            <div class="form-group">
                <label> <b>Nome do Prato:</b> </label>
                <input type="text" name="nome_prato" class="form-input m-3 rounded" value="<?php echo $dados['nome_prato']; ?>" /> 
            </div>
            <div class="form-radio m-2">
                <label class="form-check-label m-2"> <b>Categoria :</b> </label> <br>
                <label> <input type="radio" name="categoria_prato" class="form-check-input m-1" value="vegetariano" <?php if ($dados['categoria_prato'] == "vegetariano") echo "checked"; ?>/>Vegetariano</label><br>
                <label><input type="radio" name="categoria_prato" class="form-check-input m-1" value="premium" <?php if ($dados['categoria_prato'] == "premium") echo "checked"; ?> />Premium</label><br>
                <label><input type="radio" name="categoria_prato" class="form-check-input m-1" value="jantar" <?php if ($dados['categoria_prato'] == "jantar") echo "checked"; ?>/>Jantar</label><br>
                <label><input type="radio" name="categoria_prato" class="form-check-input m-1" value="almoço" <?php if ($dados['categoria_prato'] == "almoço") echo "checked"; ?>/>Almoço</label>
            </div>
            <div class="form-group">
                <label> <b>Valor :</b> </label>
                <input type="text" name="valor_prato" id="valor" class="form-input m-3 rounded" value="<?php echo $dados['participantes']; ?>" /> 
            </div>
                <button class="btn btn-light mt-5" type="submit" name="editar" class="form-input">Editar</button>
        </form>
    </div>
</body>
</html>
<script>
    $(document).ready(function () {
    $('#valor').mask("R$ ##0,00")
    });
</script>