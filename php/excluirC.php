<?php

session_start();
include("conexao.php");

$codU = $_SESSION['code'];

if (isset($_POST['excluirCursoIn'])){
    $lixo = "DELETE FROM cursos WHERE codU = $codU ;";
    $resultlixo = $mysqli->query($lixo);
    header("Location: ../html/perfil.php");
}

?>