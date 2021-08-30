<?php

session_start();
include("conexao.php");
$sesseion = $_SESSION['code'];
$senhaU = $_POST['senha'];
$emailU = $_POST['email'];

$credenciais = "SELECT codU, estadoU, senhaU, emailU, nomeU, cidadeU FROM usuarios WHERE senhaU = '${senhaU}' and emailU = '${emailU}'";
$credenciais1 = "SELECT categoria, celularC, cidadeC, descricao, endereçoC, estados, nome, tipoEnsino, telefC FROM cursos WHERE codU = $sesseion";

$result = $mysqli->query($credenciais);
$result1 = $mysqli->query($credenciais1);

$row = $result->num_rows;

if ($row == 1) {
    $linha = $result->fetch_array();
    $linha1 = $result1->fetch_array();
    $_SESSION['code'] = $linha['codU'];
    $_SESSION['senha'] = $linha['senhaU'];
    $_SESSION['email'] = $linha['emailU'];
    $_SESSION['estado'] = $linha['estadoU'];
    $_SESSION['cidadeUsuario'] = $linha['cidadeU'];
    $_SESSION['nomeUsuario'] = $linha['nomeU'];
    /*SESSÕES CURSOS*/
    $_SESSION['categoria'] = $linha1['categoria'];
    $_SESSION['celular'] = $linha1['celularC'];
    $_SESSION['cidade'] = $linha1['cidadeC'];
    $_SESSION['descricao'] = $linha1['descricao'];
    $_SESSION['endereco'] = $linha1['endereçoC'];
    $_SESSION['estado'] = $linha1['estados'];
    $_SESSION['nome'] = $linha1['nome'];
    $_SESSION['tipo'] = $linha1['tipoEnsino'];
    $_SESSION['phon'] = $linha1['telefC'];
    header('Location: ../html/index.php');
    exit();
} else {
    header('Location: ../html/login.html');
}
