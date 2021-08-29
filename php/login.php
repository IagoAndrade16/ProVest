<?php

session_start();
include("conexao.php");

$senhaU = $_POST['senha'];
$emailU = $_POST['email'];

$credenciais = "SELECT codU, estadoU, senhaU, emailU, nomeU, cidadeU FROM usuarios WHERE senhaU = '${senhaU}' and emailU = '${emailU}'";

$result = $mysqli->query($credenciais);

$row = $result->num_rows;

if ($row == 1) {
    $linha = $result->fetch_array();
    $_SESSION['code'] = $linha['codU'];
    $_SESSION['senha'] = $linha['senhaU'];
    $_SESSION['email'] = $linha['emailU'];
    $_SESSION['estado'] = $linha['estadoU'];
    $_SESSION['cidadeUsuario'] = $linha['cidadeU'];
    $_SESSION['nomeUsuario'] = $linha['nomeU'];
    header('Location: ../html/index.php');
    exit();
} else {
    header('Location: ../html/login.html');
}

?>