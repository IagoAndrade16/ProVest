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

    $row1 = $result1->num_rows;
    $row2 = $result2->num_rows;
    $row3 = $result3->num_rows;
    $row4 = $result4->num_rows;
    $row5 = $result5->num_rows;

    if ($row1 == 0) {

        if (!empty($usuario)) {
            $att1 = "UPDATE usuarios SET nomeU = '$usuario' WHERE codU = $session";
            $result1 = $mysqli->query($att1);
            session_destroy();
            header('Location: ../html/perfil.php');
        } else {
            $_SESSION['userInvalid'] = true;
            header('Location: ../html/perfil.php');
        }
    }
    if ($row1 == 0) {
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
    }
    if ($row1 == 0) {
        if (!empty($senha)) {
            $att3 = "UPDATE usuarios SET senhaU = '$senha' WHERE codU = $session";
            $result3 = $mysqli->query($att3);
            session_destroy();
            header('Location: ../html/perfil.php');
        } else {
            $_SESSION['passInvalid'] = true;
            header("Location: ../html/perfil.php");
        }
    }
    if ($row1 == 0) {
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
    if ($row1 == 0) {
        if (!empty($cidade) && $cidade != "Cidade") {
            $att5 = "UPDATE usuarios SET cidadeU = '$cidade' WHERE codU = $session";
            $result5 = $mysqli->query($att5);
            header('Location: ../html/perfil.php');
        } else {
            $_SESSION['cidadInvalid'] = true;
            header("Location: ../html/perfil.php");
        }
    }
} elseif (isset($_POST["btn-delete"])) {
    $delete = "DELETE FROM usuarios WHERE codU = $session;";
    $result6 = $mysqli->query($delete);
    header("Location: ../html/login.php");
    session_destroy();
    exit();
}
