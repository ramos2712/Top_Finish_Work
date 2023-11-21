<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <title>Cadastro de Sobremesa</title>
</head>
<body style="background-image: url(https://i.ytimg.com/vi/aaa9JSwe4J4/maxresdefault.jpg); background-size: cover;">
    <div class="container-xl rounded p-4 text-bg-danger text-center mt-5" style="opacity: 0.8;width: 60%;">
        <form id="form" onsubmit="return salvarSobremesa(event);">
            <p class="p-3 h4 rounded shadow text-light">Cadastrar Sobremesa</p>
            <div class="form-group">
                <input type="hidden" name="id_sobremesa">
                <label for="nome_sobremesa" class="h5 m-2 mt-3">Nome da Sobremesa : </label>
                <input type="text" placeholder="Informe o nome da sobremesa" id="nome_sobremesa" name="nome_sobremesa"
                    class="form-control text-center w-75 mx-auto">

                <label for="tipo_sobremesa" class="h5 m-2 mt-3">Tipo de Sobremesa :</label>
                <input type="text" placeholder="Informe o tipo de sobremesa" id="tipo_sobremesa" name="tipo_sobremesa"
                    class="form-control text-center w-75 mx-auto">

                <label for="valor_sobremesa" class="h5 m-2 mt-3">Valor da Sobremesa :</label>
                <input type="text" placeholder="Informe o valor da sobremesa" id="valor" name="valor_sobremesa"
                    class="form-control text-center w-75 mx-auto">

                <input type="submit" class="btn btn-success text-center mt-3 p-2" value="Salvar Sobremesa">
            </div>
        </form>
    </div>
</body>
<script>
    $(document).ready(function () {
        $('#valor').mask("R$ ##0,00")
    });
</script>