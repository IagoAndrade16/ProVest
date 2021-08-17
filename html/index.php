<?php
session_start();
include("../php/verifica_login.php"); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/index.css">
  <link rel="shortcut icon" href="../img/LogoProVest.ico" type="image/x-icon">
  <title>ProVest | Home</title>
</head>

<body>
  <!--Barra de navegação-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <!-- Logo -->
      <a class="navbar-brand" href="#">
        <img src="../img/logoProVest.png
        " alt="logo - ProVest" width="50px" height="50px" class="img-fluid" style="margin-right: 10px;">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Form e botao pesquisar -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <form class="d-flex">
            <input class="form-control me-3" type="search" placeholder="Pesquise por cursos" aria-label="Search">
            <button class="btn btn-outline-light" type="submit">Pesquisar</button>
          </form>
          <!--DropDown-->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Cursos
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Militares</a></li>
              <li><a class="dropdown-item" href="#">Concursos públicos</a></li>
              <li><a class="dropdown-item" href="#">Enem</a></li>
              <li><a class="dropdown-item" href="#">Outros vestibulares</a></li>
            </ul>
          </li>
        </ul>

        <a class="navbar-brand" href="criar-curso.html">
          Cadastrar Curso
        </a>

        <!-- Foto e nome do perfil -->
        <a class="navbar-brand" href="perfil.html">
          <img src="../img/fotoPessoa.jpg" alt="" width="40" height="24" class="img-fluid" style="border-radius: 50px; margin-right: 10px;">
          <?php echo $_SESSION['email-de-usuario']; ?>
          <a style="text-decoration: none; color: #fff;" href="../php/logout.php">Logout</a>
        </a>

      </div>
    </div>
  </nav>

  <div class="container px-0">
    <div class="row gx-5">
      <div class="col">
        <div class="p-3">
          <h4>Cursos em "Volta Redonda"</h4>
        </div>
      </div>
    </div>
  </div>


  <!-- Cartoes sobre os cursos-->
  <div class="container px-0">
    <div class="row">
      <div class="col">
        <div class="p-3">
          <div class="card" style="width: 18rem;">
            <img src="../img/fotocurso.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Protetores do saber</h5>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="green" class="bi bi-book" viewBox="0 0 16 16">
                    <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                  </svg>
                  Pré-enem
                </li>
                <li class="list-group-item">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="green" class="bi bi-map" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15.817.113A.5.5 0 0 1 16 .5v14a.5.5 0 0 1-.402.49l-5 1a.502.502 0 0 1-.196 0L5.5 15.01l-4.902.98A.5.5 0 0 1 0 15.5v-14a.5.5 0 0 1 .402-.49l5-1a.5.5 0 0 1 .196 0L10.5.99l4.902-.98a.5.5 0 0 1 .415.103zM10 1.91l-4-.8v12.98l4 .8V1.91zm1 12.98 4-.8V1.11l-4 .8v12.98zm-6-.8V1.11l-4 .8v12.98l4-.8z" />
                  </svg>
                  Volta Redonda
                </li>
                <li class="list-group-item">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="green" class="bi bi-laptop" viewBox="0 0 16 16">
                    <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z" />
                  </svg>
                  Presencial
                </li>
              </ul>
              <a href="ver-curso.html" class="btn btn-dark">Ver curso</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="p-3">
          <div class="card" style="width: 18rem;">
            <img src="../img/fotocurso.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Protetores do saber</h5>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="green" class="bi bi-book" viewBox="0 0 16 16">
                    <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                  </svg>
                  Pré-enem
                </li>
                <li class="list-group-item">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="green" class="bi bi-map" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15.817.113A.5.5 0 0 1 16 .5v14a.5.5 0 0 1-.402.49l-5 1a.502.502 0 0 1-.196 0L5.5 15.01l-4.902.98A.5.5 0 0 1 0 15.5v-14a.5.5 0 0 1 .402-.49l5-1a.5.5 0 0 1 .196 0L10.5.99l4.902-.98a.5.5 0 0 1 .415.103zM10 1.91l-4-.8v12.98l4 .8V1.91zm1 12.98 4-.8V1.11l-4 .8v12.98zm-6-.8V1.11l-4 .8v12.98l4-.8z" />
                  </svg>
                  Volta Redonda
                </li>
                <li class="list-group-item">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="green" class="bi bi-laptop" viewBox="0 0 16 16">
                    <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z" />
                  </svg>
                  Presencial
                </li>
              </ul>
              <a href="ver-curso.html" class="btn btn-dark">Ver curso</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="p-3">
          <div class="card" style="width: 18rem;">
            <img src="../img/fotocurso.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Protetores do saber</h5>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="green" class="bi bi-book" viewBox="0 0 16 16">
                    <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                  </svg>
                  Pré-enem
                </li>
                <li class="list-group-item">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="green" class="bi bi-map" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15.817.113A.5.5 0 0 1 16 .5v14a.5.5 0 0 1-.402.49l-5 1a.502.502 0 0 1-.196 0L5.5 15.01l-4.902.98A.5.5 0 0 1 0 15.5v-14a.5.5 0 0 1 .402-.49l5-1a.5.5 0 0 1 .196 0L10.5.99l4.902-.98a.5.5 0 0 1 .415.103zM10 1.91l-4-.8v12.98l4 .8V1.91zm1 12.98 4-.8V1.11l-4 .8v12.98zm-6-.8V1.11l-4 .8v12.98l4-.8z" />
                  </svg>
                  Volta Redonda
                </li>
                <li class="list-group-item">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="green" class="bi bi-laptop" viewBox="0 0 16 16">
                    <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z" />
                  </svg>
                  Presencial
                </li>
              </ul>
              <a href="ver-curso.html" class="btn btn-dark">Ver curso</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Fim dos cartoes-->

</body>

</html>