<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <title>Cadastrar Pratos Principais</title>
</head>
<body style="background-image: url('../img/');background-size:cover; background-repeat:no-repeat; background-attachment: fixed;">
    <div class="container-sm mt-3 p-3 w-50 text-center bg-info border rounded shadow">
        <div class="row text-center">
            <div class="col">
                <p class="mt-2 h3"><i>Cadastrar Pratos Principais</i></p>
            </div>
            <div class="col">
                <button class="btn btn-light m-2"><a href="VisuPratos.php" class="text-decoration-none text-dark">Voltar</a></button>
            </div>
        </div>
        <hr>
        <form action="ProcessaPratos.php" method="POST">
            <div class="form-group">
                <label> <b>Nome do Prato :</b> </label>
                <input type="text" name="nome_prato" class="form-input m-3 rounded" /> 
            </div>
            <div class="form-radio m-2">
                <label class="form-check-label m-2"> <b>Categoria :</b> </label> <br>
                <label><input type="radio" name="categoria_prato" class="form-check-input m-1" value="vegetariano"/>Vegetariano</label> <br>
                <label><input type="radio" name="categoria_prato" class="form-check-input m-1" value="premium" />Premium</label> <br>
                <label><input type="radio" name="categoria_prato" class="form-check-input m-1" value="jantar" />Jantar</label> <br>
                <label><input type="radio" name="categoria_prato" class="form-check-input m-1" value="almoço" />Almoço</label>
            </div>
            <div class="form-group">
                <label> <b>Valor :</b> </label>
                <input type="text" name="valor_prato" id="valor" class="form-input m-3 rounded"> 
            </div>
                <button class="btn btn-light mt-5" type="submit" name="cadastrar" class="form-input">Cadastrar</button>
        </form>
    </div>
</body>
</html>
<script>
    $(document).ready(function () {
    $('#valor').mask("R$ ##0,00")
    });
</script>
