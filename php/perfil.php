<?php

include('conexao.php');

session_start();

$session = $_SESSION['code'];

$usuario = addslashes($_POST['usuario']);
$email = addslashes($_POST['email']);
$senha = addslashes($_POST['senha']);
$estado = addslashes($_POST['estado']);
$cidade = addslashes($_POST['cidade']);


//FUNÇÃO DE VALIDAR O EMAIL
function ValidarEmail($email)
{
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}
if (isset($_POST['salvar'])) {

    $linha1 = $usuario;
    $linha2 = $email;
    $linha3 = $senha;
    $linha4 = $estado;
    $linha5 = $cidade;

    $result1 = $linha1;
    $result2 = $linha2;
    $result3 = $linha3;
    $result4 = $linha4;
    $result5 = $linha5;

    if (!empty($usuario)) {
        $att1 = "UPDATE usuarios SET nomeU = '$usuario' WHERE codU = $session";
        $result1 = $mysqli->query($att1);
        session_destroy();
        header('Location: ../html/perfil.php');
    } else {
        $_SESSION['userInvalid'] = true;
        header('Location: ../html/perfil.php');
    }


    if (!empty($email) && ValidarEmail($email)) {
        $att2 = "UPDATE usuarios SET emailU = '$email' WHERE codU = $session";
        $result2 = $mysqli->query($att2);
        session_start();
        session_destroy();
        header('Location: ../html/perfil.php');
    } else {
        $_SESSION['invalid'] = true;
        header("Location: ../html/perfil.php");
    }

    if (!empty($senha)) {
        $att3 = "UPDATE usuarios SET senhaU = MD5('$senha') WHERE codU = $session";
        $result3 = $mysqli->query($att3);
        session_destroy();
        header('Location: ../html/perfil.php');
    } else {
        $_SESSION['passInvalid'] = true;
        header("Location: ../html/perfil.php");
    }


    if (!empty($estado) && $estado != "Estado") {
        $att4 = "UPDATE usuarios SET estadoU = '$estado' WHERE codU = $session";
        $result4 = $mysqli->query($att4);
        session_destroy();
        header('Location: ../html/perfil.php');
    } else {
        $_SESSION['estaInvalid'] = true;
        header("Location: ../html/perfil.php");
    }
}

if (!empty($cidade) && $cidade != "Cidade") {
    $att5 = "UPDATE usuarios SET cidadeU = '$cidade' WHERE codU = $session";
    $result5 = $mysqli->query($att5);
    header('Location: ../html/perfil.php');
} else {
    $_SESSION['cidadInvalid'] = true;
    header("Location: ../html/perfil.php");
}

if (isset($_POST["btn-delete"])) {
    $delete = "DELETE FROM usuarios WHERE codU = $session;";
    $result6 = $mysqli->query($delete);
    header("Location: ../html/login.php");
    session_destroy();
    exit();
}

if (isset($_POST['salvarfoto'])) {
    if (isset($_FILES['arquivo'])) {

        $extensao = strtolower(substr($_FILES['arquivo']['name'], -5)); //pega a extensao do arquivo
        $novo_nome = md5(time()) . $extensao; //define o nome do arquivo
        $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo
        move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio . $novo_nome); //efetua o upload

        $inseriFoto = "UPDATE usuarios SET imgU = '$novo_nome' WHERE codU = $session; ";
        $result = $mysqli->query($inseriFoto);
        session_destroy();
    }
}
