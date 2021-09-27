<?php

session_start();
include("conexao.php");

$senhaU = addslashes($_POST['senha']);
$emailU = addslashes($_POST['email']);

$credenciais = "SELECT codU, estadoU, senhaU, emailU, nomeU, cidadeU FROM usuarios WHERE senhaU = MD5('${senhaU}') and emailU = '${emailU}'";

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

    $imCodC = "SELECT codC FROM cursos";
    $conecCod = $mysqli->query($imCodC);
    $linhaCodU = $conecCod->fetch_assoc();

    $_SESSION['codC'] = $linhaCodU['codC'];
    $codC = $_SESSION['codC'];

    $importC = "SELECT categoria, nome, estados, cidadeC, endereçoC, telefC, celularC, tipoEnsino, descricao FROM cursos WHERE codU = '$sessionC' and codC = '$codC';";
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
    $_SESSION['cursos_ERRO'] = true;
    $_SESSION['incorreto'] = true;
    header('Location: ../html/login.php');
}
