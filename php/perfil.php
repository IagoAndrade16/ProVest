<?php

include('conexao.php');
session_start();
$session = $_SESSION['code'];

$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];

if (!empty($usuario)){
    $att1 = "UPDATE usuarios SET nomeU = '$usuario' WHERE codU = $session";
    $result1 = $mysqli->query($att1);
    header('Location: ../html/perfil.php');
}
if (!empty($email)) {
    $att2 = "UPDATE usuarios SET emailU = '$email' WHERE codU = $session";
    $result2 = $mysqli->query($att2);
    header('Location: ../html/perfil.php');
}
if (!empty($senha)){
    $att3 = "UPDATE usuarios SET senhaU = '$senha' WHERE codU = $session";
    $result3 = $mysqli->query($att3);
    header('Location: ../html/perfil.php');
}
if(!empty($estado) && $estado != "Estado"){
    $att4 = "UPDATE usuarios SET estadoU = '$estado' WHERE codU = $session";
    $result4 = $mysqli->query($att4);
    header('Location: ../html/perfil.php');
}

if (!empty($cidade) && $cidade != "Cidade"){
    $att5 = "UPDATE usuarios SET cidadeU = '$cidade' WHERE codU = $session";
    $result5 = $mysqli->query($att5);
    header('Location: ../html/perfil.php');

}

?>
