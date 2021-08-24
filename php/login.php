<?php

session_start();
include("conexao.php");

$senhaU = $_POST['senha'];
$emailU = $_POST['email'];

$credenciais = "SELECT senhaU, emailU, nomeU FROM usuarios WHERE senhaU = '${senhaU}' and emailU = '${emailU}'";

$result = $mysqli->query($credenciais);

$row = $result->num_rows;

if ($row == 1) {
    $linha = $result->fetch_assoc();
    $_SESSION['senha'] = $linha['senhaU'];
    $_SESSION['email'] = $linha['emailU'];
    $_SESSION['nomeUsuario'] = $linha['nomeU'];
    header('Location: ../html/index.php');
    exit();
} else {
    header('Location: ../html/login.html');
}

?>