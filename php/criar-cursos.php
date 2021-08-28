<?php
session_start();
include('conexao.php');

//$categoria = $_POST['categoria'];
$nome = $_POST['nome'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];
//$tipo = $_POST['ensino'];
$descricao = $_POST['descricao'];

$criarCurso = "INSERT INTO cursos(nome, estados, cidadeC, endereçoC, telefC, celularC, descricao) VALUE('$nome', '$estado', '$cidade', '$endereco', '$telefone', '$celular', '$descricao')";
$result = $mysqli->query($criarCurso);

$row = $result->num_rows;

if ($row == 1){
    header('Location: ../html/index.php');
    
}else{
    var_dump($row);
    echo "<script>alert('Cadastro Invalido');</script>";
    
}

?>
