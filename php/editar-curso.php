<?php

include('conexao.php');
session_start();
$sessionedi = $_SESSION['code'];

$categoria = $_POST['cat'];
$cat = "";
$celularC = $_POST['celular'];
$cidadeC = $_POST['cidadeU'];
$descricao = $_POST['descricao'];
$endereçoC = $_POST['endereco'];
$estados = $_POST['estadoC'];
$nome = $_POST['Nome'];
$tipoEnsino = $_POST['ens'];
$tipE = "";
$telefC = $_POST['telefone'];


foreach($categoria as $categoriaresult){
    $cat.=$categoriaresult. ","; 
}
$result1 = $mysqli->query("CALL `edcategoria `('$cat');");

foreach($tipoEnsino as $tiporesult){
    $tipE.=$tiporesult. ","; 
}
$result8 = $mysqli->query("CALL `edtipo `('$tipE');");

if (empty($categoria)){
    $edit1 = "UPDATE cursos SET categoria = '$cat' WHERE codU = $sessionedi";
    $result1 = $mysqli->query($edit1);
}
if (empty($celularC)){
    $edit2 = "UPDATE cursos SET celularC = '$celularC' WHERE codU = $sessionedi";
    $result2 = $mysqli->query($edit2);
}
if (empty($descricao)){
    $edit3 = "UPDATE cursos SET descricao = '$descricao' WHERE codU = $sessionedi";
    $result3 = $mysqli->query($edit3);
}
if (empty($cidadeC)){
    $edit4 = "UPDATE cursos SET cidadeC = '$cidadeC' WHERE codU = $sessionedi";
    $result4 = $mysqli->query($edit4);
}
if (empty($endereçoC)){
    $edit5 = "UPDATE cursos SET endereçoC = '$endereçoC' WHERE codU = $sessionedi";
    $result5 = $mysqli->query($edit5);
}
if (empty($estados)){
    $edit6 = "UPDATE cursos SET estados = '$estados' WHERE codU = $sessionedi";
    $result6 = $mysqli->query($edit6);
}
if (empty($nome)){
    $edit7 = "UPDATE cursos SET nome = '$nome' WHERE codU = $sessionedi";
    $result7 = $mysqli->query($edit7);
}
if (empty($tipoEnsino)){
    $edit8 = "UPDATE cursos SET tipoEnsino = '$tipE' WHERE codU = $sessionedi";
    $result8 = $mysqli->query($edit8);
}
if (empty($telefC)){
    $edit9 = "UPDATE cursos SET telefC = '$telefC' WHERE codU = $sessionedi";
    $result9 = $mysqli->query($edit9);
}

?>