<?php

$codigo = $_GET['cod'];
require('connect.php');

$clientes = mysqli_query($con,"SELECT `foto` FROM `tb_clientes` WHERE `codigo` = '$codigo'");
$cliente = mysqli_fetch_assoc($clientes);
unlink($cliente['foto']);


mysqli_query($con,"DELETE FROM `tb_clientes` WHERE `codigo` = '$codigo'");



header("location:listarClientes.php");