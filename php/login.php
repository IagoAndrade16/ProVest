<?php

session_start();

try {

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
        throw new Exception("<script>alert('LOGIN INCORRETO'); window.location = '../html/login.html'</script>");
        //header('Location: ../html/login.html');
        exit();
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
