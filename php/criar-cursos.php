<?php

include('conexao.php');

$nome = $_POST['Nome'];
$préENEM = $_POST['Pré-ENEM'];
$préVestibular = $_POST['Pré-Vestibular'];
$concursosMilitares = $_POST['Concursos Militares'];
$concursosPúblicos = $_POST['Concursos Públicos'];
$outro = $_POST['Outro'];
$presencial = $_POST['Presencial'];
$onLine = $_POST['On-line'];
$estado = $_POST['Estado'];
$descricao = $_POST['descricao'];
$cidade = $_POST['Cidade'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];

$sql = "INSERT INTO cursos(categoria, nome, estados, cidadeC, endereçoC, telefC, celularC, tipoEnsino, descricao) VALUE('{}', '{}', '{}', '{}', '{}', '{}', '{}', '{}', '{}');";






?>