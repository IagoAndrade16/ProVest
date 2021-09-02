<?php
if (!$_SESSION['nomeUsuario']) {
   header("Location: ../html/login.php");
    exit();
}

?>
