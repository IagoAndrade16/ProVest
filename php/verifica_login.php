<?php
if (!$_SESSION['nomeUsuario']) {
   header("Location: ../html/login.html");
    exit();
}
