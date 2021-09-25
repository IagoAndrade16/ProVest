<?php
session_start();
include("../php/verifica_login.php");

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/b21197af3e.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <link rel="shortcut icon" href="../img/LogoProVest.ico" type="image/x-icon">
  <link rel="stylesheet" href="../css/ver-perfil.css">

  <title>ProVest | Perfil</title>
</head>

<body>

  <!--Barra de navegação-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <div class="container-fluid shadow-sm">
      <!-- Logo -->
      <a class="navbar-brand" href="navegacao.php">
        <img class="img-fluid" src="../img/logoProVest.png" alt="logo - ProVest" width="50px" height="50px">
      </a>
      <a class="navbar-brand" style="text-decoration: none; color: #fff;" href="../php/logout.php">Sair</a>
    </div>
    </div>
  </nav>
  <form action="../php/perfil.php" method="POST">
    <div class="container">
      <div class="row gx-5">
        <div class="col-md-4">
          <div class="p-3">
            <h1>Meu Perfil</h1>
            <h4 style="margin-bottom: 20px;">Foto de perfil</h4>
            <a href="#" id="foto-perfil" title="Trocar foto">
              <i style="color: #212529; font-size: 200px;" class="fa fa-user-circle-o" aria-hidden="true"></i>
              <!--<img src="../img/fotoPessoa.jpg" alt="Foto-perfil" width="150px" height="150px" style="border-radius: 100px;">-->
            </a>

          </div>
        </div>

        <!-- Informações gerais-->

        <div class="col">
          <div class="p-3">
            <h4 style="margin-bottom: 30px;">Informações gerais</h4>
            <div class="mb-3">
              <label class="form-label">Nome</label>
              <input type="text" placeholder="<?php echo $_SESSION['nomeUsuario']; ?>" class="form-control" id="exampleInputEmail1" name="usuario" aria-describedby="emailHelp">
              <?php if (isset($_SESSION['userInvalid'])) : ?>
                <p style="color: red;"><i class="fa fa-info-circle" aria-hidden="true" style="color:red"></i> Campo nome invalido</p>
              <?php endif;
              unset($_SESSION['userInvalid']); ?>
            </div>
            <div class="mb-3">
              <label class="form-label">E-mail</label>

              <input type="email" name="email" placeholder="<?php echo $_SESSION['email']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <?php if (isset($_SESSION['invalid'])) : ?>
                <p style="color: red;"><i class="fa fa-info-circle" aria-hidden="true" style="color:red"></i> Campo e-mail invalido</p>
              <?php endif;
              unset($_SESSION['invalid']); ?>

              <div id="emailHelp" class="form-text">Nós nunca vamos compartilhar seu email com ninguém.</div>
            </div>
            <div class="mb-3">
              <label class="form-label">Quer redefinir sua Senha?</label>
              <input type="password" name="senha" placeholder="Troque sua senha aqui" class="form-control" id="exampleInputPassword1">
              <?php if (isset($_SESSION['passInvalid'])) : ?>
                <p style="color: red;"><i class="fa fa-info-circle" aria-hidden="true" style="color:red"></i> Campo senha invalido</p>
              <?php endif;
              unset($_SESSION['passInvalid']); ?>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="p-3">
            <h4 style="margin-bottom: 30px; color: #fff;">Easter Egg</h4>
            <div class="mb-3">
              <label class="form-label">Estado: <?php echo $_SESSION['estado']; ?></label>
              <select class="form-select" name="estado" aria-label="Default select example" id="Estado"></select>
              <?php if (isset($_SESSION['estaInvalid'])) : ?>
                <p style="color: red;"><i class="fa fa-info-circle" aria-hidden="true" style="color:red"></i> Campo estado invalido</p>
              <?php endif;
              unset($_SESSION['estaInvalid']); ?>
            </div>


            <div class="mb-3">
              <label class="form-label">Cidade</label>
              <select class="form-select" placeholder="<?php echo $_SESSION['cidadeUsuario']; ?>" name="cidade" aria-label="Default select example" id="Cidade">
                <option><?php echo $_SESSION['cidadeUsuario']; ?></option>>
              </select>
              <?php if (isset($_SESSION['cidadInvalid'])) : ?>
                <p style="color: red;"><i class="fa fa-info-circle" aria-hidden="true" style="color:red"></i> Campo cidade invalido</p>
              <?php endif;
              unset($_SESSION['cidadInvalid']); ?>
              <?php if (isset($_SESSION['no'])) : ?>
                <p style="color: red;"><i class="fa fa-info-circle" aria-hidden="true" style="color:red"></i> Campo cidade invalido</p>
              <?php endif;
              unset($_SESSION['no']); ?>
            </div>
            <button name="salvar" type="submit" class="btn btn-dark" onclick="return confirm('Essa ação desconecta seu usuario. Tem certeza?');">Salvar Alterações</button>
            <button type="submit" name="btn-delete" value="btn-delete" class="btn btn-outline-danger" onclick="return confirm('Tem certeza que deseja excluir sua conta?');">Excluir Conta <i class="fa fa-trash" aria-hidden="true"></i></button>
          </div>
        </div>
      </div>
  </form>

  <!-- Fim das informações do perfil-->

  <hr style="margin-bottom: 30px;">
  <!-- Meus cursos-->

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="main-title" style="text-align: center;"> Meus cursos</h1>
      </div>
    </div>

    <!-- Cartões dos cursos-->
    <div class="row gx-5">
      <?php if (isset($_SESSION['cursos_ERRO'])) : ?>
        <?php
        include("../php/conexao.php");
        $sql = "SELECT * FROM cursos";
        $result = $mysqli->query($sql);
        if ($result) {
          $nomeC = array();
          $categoria = array();
          $cidadeC = array();
          $tipoC = array();
          $i = 0;
          while ($linha = $result->fetch_array()) {
            $nomeC[$i] = $linha['nome'];
            $categoria[$i] = $linha['categoria'];
            $cidadeC[$i] = $linha['cidadeC'];
            $tipoC[$i] = $linha['tipoEnsino'];
        ?>
            <div class="col-md-4">
              <div class="p-3">
                <div class="card" style="width: 18rem;">
                  <img src="../img/img-exemplo-home.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"> <?php echo $nomeC[$i]; ?> </h5>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="green" class="bi bi-book" viewBox="0 0 16 16">
                          <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                        </svg>
                        <?php echo $categoria[$i]; ?>
                      </li>
                      <li class="list-group-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="green" class="bi bi-map" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M15.817.113A.5.5 0 0 1 16 .5v14a.5.5 0 0 1-.402.49l-5 1a.502.502 0 0 1-.196 0L5.5 15.01l-4.902.98A.5.5 0 0 1 0 15.5v-14a.5.5 0 0 1 .402-.49l5-1a.5.5 0 0 1 .196 0L10.5.99l4.902-.98a.5.5 0 0 1 .415.103zM10 1.91l-4-.8v12.98l4 .8V1.91zm1 12.98 4-.8V1.11l-4 .8v12.98zm-6-.8V1.11l-4 .8v12.98l4-.8z" />
                        </svg>
                        <?php echo $cidadeC[$i]; ?>
                      </li>
                      <li class="list-group-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="green" class="bi bi-laptop" viewBox="0 0 16 16">
                          <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z" />
                        </svg>
                        <?php echo $tipoC[$i]; ?>
                      </li>
                    </ul>
                    <a href="editar-curso.php" class="btn btn-dark">Editar</a>
                  </div>
                </div>
              </div>
            </div>

        <?php
          }
        }
        $i++ ?>
      <?php endif;
      unset($_SESSION['cursos_ERRO']); ?>

    </div>

    <script src="../jquery/select.js"></script>
</body>

</html>