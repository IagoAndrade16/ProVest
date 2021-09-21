<?php include("conexao.php");
session_start();

try {

    $senha_usuario = addslashes($_POST['senha_usuario']);
    $nome_usuario = addslashes($_POST['nome_usuario']);
    $estado_usuario = addslashes($_POST['estado_usuario']);
    $email_usuario = addslashes($_POST['e_mail_usuario']);
    $cidade_usuario = addslashes($_POST['cidade_usuario']);
    $mysqli = new mysqli($host, $usuario, $senha, $db);

    //FUNÇÃO DE VALIDAR O EMAIL
    function ValidarEmail($email_usuario)
    {
        if (filter_var($email_usuario, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            return false;
        }
    }

    //VALIDAÇÃO NOME
    if (empty($_POST['senha_usuario'])) {
        $_SESSION['senhaV'] = true;
        throw new Exception("<script>window.location = '../html/cadastro.php'</script>");
    }
    if (!empty($_POST['nome_usuario'])) {
        if (strlen($_POST['nome_usuario']) < 3) {
            $_SESSION['letras'] = true;
            throw new Exception("<script>window.location = '../html/cadastro.php'</script>");
        }
    } else {
        $_SESSION['vazio'] = true;
        throw new Exception("<script>window.location = '../html/cadastro.php'</script>");
    }

    //VALIDAÇÃO ESTADO
    if (empty($_POST['estado_usuario']) || $estado_usuario == "Estado") {
        $_SESSION['eu'] = true;
        throw new Exception("<script>window.location = '../html/cadastro.php'</script>");
    }

    //VALIDAÇÃO EMAIL
    if (empty($email_usuario)) {
        $_SESSION['vazio_em'] = true;
        throw new Exception("<script>window.location = '../html/cadastro.php'</script>");
    } elseif (!ValidarEmail($email_usuario)) {
        $_SESSION['valida'] = true;
        throw new Exception("<script>window.location = '../html/cadastro.php'</script>");
    }

    //VALIDAÇÃO CIDADE
    if (empty($_POST['cidade_usuario']) || $cidade_usuario == "Cidade") {
        $_SESSION['ci'] = true;
        throw new Exception("<script>window.location = '../html/cadastro.php'</script>");
    }

    //COMANDO QUE PEGA OS DADOS DO CAMPO CADASTRO
    $sql = "INSERT INTO usuarios(senhaU, nomeU, estadoU, emailU, cidadeU) VALUE(MD5('${senha_usuario}'), '${nome_usuario}', '${estado_usuario}', '${email_usuario}', '${cidade_usuario}');";
    mysqli_select_db($mysqli, '$db');

    if (mysqli_query($mysqli, $sql)) {
        echo "<script>window.location = '../html/login.php'</script>";
    } else {
        $_SESSION['erro'] = true;
        echo "<script>window.location = '../html/cadastro.php' </script>";
    }

    mysqli_close($mysqli);
} catch (Exception $e) {
    echo $e->getMessage();
}
