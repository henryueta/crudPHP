<?php
require('connect.php');
extract($_POST);
extract($_FILES);
session_start();



if($foto['size'] > 0){
    $destino="fotos/". md5(time().$foto['size']).".jpg";
if($fotoAntiga != ""){
    unlink($fotoAntiga);
}
move_uploaded_file($foto['tmp_name'],$destino);
} else{
    $destino = $fotoAntiga;
}


$msg="";

if(mysqli_query($con,"UPDATE `tb_clientes` SET 
`nome` = '$nome',
`email` = '$email', 
`foto` = '$destino'
WHERE `tb_clientes`.`codigo` = '$codigo';")){
   $msg = "Alteração feita com sucesso!";
} else{
    $msg = "Falha ao alterar". $con->error;
}

$_SESSION['msg'] = $msg;

header("location: editarCliente.php?cod=$codigo");




