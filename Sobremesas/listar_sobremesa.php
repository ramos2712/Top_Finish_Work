<?php
include_once("conectar.php");
$conexao = conectar();

$sql = "SELECT * FROM sobremesas ORDER BY id_sobremesa ASC";
$resultado = mysqli_query($conexao, $sql);

if ($resultado) {
    $sobremesas = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
    echo json_encode($sobremesas);
} else {
    http_response_code(500); // Define o código de resposta HTTP 500 para indicar um erro interno do servidor
    echo json_encode(array("message" => "Erro ao listar sobremesas.", "error" => mysqli_error($conexao)));
}

mysqli_close($conexao);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <title>Lista de Sobremesas</title>
</head>
<body style="background-image: url(https://i.ytimg.com/vi/aaa9JSwe4J4/maxresdefault.jpg); background-size: cover;">
    <div class="container-xl rounded p-4 text-bg-danger text-center mt-3" style="opacity: 0.8;width: 60%;">
        <p class="p-3 h4 rounded shadow text-light">Lista de Sobremesas</p>
        <div class='rounded table-responsive text-center m-3 mx-auto'>
            <table class="table table-light table-hover shadow">
                <thead class="table-info">
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Tipo</th>
                        <th>Valor</th>
                        <th colspan="2">Ações</th>
                    </tr>
                </thead>
                <tbody id="sobremesas">
                </tbody>
            </table>
        </div>
        <script>
            function editar(evt) {
                let id_sobremesa = evt.currentTarget.paramId_sobremesa;
                let tbody = document.getElementById("sobremesas");
                for (const tr of tbody.children) {
                    if (tr.children[0].innerHTML == id_sobremesa) {
                        let id_sobremesa = document.getElementsByName("id_sobremesa")[0];
                        let nome_sobremesa = document.getElementsByName("nome_sobremesa")[0];
                        let tipo_sobremesa = document.getElementsByName("tipo_sobremesa")[0];
                        let valor_sobremesa = document.getElementsByName("valor_sobremesa")[0];

                        id_sobremesa.value = tr.children[0].innerHTML;
                        nome_sobremesa.value = tr.children[1].innerHTML;
                        tipo_sobremesa.value = tr.children[2].innerHTML;
                        valor_sobremesa.value = tr.children[3].innerHTML;
                    }
                }
            }
            function excluir(evt) {
                let excluir = confirm("Tem certeza que deseja excluir a Sobremesa ?");
                if (excluir == true) {
                    let id_sobremesa = evt.currentTarget.paramId_sobremesa;
                    fetch("deletar_sobremesa.php?id_sobremesa=" + id_sobremesa, {
                        method: "GET",
                        headers: { 'Content-type': "application/json; charset=UTF-8" }
                    })
                        .then(response => response.json())
                        .then(sobremesa => excluirSobremesa(sobremesa))
                        .catch(error => console.log(error));
                }
            }

            function listarTodos() {
                fetch("listar_sobremesa.php", {
                    method: "GET",
                    headers: { 'Content-type': "application/json; charset=UTF-8" }
                })
                    .then(response => response.json())
                    .then(sobremesas => inserirSobremesas(sobremesas))
                    .catch(error => console.log(error));
            }
            function inserirSobremesas(sobremesas) {
                for (const sobremesa of sobremesas) {
                    inserirSobremesa(sobremesa);
                }
            }
            
            document.addEventListener("DOMContentLoaded", () => { listarTodos(); });
        </script>
    </div>
</body>
</html>