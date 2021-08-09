<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$db = "test2";

$mysqli = new mysqli($host, $usuario, $senha, $db);

if ($mysqli -> connect_errno)

echo "Erro de conexão com o Banco de Dados (".$mysqli -> connect_errno.")" .$mysqli -> connect_errno;

?>