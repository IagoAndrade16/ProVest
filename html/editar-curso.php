<?php
session_start();
include("../php/verifica_login.php");

?>

<?php
/*
$nomeC = $_GET['nomeC'];
$enderecoC = $_GET['enderecoC'];
$telefone = $_GET['telefoneC'];
$celular = $_GET['celular'];
$tipoC = $_GET['tipo'];
$categoria = $_GET['categoria'];
$descricao = $_GET['descricao'];
$estado = $_GET['estado'];
$cidade = $_GET['cidadeC'];
$foto = $_GET['fotoC'];
*/
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
    <div style="display: flex; align-items: center; ">
            <a href="navegacao.php"><img width="50px" height="50px" src="../img/logoProVest.png"></a>
            <h4 class="texto" style="color: #fff;">Editar Curso</h4>
        </div>

        <nav class="menu">
            <ul>
                <li><a href="perfil.php">
                        <!--<i class="fa fa-user" aria-hidden="true"></i>--> <img width="45px" height="45px" style="border-radius: 100px; object-fit: cover;" src="<?php echo ("../php/upload/" . $_SESSION['fotoU']); ?>"> <?php echo $_SESSION['nomeUsuario']; ?> <a href="../php/logout.php">ㅤSair</a>
                    </a></li>
            </ul>
        </nav>

    </header>

    <center>
        <br>
        <br>
        <br>
    </center>
    <form action="../php/editar-curso.php" method="POST" enctype="multipart/form-data">
        <div class="container px-0">
            <div class="row">
                <!--1ª coluna(nome, categoria e modalidade)-->
                <div class="col-md-4">
                    <div class="p-3">
                        <!--Campo nome -->
                        <?php if (isset($_SESSION['categoria-Inv'])) : ?>
                            <p style="color: red;"><i class="fa fa-info-circle" aria-hidden="true" style="color:red"></i> Dados incorretos</p>
                        <?php
                        endif;
                        unset($_SESSION['categoria-Inv']);
                        ?>
                        <div class="form mb-3">
                            <label>Novo nome</label>
                            <input type="name" name="nomeC" value="<?php //echo $nomeC; 
                                                                    ?>" class="form-control">
                        </div>

                        <!--Categoria do curso(radios) -->
                        <label class="form-label">Categoria</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Pré-ENEM" id="Pré-ENEM" name="Categoria[]">
                            <label class="form-check-label" for="Pré-ENEM">
                                Pré-ENEM
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Pré-Vestibular" id="Pré-Vestibular" name="Categoria[]">
                            <label class="form-check-label" for="Pré-Vestibular">
                                Pré-Vestibular
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Concursos Militares" id="Concursos Militares" name="Categoria[]">
                            <label class="form-check-label" for="Concursos Militares">
                                Concursos Militares
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Concursos Públicos" id="Concursos Públicos" name="Categoria[]">
                            <label class="form-check-label" for="Concursos Públicos">
                                Concursos Públicos
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Outros" id="Outros" name="Categoria[]">
                            <label class="form-check-label" for="Outros">
                                Outros
                            </label>
                        </div>
                        <br>

                        <!--Modalidade de ensino(radios) -->
                        <label class="form-label">Modalidade de ensino</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Online" id="Online" name="ensino[]">
                            <label class="form-check-label" for="Online">
                                Online
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Presencial" id="Presencial" name="ensino[]">
                            <label class="form-check-label" for="Presencial">
                                Presencial
                            </label>
                        </div>
                    </div>
                </div>

                <!--Segunda coluna(descrição, endereço, tel/cel)-->
                <div class="col-md-5">
                    <div class="p-3">
                        <div class="form">
                            <label>Descrição</label>
                            <textarea class="form-control" name="descriC" style="height: 100px"><?php //echo $descricao; 
                                                                                                ?></textarea>

                        </div>
                        <br>

                        <div class="form mb-3">
                            <label>
                                Endereço
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                </svg>
                            </label>
                            <input type="name" value="<?php //echo $enderecoC; 
                                                        ?>" name="endereC" class="form-control">

                        </div>

                        <div class="form mb-3">
                            <label>
                                Telefone
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                </svg>
                            </label>
                            <input type="number" value="<?php //echo $telefone; 
                                                        ?>" name="tefonC" class="form-control" placeholder="<?php //echo $telefone; 
                                                                                                            ?>">
                        </div>

                        <div class="form mb-3">
                            <label>
                                Celular
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                    <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                                </svg>
                            </label>
                            <input type="number" value="<?php //echo $celular; 
                                                        ?>" name="celularC" class="form-control">

                        </div>

                    </div>
                </div>

                <!--3ª Coluna(estado, cidade e foto)-->
                <div class="col-md-3">
                    <div class="p-3">
                        <br>
                        <?php //echo $estado; 
                        ?>
                        <select class="form-select" name="estado" aria-label="Default select example" id="Estado"></select>
                    </div>

                    <div class="p-3">
                        <?php //echo $cidade; 
                        ?>
                        <select class="form-select" name="cidade" aria-label="Default select example" id="Cidade">
                            <option>Cidade</option>>
                        </select>
                    </div>

                    <footer>
                        <label for="arquivo" style="margin-left: 1rem" class="btn btn-outline-dark"><i class="fa fa-file-image-o" aria-hidden="true"></i> Alterar foto</label>
                        <input id="arquivo" style="display: none;" type="file" name="arquivo"><br><br>
                        <input type="submit" style="font-size: 12px; margin-left: 1rem" name="salvarfoto" class="btn btn-dark" onclick="return confirm('Se está ação for execultada sem um arquivo ela irá apagar a foto atual.');">
                    </footer>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="p-3">
                        <center>
                            <button type="submit" name="btn-salvar" class="btn btn-dark">Salvar Alterações</button>
                            <button type="submit" name="btn-Nsalvar" class="btn btn-danger">Descartar alterações</button>
                        </center>

                    </div>
                </div>
            </div>
        </div>
    </form>



    <script src="../jquery/select.js"></script>

</body>

</html>