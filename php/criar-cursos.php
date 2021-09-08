<?php

try {
    session_start();
    $sessionC = $_SESSION['code'];
    include('conexao.php');

    $chkbox = $_POST['hob'];
    $chk = "";
    $nome = $_POST['nome'];
    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $celular = $_POST['celular'];
    $tipo = $_POST['ensino'];
    $tip = "";
    $descricao = $_POST['descricao'];

    foreach ($chkbox as $chkboxresult) {
        $chk .= $chkboxresult . ",";
    }
    $result1 = $mysqli->query("CALL `spcategoria `('$chk');");

    foreach ($tipo as $tiporesult) {
        $tip .= $tiporesult . ",";
    }
    $result1 = $mysqli->query("CALL `sptipo `('$tip');");


    if (empty($_POST['hob'])) {
        $_SESSION['hobCursoV'] = true;
        throw new Exception("<script>window.location = '../html/criar-curso.php'</script>");
    }
    if (empty($_POST['nome'])) {
        $_SESSION['nomeCursoV'] = true;
        throw new Exception("<script>window.location = '../html/criar-curso.php'</script>");
    }
    if (empty($_POST['estado']) || $estado === "Estado") {
        $_SESSION['estadoCursoV'] = true;
        throw new Exception("<script>window.location = '../html/criar-curso.php'</script>");
    }
    if (empty($_POST['cidade']) || $cidade === "Cidade") {
        $_SESSION['cidadeCursoV'] = true;
        throw new Exception("<script>window.location = '../html/criar-curso.php'</script>");
    }
    if (empty($_POST['endereco'])) {
        $_SESSION['enderecoCursoV'] = true;
        throw new Exception("<script>window.location = '../html/criar-curso.php'</script>");
    }
    if (empty($_POST['telefone'])) {
        $_SESSION['telefoneCursoV'] = true;
        throw new Exception("<script>window.location = '../html/criar-curso.php'</script>");
    }
    if (empty($_POST['celular'])) {
        $_SESSION['celularCursoV'] = true;
        throw new Exception("<script>window.location = '../html/criar-curso.php'</script>");
    }
    if (empty($_POST['ensino'])) {
        $_SESSION['ensinoCursoV'] = true;
        throw new Exception("<script>window.location = '../html/criar-curso.php'</script>");
    }
    if (empty($_POST['descricao'])) {
        $_SESSION['descricaoCursoV'] = true;
        throw new Exception("<script>window.location = '../html/criar-curso.php'</script>");
    }

    $criarCurso = "INSERT INTO cursos(categoria, celularC, cidadeC, codU, descricao, endereçoC, estados, nome, tipoEnsino, telefC) VALUE('$chk','$celular','$cidade', $sessionC, '$descricao', '$endereco', '$estado', '$nome', '$tip', '$telefone');";
    $result1 = $mysqli->query($criarCurso);
    header('Location:../html/navegacao.php');
} catch (Exception $e) {
    echo $e->getMessage();
}
