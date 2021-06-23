<?php

  $nome=$_REQUEST["nome"];
  $telefone=$_REQUEST["Telefone"];
  session_start();
  $_SESSION["n"]=$_POST["nome"];
  $_SESSION["t"]=$_POST["Telefone"];

  echo "<a href='QueA2.php'> Clique aqui</a>";
?>