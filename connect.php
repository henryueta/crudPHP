<?php

define("ENDERECO",'localhost');
define("USUARIO",'root');
define("SENHA",'04920492');
define("BASE",'bd_clientes');



$con = mysqli_connect(ENDERECO,USUARIO,SENHA,BASE);
mysqli_query($con,"SET NAMES utf8");
