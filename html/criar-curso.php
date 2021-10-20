<?php session_start();
include("../php/verifica_login.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/b21197af3e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/criar-curso.css">
    <link rel="shortcut icon" href="../img/LogoProVest.ico" type="image/x-icon">
    <title>ProVest | Criar Curso</title>
</head>

<body>

    <header>
        <a href="navegacao.php"><img width="50px" height="50px" src="../img/logoProVest.png"></a>

        <nav class="menu">
            <ul>
                <li><a href="perfil.php"> <img width="45px" height="45px" style="border-radius: 100px; object-fit: cover;" src="<?php echo ("../php/upload/" . $_SESSION['fotoU']); ?>">
                        <!--<i class="fa fa-user" aria-hidden="true"></i>--> <?php echo $_SESSION['nomeUsuario']; ?> <a href="../php/logout.php">ㅤSair</a>
                    </a></li>
            </ul>
        </nav>

    </header>

    <center>
        <br>
        <br>
        <br>
        <br>
        <h1 class="texto">Criar Curso</h1>
    </center>

    <section class="flex-box">
        <center>
            <form action="../php/criar-cursos.php" method="POST" enctype="multipart/form-data">
                <div class="input">
                    <?php if (isset($_SESSION['nomeCursoV'])) : ?>
                        <p style="color: red;"><i class="fa fa-info-circle" aria-hidden="true" style="color:red"></i> Dados Incorretas</p>
                    <?php
                    endif;
                    unset($_SESSION['nomeCursoV']);
                    ?>
                    <input type="text" name="nome" placeholder="Nome:" required>
                </div>

                <div>
                    <?php if (isset($_SESSION['hobCursoV'])) : ?>
                        <p style="color: red;"><i class="fa fa-info-circle" aria-hidden="true" style="color:red"></i> Dados Incorretas</p>
                    <?php
                    endif;
                    unset($_SESSION['hobCursoV']);
                    ?>
                    <p>Categoria:</p>
                    <br>
                    <input class="checkbox-1" type="checkbox" value="Pré-ENEM" id="Categoria-Pré-ENEM" name="hob[]">
                    <label style="color: #212529;" for="Categoria-Pré-ENEM">Pré-ENEM</label>
                </div>

                <div>
                    <input class="checkbox-2" type="checkbox" value="Pré-Vestibular" id="Pré-Vestibular" name="hob[]">
                    <label style="color: #212529;" for="Pré-Vestibular">Pré-Vestibular</label>
                </div>

                <div>
                    <input class="checkbox-3" type="checkbox" value="Concursos Militares" id="Concursos Militares" name="hob[]">
                    <label style="color: #212529;" for="Concursos Militares">Concursos Militares</label>
                </div>

                <div>
                    <input class="checkbox-4" type="checkbox" value="Concursos Públicos" id="Concursos Públicos" name="hob[]">
                    <label style="color: #212529;" for="Concursos Públicos">Concursos Públicos</label>
                </div>

                <div>
                    <input class="checkbox-5" type="checkbox" value="Outro" id="Outro" name="hob[]">
                    <label style="color: #212529;" for="Outro">Outro</label>
                </div>

                <div>
                    <?php if (isset($_SESSION['ensinoCursoV'])) : ?>
                        <p style="color: red;"><i class="fa fa-info-circle" aria-hidden="true" style="color:red"></i> Dados Incorretas</p>
                    <?php
                    endif;
                    unset($_SESSION['ensinoCursoV']);
                    ?>
                    <p>Modalidade de Ensino:</p>
                    <br>
                    <input class="checkbox-6" type="checkbox" value="Presencial" id="Presencial" name="ensino[]">
                    <label style="color: #212529;" for="Presencial">Presencial</label>
                </div>

                <div>
                    <input class="checkbox-7" type="checkbox" value="On-line" id="On-line" name="ensino[]">
                    <label style="color: #212529;" for="On-line">On-line</label>

                </div>

                <div class="input">
                    <?php if (isset($_SESSION['estadoCursoV'])) : ?>
                        <p style="color: red;"><i class="fa fa-info-circle" aria-hidden="true" style="color:red"></i> Dados Incorretas</p>
                    <?php
                    endif;
                    unset($_SESSION['estadoCursoV']);
                    ?>
                    <select id="Estado" name="estado"></select>
                </div>

                <div class="input">
                    <?php if (isset($_SESSION['descricaoCursoV'])) : ?>
                        <p style="color: red;"><i class="fa fa-info-circle" aria-hidden="true" style="color:red"></i> Dados Incorretas</p>
                    <?php
                    endif;
                    unset($_SESSION['descricaoCursoV']);
                    ?>
                    <textarea type="text" name="descricao" placeholder="Descrição:"></textarea>
                </div>

                <!------------------------------MEIO------------------------------>

                <div><br>
                    <label for="arquivo" class="btn btn-outline-dark"><i class="fa fa-file-image-o" aria-hidden="true"></i> Adicionar foto</label>
                    <input id="arquivo" style="display: none;" type="file" name="arquivo" required>
                </div>
                <br>
                <div class="input">
                    <?php if (isset($_SESSION['cidadeCursoV'])) : ?>
                        <p style="color: red;"><i class="fa fa-info-circle" aria-hidden="true" style="color:red"></i> Dados Incorretas</p>
                    <?php
                    endif;
                    unset($_SESSION['cidadeCursoV']);
                    ?>
                    <select id="Cidade" name="cidade">
                        <option>Cidades</option>
                    </select>
                </div>

                <div class="input">
                    <?php if (isset($_SESSION['enderecoCursoV'])) : ?>
                        <p style="color: red;"><i class="fa fa-info-circle" aria-hidden="true" style="color:red"></i> Dados Incorretas</p>
                    <?php
                    endif;
                    unset($_SESSION['enderecoCursoV']);
                    ?>
                    <input type="text" name="endereco" placeholder="Endereço:" required>
                </div>

                <div class="input">
                    <?php if (isset($_SESSION['telefoneCursoV'])) : ?>
                        <p style="color: red;"><i class="fa fa-info-circle" aria-hidden="true" style="color:red"></i> Dados Incorretas</p>
                    <?php
                    endif;
                    unset($_SESSION['telefoneCursoV']);
                    ?>
                    <input type="number" name="telefone" placeholder="Telefone:" required>
                </div>

                <div class="input">
                    <?php if (isset($_SESSION['celularCursoV'])) : ?>
                        <p style="color: red;"><i class="fa fa-info-circle" aria-hidden="true" style="color:red"></i> Dados Incorretas</p>
                    <?php
                    endif;
                    unset($_SESSION['celularCursoV']);
                    ?>
                    <input type="number" name="celular" placeholder="Celular/WhatsApp:" required>
                </div>
                <br>
                <div class="btn">
                    <button type="submit" name="Salvar" class="btn btn-outline-dark">Criar</button>
                </div>
                <br>
            </form>
        </center>
    </section>

    <script src="../jquery/select.js"></script>

</body>

</html>