<?php
    include('conexao.php');
    if(empty($_POST['nome']) || empty($_POST['usu']) || empty($_POST['email']) || empty($_POST['senha'])){
        header('Location: Cadastrar.html');
        exit();
    }

    $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
    $usu = mysqli_real_escape_string($conexao, $_POST['usu']);
    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$sql = "INSERT INTO `usuarios`(`nome`, `usu`, `email`, `senha`) 
    VALUES('".$nome."','".$usu."','".$email."','".md5($senha)."')";

    if ($conexao->query($sql) === TRUE) {
        echo "Cadastro finalizado";
    } else {
    echo "Um erro no cadastro: " . $sql . "<br>" . $conexao->error;
    }

    $conexao->close();
?>