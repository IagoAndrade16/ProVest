<?php

include('conexao.php');
session_start();
$session = $_SESSION['code'];

$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];


//FUNÇÃO DE VALIDAR O EMAIL
function ValidarEmail($email)
{
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}

if (!empty($usuario)) {
    $att1 = "UPDATE usuarios SET nomeU = '$usuario' WHERE codU = $session";
    $result1 = $mysqli->query($att1);
    header('Location: ../html/perfil.php');
    session_destroy();
}

if(!empty($email) && ValidarEmail($email)){
    $att2 = "UPDATE usuarios SET emailU = '$email' WHERE codU = $session";
    $result2 = $mysqli->query($att2);
    header('Location: ../html/perfil.php');
    session_destroy();
}else{
    echo "<script>alert('CAMPO E-MAIL INVALIDO'); window.location = '../html/perfil.php'</script>";
}

if (!empty($senha)) {
    $att3 = "UPDATE usuarios SET senhaU = '$senha' WHERE codU = $session";
    $result3 = $mysqli->query($att3);
    header('Location: ../html/perfil.php');
    session_destroy();
}

if (!empty($estado) && $estado != "Estado") {
    $att4 = "UPDATE usuarios SET estadoU = '$estado' WHERE codU = $session";
    $result4 = $mysqli->query($att4);
    header('Location: ../html/perfil.php');
    session_destroy();
}

if (!empty($cidade) && $cidade != "Cidade") {
    $att5 = "UPDATE usuarios SET cidadeU = '$cidade' WHERE codU = $session";
    $result5 = $mysqli->query($att5);
    header('Location: ../html/perfil.php');
    session_destroy();
}

if (isset($_POST["btn-delete"])) {
    $delete = "DELETE FROM usuarios WHERE codU = $session;";
    $result6 = $mysqli->query($delete);
    session_destroy();
}

?>