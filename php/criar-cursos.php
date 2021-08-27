<?php

include('conexao.php');

$nome = $_POST['Nome'];
$PréENEM = $_POST['Pré-ENEM'];
$PréVestibular = $_POST['Pré-Vestibular'];
$ConcursosMilitares = $_POST['Concursos Militares'];
$ConcursosPúblicos = $_POST['Concursos Públicos'];
$Outro = $_POST['Outro'];
$Presencial = $_POST['Presencial'];
$OnLine = $_POST['On-line'];
$Estado = $_POST['Estado'];
$descricao = $_POST['descricao'];
$Cidade = $_POST['Cidade'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];

$sql = "INSERT INTO cursos(categoria, nome, estados, cidadeC, endereçoC, telefC, celularC, tipoEnsino, descricao) VALUE('{}', '{}', '{}', '{}', '{}', '{}', '{}', '{}', '{}');";






?>