<?php
include("conexao.php");

if (!isset($_GET['pesquisa'])) {
    header("Location: ../html/navegacao.php");
    exit();
}

$pesquisa = addslashes($_GET['pesquisa']);

$sqlpesquisa = "SELECT * FROM cursos WHERE categoria LIKE '%$pesquisa%'";
$resut = $mysqli->query($sqlpesquisa);

$linha = $resut->fetch_all();
/*
echo "<pre>";
print_r($linha)
*/

?>

<?php
session_start();
include("../php/verifica_login.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="refresh" content="60">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/b21197af3e.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../img/LogoProVest.ico" type="image/x-icon">
    <title>ProVest | Home</title>
</head>

<body>
    <!--Barra de navegação-->
    <br>
    <br>
    <br>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <!-- Logo -->
            <a class="navbar-brand" href="../html/navegacao.php">
                <img src="../img/logoProVest.png
        " alt="logo - ProVest" width="50px" height="50px" class="img-fluid" style="margin-right: 10px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Form e botao pesquisar -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <form action="../php/pesquisa.php" class="d-flex">
                        <input class="form-control me-3" type="search" name="pesquisa" placeholder="Pesquise por cursos" aria-label="Search">
                        <button class="btn btn-outline-light">Pesquisar</button>
                    </form>
                </ul>

                <a class="navbar-brand" href="../html/criar-curso.php">
                    Cadastrar Curso
                </a>

                <!-- Foto e nome do perfil -->
                <a class="navbar-brand" href="../html/perfil.php">
                    <!--<i class="fa fa-user" aria-hidden="true"></i>-->
                    <img width="45px" height="45px" style="border-radius: 100px; object-fit: cover;" src="<?php echo("../php/upload/" . $_SESSION['fotoU']); ?>">
                    <?php echo $_SESSION['nomeUsuario']; ?>
                    <a class="navbar-brand" style="text-decoration: none; color: #fff;" href="../php/logout.php">Sair</a>
                </a>

            </div>
        </div>
    </nav>

    <div class="container px-0">
        <div class="row gx-5">
            <div class="col">
                <div class="p-3">
                    <h4>Resultado da Buscas</h4>
                </div>
            </div>
        </div>
    </div>


    <!-- Cartoes sobre os cursos-->
    <div class="container px-0">
        <div class="row">
            <?php

            if (count($linha)) {
                foreach ($linha as $linha) {

            ?>
                    <div class="col-md-4">
                        <div class="p-3">
                            <div class="card" style="width: 15rem;">
                                <img src="<?php echo ("../php/upload/" . $linha[9]); ?>" class="card-img-top" alt="foto curso">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $linha[3]; ?></h5>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="green" class="bi bi-book" viewBox="0 0 16 16">
                                                <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                                            </svg>
                                            <?php echo $linha[2]; ?>
                                        </li>
                                        <li class="list-group-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="green" class="bi bi-map" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M15.817.113A.5.5 0 0 1 16 .5v14a.5.5 0 0 1-.402.49l-5 1a.502.502 0 0 1-.196 0L5.5 15.01l-4.902.98A.5.5 0 0 1 0 15.5v-14a.5.5 0 0 1 .402-.49l5-1a.5.5 0 0 1 .196 0L10.5.99l4.902-.98a.5.5 0 0 1 .415.103zM10 1.91l-4-.8v12.98l4 .8V1.91zm1 12.98 4-.8V1.11l-4 .8v12.98zm-6-.8V1.11l-4 .8v12.98l4-.8z" />
                                            </svg>
                                            <?php echo $linha[5]; ?>
                                        </li>
                                        <li class="list-group-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="green" class="bi bi-laptop" viewBox="0 0 16 16">
                                                <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z" />
                                            </svg>
                                            <?php echo $linha[10]; ?>
                                        </li>
                                    </ul>
                                    <a href="../html/ver-curso.php?nomeC=<?php echo $linha[3]; ?>&enderecoC=<?php echo $linha[6]; ?>&telefoneC=<?php echo $linha[7]; ?>&celular=<?php echo  $linha[8]; ?>&tipo=<?php echo $linha[10]; ?>&categoria=<?php echo $linha[2]; ?>&descricao=<?php echo $linha[11]; ?>&fotoC=<?php echo ("../php/upload/" . $linha[9]); ?>" class="btn btn-dark">Ver curso</a>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php
                }
            } else {
                ?>
                <center>
                    <img src="../img/undraw_Search_re_x5gq.png" width="440px" height="310px">
                    <h5 style="color: red">Nenhum resultado para "<strong><?php echo $pesquisa; ?></strong>".</h5>
                </center>
            <?php } ?>


        </div>
        <!-- Fim dos cartoes-->
    </div>
</body>

</html>