<?php session_start() ?>
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
    <link rel="stylesheet" href="../css/cadastro.css">
    <link rel="shortcut icon" href="../img/LogoProVest.ico" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>ProVest | Cadastro</title>
</head>

<body>

    <header class="barra">
        <div style="padding-top: 10px;">
            <center>
                <h1 style="color: #fff">Crie sua conta</h1>
            </center>
        </div>
    </header>
    <br>

    <div>
        <form action="../php/cadastrar.php" method="POST" enctype="multipart/form-data">
            <center>
                <?php if (isset($_SESSION['erro'])) : ?>
                    <p style="color: red;"><i class="fa fa-info-circle" aria-hidden="true" style="color:red"></i> Erro no cadastro</p>
                <?php endif;
                unset($_SESSION['erro']); ?>

                <?php if (isset($_SESSION['semfoto'])) : ?>
                    <p style="color: red;"><i class="fa fa-info-circle" aria-hidden="true" style="color:red"></i> Foto não selecionada!</p>
                <?php endif;
                unset($_SESSION['semfoto']); ?>

                <label for="arquivo" style="padding-right: 4.5rem; padding-left: 4.5rem;" class="btn btn-outline-dark"><i class="fa fa-file-image-o" aria-hidden="true"></i> Adicionar foto</label>
                <input id="arquivo" type="file" name="arquivo" style="display: none;" required>

                <div class="nome-usuario">
                    <input type="text" name="nome_usuario" required="" placeholder=" Nome de usuário">

                    <?php if (isset($_SESSION['letras'])) : ?>
                        <p style="color: red;"><i class="fa fa-info-circle" aria-hidden="true" style="color:red"></i> Nome com menos de 3 caracteres</p>
                    <?php endif;
                    unset($_SESSION['letras']); ?>

                    <?php if (isset($_SESSION['vazio'])) : ?>
                        <p style="color: red;"><i class="fa fa-info-circle" aria-hidden="true" style="color:red"></i> Campo nome não preenchido</p>
                    <?php endif;
                    unset($_SESSION['vazio']); ?>
                </div>

                <div class="estado">
                    <select name="estado_usuario" id="Estado"></select>

                    <?php if (isset($_SESSION['eu'])) : ?>
                        <p style="color: red;"><i class="fa fa-info-circle" aria-hidden="true" style="color:red"></i> Campo estado não selecionado</p>
                    <?php endif;
                    unset($_SESSION['eu']); ?>
                </div>

                <div class="estado">
                    <select name="cidade_usuario" id="Cidade">
                        <option>Cidade</option>
                    </select>
                    <?php if (isset($_SESSION['ci'])) : ?>
                        <p style="color: red;"><i class="fa fa-info-circle" aria-hidden="true" style="color:red"></i> Campo cidade não selecionado</p>
                    <?php endif;
                    unset($_SESSION['ci']); ?>
                </div>

                <div class="e-mail">
                    <input type="email" name="e_mail_usuario" required="" placeholder=" E-mail">

                    <?php if (isset($_SESSION['vazio_em'])) : ?>
                        <p style="color: red;"><i class="fa fa-info-circle" aria-hidden="true" style="color:red"></i> Campo e-mail não preenchido</p>
                    <?php endif;
                    unset($_SESSION['vazio_em']); ?>

                    <?php if (isset($_SESSION['valida'])) : ?>
                        <p style="color: red;"><i class="fa fa-info-circle" aria-hidden="true" style="color:red"></i> Campo e-mail invalido</p>
                    <?php endif;
                    unset($_SESSION['valida']); ?>

                    <?php if (isset($_SESSION['emailAuthent'])) : ?>
                        <p style="color: red;"><i class="fa fa-info-circle" aria-hidden="true" style="color:red"></i> Este email já foi registrato</p>
                    <?php endif;
                    unset($_SESSION['emailAuthent']); ?>
                </div>

                <div class="senha">
                    <input type="password" name="senha_usuario" required="" placeholder=" Senha">

                    <?php if (isset($_SESSION['senhaV'])) : ?>
                        <p style="color: red;"><i class="fa fa-info-circle" aria-hidden="true" style="color:red"></i> Campo senha não preenchido</p>
                    <?php endif;
                    unset($_SESSION['senhaV']); ?>
                </div>

                <div class="caixa-concordar">
                    <input class="caixa-ok" type="checkbox" required="" name="politica-privacidade">
                    <label for="politica-privacidade">Criar uma conta significa que você está bem com <a href="../html/servico.html">nossos
                            Termos de Serviço</a> e Política de <a href="../html/pv.html"> Privacidade.</a></label>

                </div>

                <div>
                    <center>
                        <button type="submit" name="Button" class="btn btn-dark">Cria conta</button>
                    </center>
                </div>

            </center>
        </form>
    </div>

    <div class="suporte">
        <p class="ja-tem-uma-conta">Ja tem uma conta?<a class="Login" href="login.php"> Clique aqui</a></p>
    </div>

    <script src="../jquery/select.js"></script>

</body>

</html>