<?php session_start(); ?>

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

    <header class="header">
        <a href="index.php"><img src="../img/logoProVest.png"></a>
        <nav>
            <ul class="menu">
                <li><a class="foto" href="perfil.html"> <i class="fa fa-user" aria-hidden="true"></i>
                        <!--<img src="../img/fotoPessoa.jpg">-->
                    </a></li>
                <li><a href="perfil.html"> <?php echo $_SESSION['nomeUsuario']; ?> </a></li>
            </ul>
        </nav>
    </header>

    <h1 class="texto"><strong>Criar Curso</strong></h1>

    <section class="flex-box">
        <center>
            <form action="" method="POST">
                <div class="input">
                    <input type="text" name="Nome" required="" placeholder="Nome:">
                </div>

                <div>
                    <p>Categoria:</p>
                    <br>
                    <input class="checkbox-1" type="checkbox" required="" id="Categoria-Pré-ENEM" name="Pré-ENEM">
                    <label style="color: #212529;" for="Categoria-Pré-ENEM">Pré-ENEM</label>
                </div>

                <div>
                    <input class="checkbox-2" type="checkbox" required="" id="Pré-Vestibular" name="Pré-Vestibular">
                    <label style="color: #212529;" for="Pré-Vestibular">Pré-Vestibular</label>
                </div>

                <div>
                    <input class="checkbox-3" type="checkbox" required="" required="" id="Concursos Militares" name="Concursos Militares">
                    <label style="color: #212529;" for="Concursos Militares">Concursos Militares</label>
                </div>

                <div>
                    <input class="checkbox-4" type="checkbox" required="" id="Concursos Públicos" name="Concursos Públicos">
                    <label style="color: #212529;" for="Concursos Públicos">Concursos Públicos</label>
                </div>

                <div>
                    <input class="checkbox-5" type="checkbox" required="" id="Outro" name="Outro">
                    <label style="color: #212529;" for="Outro">Outro</label>
                </div>

                <div>
                    <p>Modalidade de Ensino:</p>
                    <br>
                    <input class="checkbox-6" type="checkbox" required="" id="Presencial" name="Presencial">
                    <label style="color: #212529;" for="Presencial">Presencial</label>
                </div>

                <div>
                    <input class="checkbox-7" type="checkbox" required="" id="On-line" name="On-line">
                    <label style="color: #212529;" for="On-line">On-line</label>

                </div>

                <div class="input">

                    <select id="Estado"></select>

                </div>

                <div class="input">
                    <textarea type="text" name="descricao" required="" placeholder="Descrição:"></textarea>
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
                    <select id="Cidade">
                        <option>Cidades</option>
                    </select>
                </div>

                <div class="input">
                    <input type="text" name="endereco" required="" placeholder="Endereço:">
                </div>

                <div class="input">
                    <input type="text" name="telefone" required="" placeholder="Telefone:">
                </div>

                <div class="input">
                    <input type="text" name="telefone" required="" placeholder="Celular/WhatsApp:">
                </div>
                <br>
                <div class="btn">
                    <button type="submit" class="btn btn-outline-dark">Criar</button>
                </div>
                <br>
            </form>
        </center>
    </section>

    <script src="../jquery/select.js"></script>

</body>

</html>