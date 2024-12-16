<?php
extract($_POST);
require('connect.php');
session_start();
$destino = "";
$msg = "";

    if($email != "" && $senha != ""){
        $user = mysqli_query($con, "SELECT * FROM `tb_clientes` WHERE `email` = '$email'");
        if($user->num_rows == 1){
            $user = mysqli_fetch_assoc($user);
            if(password_verify($senha, $user['senha'])){
                $_SESSION['logado'] = true;
                $_SESSION['nome'] = $user['nome'];
                $_SESSION['foto'] = $user['foto'];
                $msg = "Bem vindo $user[nome]";
                $destino = "location:listarClientes.php";
            }else{
                $msg = "Email ou senha incorretos!";           
                $destino = "location:login.php";      
            }
        }else{
            $msg = "Email ou senha incorreto!";
            $destino = "location:login.php";
            
        }
    }else{
        $msg = "Preencha os dois campos";
        $destino = "location:login.php";
        
    }
    $_SESSION['msg'] = $msg;
    
    header($destino);
