<?php

extract($_POST);
extract($_FILES);

$destino="fotos/". md5(time().$foto['size']).".jpg";

$pass = password_hash($senha, PASSWORD_DEFAULT);

@session_start();

require('connect.php');
$msg="";

if(mysqli_query($con,"INSERT INTO `tb_clientes`
    (`codigo`,`nome`,`email`, `senha`, `foto`)VALUES
  (NULL, '$nome','$email', '$pass', '$destino');")){
   move_uploaded_file($foto['tmp_name'],$destino);
   $msg = "Registro feito com sucesso!";
} else{
    $msg = "Falha ao registrar". $con->error;
}
$_SESSION['msg'] = $msg;

header("location: cadastroCliente.php");