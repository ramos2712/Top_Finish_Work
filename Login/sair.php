<?php
    session_start();
    unset($_SESSION['CPF']);
    unset($_SESSION['senha']);
    header('Location: login.php');
?>