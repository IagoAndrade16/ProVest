<?php include("conexao.php");

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
        throw new Exception("<script>alert('CAMPO SENHA NÃO PREENCHIDO'); window.location = '../html/cadastro.html'</script>");
    }
    if (!empty($_POST['nome_usuario'])) {
        if (strlen($_POST['nome_usuario']) < 3) {
            throw new Exception("<script>alert('NOME COM MENOS DE 3 CARACTERS'); window.location = '../html/cadastro.html'</script>");
        }
    } else {
        throw new Exception("<script>alert('CAMPO NOME NÃO PREENCHIDO'); window.location = '../html/cadastro.html'</script>");
    }

    //VALIDAÇÃO ESTADO
    if ($_POST['estado_usuario'] == "Estado") {
        echo "<script>alert('CAMPO ESTADO NÃO SELECIONADO'); window.location = '../html/cadastro.html'</script>";
    }

    //VALIDAÇÃO EMAIL
    if (empty($email_usuario)) {
        throw new Exception("<script>alert('CAMPO E-MAIL NÃO PREENCHIDO'); window.location = '../html/cadastro.html'</script>");
    } elseif (!ValidarEmail($email_usuario)) {
        throw new Exception("<script>alert('CAMPO E-MAIL INVALIDO'); window.location = '../html/cadastro.html'</script>");
    }

    //VALIDAÇÃO CIDADE
    if ($_POST['cidade_usuario'] == "Cidade") {
        echo "<script>alert('CAMPO CIDADE NÃO SELECIONADO'); window.location = '../html/cadastro.html'</script>";
    }

    //COMANDO QUE PEGA OS DADOS DO CAMPO CADASTRO
    $sql = "INSERT INTO usuarios(senhaU, nomeU, estadoU, emailU, cidadeU) VALUE('${senha_usuario}', '${nome_usuario}', '${estado_usuario}', '${email_usuario}', '${cidade_usuario}');";
    mysqli_select_db($mysqli, '$db');

    if (mysqli_query($mysqli, $sql)) {
        echo "<script>alert('Conta Criada!'); window.location = '../html/login.html'</script>";
    } else {
        echo "<script>alert('ERRO NO CADASTRO'); window.location = '../html/cadastro.html' </script>";
    }

    mysqli_close($mysqli);
} catch (Exception $e) {
    echo $e->getMessage();
}

?>