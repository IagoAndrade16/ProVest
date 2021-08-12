<?php

session_start();

include("conexao.php");

$senhaU = mysqli_real_escape_string($mysqli, $_POST['senha']);
$emailU = mysqli_real_escape_string($mysqli, $_POST['email-de-usuario']);

$credenciais = "SELECT senhaU, emailU FROM usuarios WHERE senhaU = '${senhaU}'and emailU = '${emailU}'";

$result = mysqli_query($mysqli, $credenciais);
$row = mysqli_num_rows($result);

if ($row == 1) {
    $_SESSION['senha'] = $senhaU;
    $_SESSION['email-de-usuario'] = $emailU;
    header('Location: ../html/index.php');
    exit();

} else {
    header('Location: ../html/login.html');
    exit();

}
