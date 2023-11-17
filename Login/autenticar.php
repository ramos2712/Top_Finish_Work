<?php
    session_start();
    //print_r($_SESSION);
    if((!isset($_SESSION['CPF']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['CPF']);
        unset($_SESSION['senha']);
        header('Location: ../Login/login.php');
    }
?>