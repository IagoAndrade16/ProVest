<?php
session_start();
session_destroy();
header("Location: ../html/cadastro.php");
exit();

?>