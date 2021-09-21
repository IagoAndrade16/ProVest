<?php

session_start();
include('conexao.php');
$sessionedi = $_SESSION['code'];

$categoria = $_POST['Categoria'];
$cat = "";
$celularC = addslashes($_POST['celularC']);
$cidadeC = addslashes($_POST['cidade']);
$descricao = addslashes($_POST['descriC']);
$endereçoC = addslashes($_POST['endereC']);
$estados = addslashes($_POST['estado']);
$nome = addslashes($_POST['nomeC']);
$tipoEnsino = $_POST['ensino'];
$tipE = "";
$telefC = addslashes($_POST['tefonC']);

if (isset($_POST['btn-salvar'])) {
    foreach ($categoria as $categoriaresult) {
        $cat .= $categoriaresult . ",";
    }
    $result1 = $mysqli->query("CALL `edcategoria `('$cat');");

    foreach ($tipoEnsino as $tiporesult) {
        $tipE .= $tiporesult . ",";
    }
    $result8 = $mysqli->query("CALL `edtipo `('$tipE');");

    if (!empty($categoria)) {
        $edit1 = "UPDATE cursos SET categoria = '$cat' WHERE codU = $sessionedi";
        $result1 = $mysqli->query($edit1);
    }else{
        $_SESSION['categoria-Inv'] = true;
        header('Location: ../html/editar-curso.php');
    }
    if (!empty($celularC)) {
        $edit2 = "UPDATE cursos SET celularC = '$celularC' WHERE codU = $sessionedi";
        $result2 = $mysqli->query($edit2);
    }else{
        $_SESSION['categoria-Inv'] = true;
        header('Location: ../html/editar-curso.php');
    }
    if (!empty($descricao)) {
        $edit3 = "UPDATE cursos SET descricao = '$descricao' WHERE codU = $sessionedi";
        $result3 = $mysqli->query($edit3);
    }else{
        $_SESSION['categoria-Inv'] = true;
        header('Location: ../html/editar-curso.php');
    }
    if (!empty($cidadeC) && $cidadeC !== "Cidade" ) {
        $edit4 = "UPDATE cursos SET cidadeC = '$cidadeC' WHERE codU = $sessionedi";
        $result4 = $mysqli->query($edit4);
    }else{
        $_SESSION['categoria-Inv'] = true;
        header('Location: ../html/editar-curso.php');
    }
    if (!empty($endereçoC)) {
        $edit5 = "UPDATE cursos SET endereçoC = '$endereçoC' WHERE codU = $sessionedi";
        $result5 = $mysqli->query($edit5);
    }else{
        $_SESSION['categoria-Inv'] = true;
        header('Location: ../html/editar-curso.php');
    }
    if (!empty($estados) && $estados !== "Estado") {
        $edit6 = "UPDATE cursos SET estados = '$estados' WHERE codU = $sessionedi";
        $result6 = $mysqli->query($edit6);
    }else{
        $_SESSION['categoria-Inv'] = true;
        header('Location: ../html/editar-curso.php');
    }
    if (!empty($nome)) {
        $edit7 = "UPDATE cursos SET nome = '$nome' WHERE codU = $sessionedi";
        $result7 = $mysqli->query($edit7);
    }else{
        $_SESSION['categoria-Inv'] = true;
        header('Location: ../html/editar-curso.php');
    }
    if (!empty($tipoEnsino)) {
        $edit8 = "UPDATE cursos SET tipoEnsino = '$tipE' WHERE codU = $sessionedi";
        $result8 = $mysqli->query($edit8);
    }else{
        $_SESSION['categoria-Inv'] = true;
        header('Location: ../html/editar-curso.php');
    }
    if (!empty($telefC)) {
        $edit9 = "UPDATE cursos SET telefC = '$telefC' WHERE codU = $sessionedi";
        $result9 = $mysqli->query($edit9);
    }else{
        $_SESSION['categoria-Inv'] = true;
        header('Location: ../html/editar-curso.php');
    }
}
if(isset($_POST['btn-Nsalvar'])){
    header("Location: ../html/editar-curso.php");
}

?>