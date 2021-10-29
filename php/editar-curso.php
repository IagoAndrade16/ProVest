<?php

session_start();
include('conexao.php');
$sessionedi = $_SESSION['code'];

$categoria = $_POST['Categoria'];
$cat = "";
$celularC = htmlspecialchars(addslashes($_POST['celularC']));
$cidadeC = htmlspecialchars(addslashes($_POST['cidade']));
$descricao = htmlspecialchars(addslashes($_POST['descriC']));
$endereçoC = htmlspecialchars(addslashes($_POST['endereC']));
$estados = htmlspecialchars(addslashes($_POST['estado']));
$nome = htmlspecialchars(addslashes($_POST['nomeC']));
$tipoEnsino = $_POST['ensino'];
$tipE = "";
$telefC = htmlspecialchars(addslashes($_POST['tefonC']));
$linkC = htmlspecialchars(addslashes($_POST['link']));
$emailC = htmlspecialchars(addslashes($_POST['emailC']));

if (isset($_POST['salvarfoto'])) {
    if (isset($_FILES['arquivo'])) {

        $extensao = strtolower(substr($_FILES['arquivo']['name'], -5)); //pega a extensao do arquivo
        $novo_nome = md5(time()) . $extensao; //define o nome do arquivo
        $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo
        move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio . $novo_nome); //efetua o upload

        $inseriFoto = "UPDATE cursos SET fotoPerfilC = '$novo_nome' WHERE codU = $sessionedi; ";
        $result = $mysqli->query($inseriFoto);
        header("Location: ../html/perfil.php");
    }
}

if (isset($_POST['btn-salvar'])) {

    if (!empty($categoria) || !empty($tipoEnsino)) {
        foreach ($categoria as $categoriaresult) {
            $cat .= $categoriaresult . ",";
        }
        $result1 = $mysqli->query("CALL `edcategoria `('$cat');");

        foreach ($tipoEnsino as $tiporesult) {
            $tipE .= $tiporesult . ",";
        }
        $result8 = $mysqli->query("CALL `edtipo `('$tipE');");
    } else {
        $_SESSION['categoria-Inv'] = true;
        header('Location: ../html/editar-curso.php');
    }

    if (!empty($categoria)) {
        $edit1 = "UPDATE cursos SET categoria = '$cat' WHERE codU = $sessionedi";
        $result1 = $mysqli->query($edit1);
        header('Location: ../html/perfil.php');
    }
    if (!empty($celularC)) {
        $edit2 = "UPDATE cursos SET celularC = '$celularC' WHERE codU = $sessionedi";
        $result2 = $mysqli->query($edit2);
        header('Location: ../html/perfil.php');
    }
    if (!empty($descricao)) {
        $edit3 = "UPDATE cursos SET descricao = '$descricao' WHERE codU = $sessionedi";
        $result3 = $mysqli->query($edit3);
        header('Location: ../html/perfil.php');
    }
    if (!empty($cidadeC) && $cidadeC !== "Cidade") {
        $edit4 = "UPDATE cursos SET cidadeC = '$cidadeC' WHERE codU = $sessionedi";
        $result4 = $mysqli->query($edit4);
        header('Location: ../html/perfil.php');
    }
    if (!empty($endereçoC)) {
        $edit5 = "UPDATE cursos SET endereçoC = '$endereçoC' WHERE codU = $sessionedi";
        $result5 = $mysqli->query($edit5);
        header('Location: ../html/perfil.php');
    }
    if (!empty($estados) && $estados !== "Estado") {
        $edit6 = "UPDATE cursos SET estados = '$estados' WHERE codU = $sessionedi";
        $result6 = $mysqli->query($edit6);
        header('Location: ../html/perfil.php');
    }
    if (!empty($nome)) {
        $edit7 = "UPDATE cursos SET nome = '$nome' WHERE codU = $sessionedi";
        $result7 = $mysqli->query($edit7);
        header('Location: ../html/perfil.php');
    }
    if (!empty($tipoEnsino)) {
        $edit8 = "UPDATE cursos SET tipoEnsino = '$tipE' WHERE codU = $sessionedi";
        $result8 = $mysqli->query($edit8);
        header('Location: ../html/perfil.php');
    }
    if (!empty($telefC)) {
        $edit9 = "UPDATE cursos SET telefC = '$telefC' WHERE codU = $sessionedi";
        $result9 = $mysqli->query($edit9);
        header('Location: ../html/perfil.php');
    }
    if (!empty($linkC)) {
        $edit10 = "UPDATE cursos SET links = '$linkC' WHERE codU = $sessionedi";
        $result10 = $mysqli->query($edit10);
        header('Location: ../html/perfil.php');
    }
    if (!empty($emailC)) {
        $edit11 = "UPDATE cursos SET emailC = '$emailC' WHERE codU = $sessionedi";
        $result11 = $mysqli->query($edit11);
        header('Location: ../html/perfil.php');
    }
}
if (isset($_POST['btn-Nsalvar'])) {
    header("Location: ../html/editar-curso.php");
}
