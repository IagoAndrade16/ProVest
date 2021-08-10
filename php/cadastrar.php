<?php include("conexao.php"); ?>

<?php

$senha_usuario = $_POST['senha_usuario'];
$nome_usuario = $_POST['nome_usuario'];
$estado_usuario = $_POST['estado_usuario'];
$email_usuario = $_POST['e_mail_usuario'];
$cidade_usuario = $_POST['cidade_usuario'];
$mysqli = new mysqli($host,$usuario,$senha,$db);

$sql = "INSERT INTO usuarios(senhaU, nomeU, estadoU, emailU, cidadeU) VALUE('${senha_usuario}', '${nome_usuario}', '${estado_usuario}', '${email_usuario}', '${cidade_usuario}');";
mysqli_select_db($mysqli, '$db');  

if (mysqli_query($mysqli, $sql)){
    
    echo  "<script>alert('Conta Criada!'); window.location = '../html/index.html'</script>";

}else{
    
    echo "ERRO NO CADASTRO <br>" . $sql . '<br>' . mysqli_error($mysqli);  //"<script>alert('ERRO NO CADASTRO'); window.location = '../html/cadastro.html' </script>";

}

mysqli_close($mysqli);

?>