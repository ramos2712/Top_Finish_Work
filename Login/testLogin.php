<?php
    session_start();
    if(isset($_POST['submit']) && !empty($_POST['CPF']) && !empty($_POST['senha']) )
    {
        include_once('../conecta.php');
        $CPF = $_POST['CPF'];
        $CPF = str_replace(['.', '-'], '', $CPF); 
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM usuarios WHERE CPF = '$CPF' and senha = '$senha'";
        $result = mysqli_query($conexao, $sql);

        if(mysqli_num_rows($result) < 1)
        {
            print_r('Usuário não encontrado no sistema');
            unset($_SESSION['CPF']);
            unset($_SESSION['senha']);
            header('Location: login.php');
        } else {
            while($login = mysqli_fetch_assoc($result))
            {
                if($login['nivel'] == 'admin'){
                    $_SESSION['CPF'] = $CPF;
                    $_SESSION['senha'] = $senha;
                    header('Location: ../Sobremesas/index_sobremesa.html');
                } 
                elseif($login['nivel'] == 'funcionario') {
                    $_SESSION['CPF'] = $CPF;
                    $_SESSION['senha'] = $senha;
                    header('Location: ../Bebidas/formBebidas.php');
                }
            }
        }
    } else {
        header('Location: login.php');
    }
?>