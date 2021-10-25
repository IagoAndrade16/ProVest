<?php

try {
    session_start();
    $sessionC = $_SESSION['code'];
    include('conexao.php');

    $chkbox = $_POST['hob'];
    $chk = "";
    $nome = htmlspecialchars(addslashes($_POST['nome']));
    $estado = htmlspecialchars(addslashes($_POST['estado']));
    $cidade = htmlspecialchars(addslashes($_POST['cidade']));
    $endereco = htmlspecialchars(addslashes($_POST['endereco']));
    $telefone = htmlspecialchars(addslashes($_POST['telefone']));
    $celular = htmlspecialchars(addslashes($_POST['celular']));
    $tipo = $_POST['ensino'];
    $tip = "";
    $descricao = htmlspecialchars(addslashes($_POST['descricao']));

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

    if (isset($_FILES['arquivo'])) {

        $extensao = strtolower(substr($_FILES['arquivo']['name'], -5)); //pega a extensao do arquivo
        $novo_nome = md5(time()) . $extensao; //define o nome do arquivo
        $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo

        move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio . $novo_nome); //efetua o upload

    }

    $criarCurso = "INSERT INTO cursos(categoria, celularC, cidadeC, codU, descricao, endereçoC, fotoPerfilC, estados, nome, tipoEnsino, telefC, dataInscriçãoC, horaInscriçãoC) VALUE('$chk','$celular','$cidade', $sessionC, '$descricao', '$endereco', '$novo_nome', '$estado', '$nome', '$tip', '$telefone', NOW(), NOW());";
    $result1 = $mysqli->query($criarCurso);
    header('Location:../html/navegacao.php');
} catch (Exception $e) {
    echo $e->getMessage();
}
