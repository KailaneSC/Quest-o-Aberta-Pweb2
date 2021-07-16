<?php
    include('conexao.php');
    $sql = "SELECT nome FROM usuarios";
    $resultado = $conexao->query($sql);

    echo 'Lista de usuários cadastrados';
    echo '<br/>';
    echo '<br/>';

    while($row = $resultado->fetch_array()) {
        echo $row['nome'];
        echo '<br/>';
        echo '<br/>';
    }
?>