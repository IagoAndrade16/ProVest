<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/cadastro.css">
    <link rel="shortcut icon" href="../img/LogoProVest.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <title>ProVest | Cadastro</title>
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
    <div class="titulo">
        <h1>Crie sua conta</h1>
    </div>

    <!--------------------------------------------------------CODIGO PHP-------------------------------------------------------->
    <?php

    $estados = ["Estados","Acre", "Alagoas", "Amapá", "Amazonas", "Bahia", "Ceará", "Espírito Santo", "Goiás", "Maranhão", "Mato Grosso", "Mato Grosso do Sul", "Minas Gerais", "Pará", "Paraíba", "Paraná", "Pernambuco", "Piauí", "Rio de Janeiro", "Rio Grande do Norte", "Rio Grande do Sul", "Rondônia", "Roraima", "SantaCatarina", "SãoPaulo", "Sergipe","Tocantins","DistritoFederal"];

    ?>
    <!--------------------------------------------------------CODIGO PHP-------------------------------------------------------->
    <div>
        <form action="../php/cadastrar.php" method="POST">

            <center>
                <div class="nome-usuario">
                    <input type="text" name="nome_usuario" placeholder=" Nome de usuário">
                </div>

                <div class="estado">
                <!--------------------------------------------------------CODIGO PHP-------------------------------------------------------->
                    <select name="estado_usuario">
                        <?php foreach($estados as $i){ ?>
                        
                        <option value=" <?php echo $i; ?> ">
                            <?php echo $i; ?>
                        </option>

                        <?php } ?>
                    </select>
                <!--------------------------------------------------------CODIGO PHP-------------------------------------------------------->            
                </div>

                <div class="estado">
                <!--------------------------------------------------------CODIGO PHP-------------------------------------------------------->            
                    <select name="cidade_usuario">

                        <option value=" <?php echo $i; ?> ">
                            <?php echo $i; ?>
                        </option>

                    </select>
                <!--------------------------------------------------------CODIGO PHP-------------------------------------------------------->
                </div>

                <div class="e-mail">
                    <input type="email" name="e_mail_usuario" placeholder=" E-mail">
                </div>

                <div class="senha">
                    <input type="password" name="senha_usuario" placeholder=" Senha">
                </div>

                <div class="caixa-concordar">
                    <input class="caixa-ok" type="checkbox" name="politica-privacidade">
                    <label for="politica-privacidade">Criar uma conta significa que você está bem com <a href="#">nossos
                            Termos de Serviço,</a> Política de <a href="#"> Privacidade</a> e nossas <a
                            href="#">Configurações </a>de nofificação padrão.</label>

                </div>

                <div>
                    <center>
                        <button type="submit" name="Button" class="btn btn-outline-dark">Cria conta</button>
                    </center>
                </div>

            </center>
        </form>
    </div>

    <div class="suporte">
        <p class="ja-tem-uma-conta">Ja tem uma conta?<a class="Login" href="login.html"> Clique aqui</a></p>
    </div>

</body>

</html>