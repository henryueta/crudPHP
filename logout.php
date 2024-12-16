<?php

session_start();

$_SESSION['logado'] = false;
unset($_SESSION['logado']);
unset($_SESSION['nome']);
unset($_SESSION['foto']);

session_destroy();

header("location:login.php");