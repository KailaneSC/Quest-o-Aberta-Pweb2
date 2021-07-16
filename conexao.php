<?php
$nome = "localhost";
$bancod = "BANCOA1";
$usuario = "root";
$senha = "";

$conexao = new mysqli($nome, $usuario,$senha, $bancod);

if($conexao->connect_error){
  die("Ocorreu um erro de conexão ". $conexao->connect_error);
}
?>