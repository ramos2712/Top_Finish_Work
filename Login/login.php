<!DOCTYPE html>
<html lang="pt-BR">
    <HEAD>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>   
        <title>Página de Login</title>
    </HEAD>
    <BODY style="background-color: #FFDAB9;">          
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header mx-auto text-center" >                            
                        <a href="#"><img src="../smile.jpg" alt="logo" class="img-fluid mb-3 w-25"></a>
                        <div class="text-center">
                            <h3>Entrar</h3>
                            <h6>Realize seu login para acessar</h6>
                        </div>
                    </div>
                    <div class="card-body">
                        <form class="card-form text-center" action="testLogin.php" method="POST">
                            <div class="form-group m-3">
                                <label for="username">CPF:</label>
                                <input type="text" class="form-control w-50 mx-auto" name="CPF" id="CPF" placeholder="Digite seu CPF">
                            </div>
                            <div class="form-group m-3">
                                <label for="password">Senha:</label>
                                <input type="password" class="form-control w-50 mx-auto" name="senha" placeholder="Digite sua senha">
                            </div>
                            <button type="submit" class="btn btn-primary mt-3 p-3">Entrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </BODY>
    <script>
        $(document).ready(function () {
            $('#CPF').inputmask({
                mask: '999.999.999-99',
            });
        });
    </script>
</html>