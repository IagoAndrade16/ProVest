<?php session_start(); 
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
  <link rel="stylesheet" href="../css/ver-curso.css">
  <script src="https://kit.fontawesome.com/b21197af3e.js" crossorigin="anonymous"></script>
  <link rel="shortcut icon" href="../img/LogoProVest.ico" type="image/x-icon">
  <title>ProVest | Ver Curso</title>
</head>

<body>
  <!--Barra de navegação-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <!-- Logo -->
      <a class="navbar-brand" href="index.php">
        <img src="../img/logoProVest.png" alt="logo - ProVest" width="50px" height="50px" class="img-fluid" style="border-radius: 50px; margin-right: 10px;">
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

        <a class="navbar-brand" href="criar-curso.php">
          Cadastrar Curso
        </a>

        <!-- Foto e nome do perfil -->
        <a class="navbar-brand" href="perfil.html">
          <i class="fa fa-user" aria-hidden="true"></i>
          <!--<img src="../img/fotoPessoa.jpg" alt="" width="40" height="24" class="img-fluid" style="border-radius: 50px; margin-right: 10px;">-->
          <?php echo $_SESSION['nomeUsuario']; ?>
        </a>
      </div>
    </div>
  </nav>

  <div class="container px-0">
    <div class="row">
      <!-- Informações do lado esquerdo -->
      <div class="col">
        <div class="p-3">
          <img src="../img/fotocurso.png" class="img-fluid" alt="foto curso" width="550px" style="margin-bottom: 15px;">
          <h3>Descrição</h3>
          <hr style="margin-top: 20px; margin-bottom: 20px;">

          <div class="row">
            <div class="col">
              <div class="p-3">
                <span style="color: #808080; font-weight: bold;">Modalidade de ensino: <span style="color: black;">Presencial</span></span>
              </div>
              <div class="col">
                <div class="p-3">
                  <span style="color: #808080; font-weight: bold;"> Categoria: <span style="color: black;">Pré-enem, Pré-Vestibular, Militares, Concursos Públicos</span></span>
                </div>
              </div>

            </div>
          </div>

          <hr style="margin-top: 20px; margin-bottom: 20px;">

          <p class="text-md-start" style="color: #808080;">O Centro de Estudos Protetores do Saber atua há mais de 10
            anos no mercado com diversas
            modalidades de serviço, como: Aula Particular, Acompanhamento Multidisciplinar, Pré-Enem,
            Pré-Vestibular, Preparatório para Concursos e Curso de Redação, Interpretação de Textos e
            Raciocínio Lógico Matemático. É dado suporte à educação com uma metodologia de trabalho
            centrada na necessidade individual de cada aluno
          </p>
        </div>
      </div>
      <!-- Informações do lado direito-->
      <div class="col">
        <div class="p-3">
          <!-- Nome do curso-->
          <center>
            <h1>Protetores do saber</h1>
          </center>
          <hr style="margin-bottom: 50px;">

          <!-- Localização -->
          <h2 style="margin-bottom: 20px">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
              <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
              <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
            </svg>
            Localização:
          </h2>

          <div class="text-wrap" style="color: #808080;">
            R. Vinte e Sete, 18 - Vila Santa Cecília, Volta Redonda - RJ
          </div>

          <hr style="margin-top: 20px; margin-bottom: 20px;">

          <!-- Email de contato -->
          <h2 style="margin-bottom: 20px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
              <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z" />
            </svg>
            Email de contato:
          </h2>

          <div class="text-wrap" style="color: #808080">
            exemplo@gmail.com
          </div>

          <hr style="margin-top: 20px; margin-bottom: 20px;">

          <!-- Telefone -->

          <h2 style="margin-bottom: 20px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
              <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
            </svg>
            Telefone
          </h2>

          <div class="text-wrap" style="color: #808080">
            (99)9999-9999
          </div>

          <hr style="margin-top: 20px; margin-bottom: 20px;">

          <!-- Whatsapp-->

          <h2 style="margin-bottom: 20px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
              <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
            </svg>
            Celular / Whatsapp
          </h2>

          <div class="text-wrap" style="color: #808080">
            (99)99999-9999
          </div>

          <hr style="margin-top: 20px; margin-bottom: 20px;">

        </div>
      </div>
    </div>
  </div>

</body>

</html>