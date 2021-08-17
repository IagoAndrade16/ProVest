<?php
if (!$_SESSION['email-de-usuario']) {
    header("Location: ../html/login.html");
    exit();
}
