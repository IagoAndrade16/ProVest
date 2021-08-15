<?php include("conexao.php");

$senha_usuario = addslashes($_POST['senha_usuario']);
$nome_usuario = addslashes($_POST['nome_usuario']);
$estado_usuario = addslashes($_POST['estado_usuario']);
$email_usuario = addslashes($_POST['e_mail_usuario']);
$cidade_usuario = addslashes($_POST['cidade_usuario']);
$mysqli = new mysqli($host, $usuario, $senha, $db);

$sql = "INSERT INTO usuarios(senhaU, nomeU, estadoU, emailU, cidadeU) VALUE('{$senha_usuario}', '${nome_usuario}', '${estado_usuario}', '${email_usuario}', '${cidade_usuario}');";
mysqli_select_db($mysqli, '$db');

if (mysqli_query($mysqli, $sql)) {
    echo "<script>alert('Conta Criada!'); window.location = '../html/login.html'</script>";

} else {
    echo "<script>alert('ERRO NO CADASTRO'); window.location = '../html/cadastro.html' </script>";
    
}

mysqli_close($mysqli);

?>