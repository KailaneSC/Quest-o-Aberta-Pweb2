<?php
    include('conexao.php');
    if(empty($_POST['usu']) || empty($_POST['senha'])){
        header('Location: Login.html');
        exit();
    }

    $usu = mysqli_real_escape_string($conexao, $_POST['usu']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);

    $sql = "SELECT usu, senha FROM usuarios WHERE 
    usu='".$usu."' and senha='".md5($senha)."'";

    $result = mysqli_query($conexao, $sql);

    $cont = mysqli_num_rows($result);

    if($cont == 1) {
        echo "Login realizado";
        header("Location: list.php");
    }else{
        echo "Dados inválidos";
    }
?>