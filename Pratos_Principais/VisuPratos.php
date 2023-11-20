<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Lista de Pratos Principais</title>
</head>
<body>
<div class="container-sm my-5 p-3 text-center bg-info border rounded shadow">
    <?php include_once('ProcessaPratos.php');
    $sql = "SELECT * FROM pratos_principais";
    $resultado = mysqli_query($conexao, $sql);
    $qtLinhas = mysqli_num_rows($resultado);
    ?>
    <div class="row mt-2 text-center mx-auto">
        <div class="col-12">
            <p class="p-3 h3 shadow bg-light rounded"><i>Lista de Pratos Principais</i></p>
        </div>
        <div class="col-6 mt-3">
            <button class="btn btn-light m-2"><a href="CadPratos.php" class="text-decoration-none text-dark">Cadastrar Pratos</a></button>
        </div>
        <div class="col-6 mt-3">
            <button class="btn btn-light m-2"><a href="../Bebidas/listarBebidas.php" class="text-decoration-none text-dark">Bebidas</a></button>
        </div>
    </div>
    <hr>
    <?php if($qtLinhas > 0) : ?>
    <div class='rounded table-responsive text-center m-3'>
		<table class='table table-light table-hover shadow'>
            <thead class='table-light text-bg-light'>
                <tr>
                    <th> Nome do Prato</th>
                    <th> Categoria </th>
                    <th> Valor </th>
                    <th colspan="2"> Opções </th>
                </tr>
            </thead>
            <tbody>
            <?php while ($dados = mysqli_fetch_assoc($resultado)) : ?>
                <tr>
                <td> <?php echo $dados['nome_prato']; ?> </td>
                <td> <?php echo $dados['categoria_prato']; ?> </td>
                <td> <?php echo $dados['valor_prato']; ?> </td>
                <td>
                    <a href="EditPratos.php?editar=<?php echo $dados['id_pratos']; ?>">
                        <img height='24' width='24' src='../img/edit.png'> </a>
                </td>
                <td>
                    <a href="ProcessaPratos.php?deletar=<?php echo $dados['id_pratos']; ?>">
                        <img height='24' width='24' src='../img/del.png' /> </a>
                </td>
            </tr>
            <?php endwhile; ?>
        <?php else :
            print "<p class='alert alert-danger m-3'>Ainda Não Há Pratos Castrados!</p>";
        ?>
        <?php endif; ?>
        </tbody>
    </table>
    </div>
</div>
</body>
</html>