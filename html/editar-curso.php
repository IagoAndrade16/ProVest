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
    <script src="https://kit.fontawesome.com/b21197af3e.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/editar-curso.css">
    <link rel="shortcut icon" href="../img/LogoProVest.ico" type="image/x-icon">
    <title>ProVest | Editar Curso</title>
</head>

<body>

    <header>
        <a href="navegacao.php"><img width="50px" height="50px" src="../img/logoProVest.png"></a>

        <nav class="menu">
            <ul>
                <li><a href="perfil.php"> <i class="fa fa-user" aria-hidden="true"></i> <?php echo $_SESSION['nomeUsuario']; ?> <a href="../php/logout.php">ㅤSair</a></a></li>
            </ul>
        </nav>

    </header>
    
    <center>
        <br>
        <br>
        <br>
        <br>
        <h1 class="texto">Editar Curso</h1>
    </center>

    <section class="flex-box">
        <center>
            <form action="" method="POST">
                <div class="input">
                    <p>Nome Atual:</p>
                    <input type="text" name="Nome" required="" placeholder="<?php echo $_SESSION['nome']; ?>">
                </div>

                <div>
                    <p>Categoria Atual: <?php echo $_SESSION['categoria']; ?> </p>
                    <br>
                    <input class="checkbox-1" type="checkbox" required="" id="Categoria-Pré-ENEM" value="Pré-ENEM" name="cat[]">
                    <label style="color: #212529;" for="Categoria-Pré-ENEM">Pré-ENEM</label>
                </div>

                <div>
                    <input class="checkbox-2" type="checkbox" required="" id="Pré-Vestibular" value="Pré-Vestibular" name="cat[]">
                    <label style="color: #212529;" for="Pré-Vestibular">Pré-Vestibular</label>
                </div>

                <div>
                    <input class="checkbox-3" type="checkbox" required="" id="Concursos Militares" value="Concursos Militares" name="cat[]">
                    <label style="color: #212529;" for="Concursos Militares">Concursos Militares</label>
                </div>

                <div>
                    <input class="checkbox-4" type="checkbox" required="" id="Concursos Públicos" value="Concursos Públicos" name="cat[]">
                    <label style="color: #212529;" for="Concursos Públicos">Concursos Públicos</label>
                </div>

                <div>
                    <input class="checkbox-5" type="checkbox" required="" id="Outro" value="Outro" name="cat[]">
                    <label style="color: #212529;" for="Outro">Outro</label>
                </div>

                <div>
                    <p>Modalidade de Ensino: <?php echo $_SESSION['tipo']; ?></p>
                    <br>
                    <input class="checkbox-6" type="checkbox" required="" id="Presencial" value="Presencial" name="ens[]">
                    <label style="color: #212529;" for="Presencial">Presencial</label>
                </div>

                <div>
                    <input class="checkbox-7" type="checkbox" required="" id="On-line" value="On-line" name="ens[]">
                    <label style="color: #212529;" for="On-line">On-line</label>

                </div>

                <div class="input">
                    <p>Estado atual:<?php echo $_SESSION['estado']; ?></p>
                    <select id="Estado" nome="estadoC"></select>
                </div>

                <div class="input">
                    <p>Descrição Atual:</p>
                    <textarea type="text" name="descricao" required="" placeholder="<?php echo $_SESSION['descricao']; ?>"></textarea>
                </div>

                <!------------------------------MEIO------------------------------>

                <div>
                    <p>Adicionar foto</p>
                    <a href="#">
                        <div class="icone">
                            <img src="../img/btn-add.png">
                        </div>
                    </a>
                </div>

                <div class="input">
                    <p>Cidade Atual:</p>
                    <select id="Cidade" name="cidadeU">
                        <option><?php echo $_SESSION['cidade']; ?></option>
                    </select>
                </div>

                <div class="input">
                    <p>Endereço Atual:</p>
                    <input type="text" name="endereco" required="" placeholder="<?php echo $_SESSION['endereco']; ?>">
                </div>

                <div class="input">
                    <p>Telefone Atual:</p>
                    <input type="text" name="telefone" required="" placeholder="<?php echo $_SESSION['phon']; ?>">
                </div>

                <div class="input">
                    <p>Celular Atual:</p>
                    <input type="text" name="celular" required="" placeholder="<?php echo $_SESSION['celular']; ?>">
                </div>
                <br>
                <div class="btn">
                    <button type="submit" class="btn btn-outline-dark">Salvar Alterações</button>
                </div>
                <br>
            </form>
        </center>
    </section>

    <script src="../jquery/select.js"></script>

</body>

</html>