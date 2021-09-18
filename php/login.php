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

    $sessionC = $_SESSION['code'];

    $importC = "SELECT categoria, nome, estados, cidadeC, endereçoC, telefC, celularC, tipoEnsino, descricao FROM cursos WHERE codU = '${sessionC}';";
    $conec = $mysqli->query($importC);

    $lin = $conec->fetch_array();

    $_SESSION['categoriaC'] = $lin['categoria'];
    $_SESSION['nomeC'] = $lin['nome'];
    $_SESSION['estadoC'] = $lin['estados'];
    $_SESSION['cidadeC'] = $lin['cidadeC'];
    $_SESSION['enderecoC'] = $lin['endereçoC'];
    $_SESSION['telefoneC'] = $lin['telefC'];
    $_SESSION['celularC'] = $lin['celularC'];
    $_SESSION['tipoE'] = $lin['tipoEnsino'];
    $_SESSION['descriC'] = $lin['descricao'];

    header('Location: ../html/navegacao.php');
    exit();
} else {
    $_SESSION['incorreto'] = true;
    header('Location: ../html/login.php');
}
