<?php

include('conexao.php');
$session = session_start();

$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];

if (!empty($usuario)){
    $att1 = "UPDATE usuarios SET nomeU = '$usuario' WHERE codU = 19";
    $result1 = $mysqli->query($att1);
}
if (!empty($email)) {
    $att2 = "UPDATE usuarios SET emailU = '$email' WHERE codU = 19";
    $result2 = $mysqli->query($att2);
}
if (!empty($senha)){
    $att3 = "UPDATE usuarios SET senhaU = '$senha' WHERE codU = 19";
    $result3 = $mysqli->query($att3);
}
if(!empty($estado) && $estado != "Estado"){
    $att4 = "UPDATE usuarios SET estadoU = '$estado' WHERE codU = 19";
    $result4 = $mysqli->query($att4);
}

if (!empty($cidade) && $cidade != "Cidade"){
    $att5 = "UPDATE usuarios SET cidadeU = '$cidade' WHERE codU = 19";
    $result5 = $mysqli->query($att5);

}

?>
