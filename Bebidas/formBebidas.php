<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Bebidas</title>
</head>
<body style="background-color: #48D1CC;">

<div class="container">
        <br>
        <h1> Cadastrar uma Bebida </h1>
        <hr>
        <div class="row">

        <form action="processaBebidas.php" method="POST">

                <div class="form-group">
                    <label> Nome:</label>
                    <input class="form-control" type="text" name="nomeBebida" required="required" />
                </div>

                <div class="form-group">
                    <label> Volume:</label>
                    <input class="form-control" type="text" name="volumeBebida" placeholder="Ex: 400ml, 1L, ..." required="required" />
                </div>

                <div class="form-group">
                    <label> Valor:</label>
                    <input class="form-control" type="text" name="valorBebida" id="valor" required="required" />
                </div>

                <BR>
                
                <div class="form-group">
                    <button class="btn btn-light" href="formCate.php" type="submit" name="cadastrarBebida"> Cadastrar </button>
                </div>

                <script>
                $(document).ready(function () {
                $('#valor').mask("R$ ##0,00")
                });
                </script>

            </form>
        </div>

        <hr>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="visuCategorias.php">Lista de Categorias</a></li>
                <li class="breadcrumb-item active" aria-current="page">Cadastrar</li>
            </ol>
        </nav>
</body>
</html>