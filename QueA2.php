<?php

  session_start();

  echo "Nome:" . $_SESSION["n"] . "<br>";
  echo "Telefone:" . $_SESSION["t"];
?>