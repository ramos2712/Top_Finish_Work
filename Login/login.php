<!DOCTYPE html>
<html lang="pt-BR">
    <HEAD>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>   
        <link rel="stylesheet" href="login.css">
        <title>Página de Login</title>
    </HEAD>
    <BODY class="card-container">
        <div class="login-card">
            <div class="card-logo">
                <a href="#"><img src="#" alt="logo"></a>
            </div>
            <div class="card-header">
                <h1>Entrar</h1>
                <div>Realize seu login para acessar</div> 
            </div>
            <form class="card-form" action="testLogin.php" method="POST">
                <div class="form-item"> 
                    CPF : <input type="text" name="CPF" id="CPF" placeholder="Digite seu CPF" required>
                </div>
                <div class="form-item">
                    Senha : <input type="password" name="senha" placeholder="Digite sua Senha" required>
                </div>
                <button class="action_btn" type="submit" name="submit">Entrar</button>
            </form>
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