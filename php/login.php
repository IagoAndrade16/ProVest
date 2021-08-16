<?php

session_start();

include("conexao.php");

$senhaU = addslashes($_POST['senha']);
$emailU = addslashes($_POST['email-de-usuario']);

$credenciais = "SELECT senhaU, emailU FROM usuarios WHERE senhaU = '${senhaU}'and emailU = '${emailU}'";

$result = mysqli_query($mysqli, $credenciais);
$row = mysqli_num_rows($result);

if ($row == 1) {
    $_SESSION['senha'] = $senhaU;
    $_SESSION['email-de-usuario'] = $emailU;
    header('Location: ../html/index.html');

} else {
    header('Location: ../html/login.html');
    exit();

}
