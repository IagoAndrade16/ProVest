<?php

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

foreach($chkbox as $chkboxresult){
    $chk.=$chkboxresult. ","; 
}
$result1 = $mysqli->query("CALL `spcategoria `('$chk');");

foreach($tipo as $tiporesult){
    $tip.=$tiporesult. ","; 
}
$result1 = $mysqli->query("CALL `sptipo `('$tip');");

$criarCurso = "INSERT INTO cursos(categoria, celularC, cidadeC, codU, descricao, endereçoC, estados, nome, tipoEnsino, telefC) VALUE('$chk','$celular','$cidade', $sessionC, '$descricao', '$endereco', '$estado', '$nome', '$tip', '$telefone');";
$result1 = $mysqli->query($criarCurso);
header('Location:../html/navegacao.php');


?>