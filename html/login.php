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
    <script src="https://kit.fontawesome.com/b21197af3e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../img/LogoProVest.ico" type="image/x-icon">
    <title>ProVest | Login</title>
</head>

<body>
    <header class="barra">
        <div class="logoprovest">
            <center>
                <img src="../img/logoProVest.png" alt="LogoProVest">
            </center>
        </div>
    </header>

    <br>
    <div class="titulo-login">
        <h1>Conecte-se</h1>
    </div>

    <div class="Login">
        <form action="../php/login.php" method="POST">
            <center>
                <?php if (isset($_SESSION['incorreto'])) : ?>
                    <p style="color: red;"><i class="fa fa-info-circle" aria-hidden="true" style="color:red" ></i> Credenciais Incorretas</p>
                <?php
                endif;
                unset($_SESSION['incorreto']);
                ?>
                <div class="email-usuario">
                    <input type="email" name="email" required="" placeholder=" E-mail">
                </div>

                <div class="senha">
                    <input type="password" name="senha" required="" placeholder=" Senha">
                </div>

                <div class="esqueceu-senha">
                    <a href="esqueceu-senha.html">Esqueceu a senha?</a>
                </div>

                <div class="botao-entrar">
                    <center>
                        <button type="submit" name="botãoLogin" class="btn btn-outline-dark">Entrar</button>
                    </center>
                </div>
            </center>
        </form>

        <div class="criar-conta">
            <p>Novo aqui?<a href="cadastro.php"> Crie sua conta</a></p>
        </div>



</body>

</html>