<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo2.css">
</head>
<body>

 <?php
    @session_start();

    if(isset($_SESSION['msg'])){
        echo '<p class="teste">'.$_SESSION['msg'].'</p>';
        unset($_SESSION['msg']);
    }

     $codigo = $_GET['cod'];
     require('connect.php');
     $clientes = mysqli_query($con,"SELECT * FROM `tb_clientes` WHERE `codigo` = '$codigo'");
     $cliente = mysqli_fetch_assoc($clientes);
?>

<div class="tudo">
    <div class="centro">
        <form action="editarCliente.act.php" method="post" enctype="multipart/form-data" id="editarForm">

            <img src="<?php echo $cliente['foto'] ?>">
            
            <p><input type="hidden" name="codigo" value="<?php echo $cliente['codigo'];?>"></p>
            <p><input type="hidden" name="fotoAntiga" value="<?php echo $cliente['foto'];?>"></p>
            <p><label>NOME:</label>
                <input type="text" name="nome" value="<?php echo $cliente['nome']; ?>">
            </p>
            <p><label>EMAIL:</label>
                <input type="text" name="email" value="<?php echo $cliente['email']; ?>">
            </p>
            <p><label for="inputFile">FOTO:</label>
                <input type="file" name="foto" style="color:transparent;">
            </p>
            <p>
                <input type="submit" name="enviar" value="enviar">
               
            </p>
 
        </form>
    </div>


    
</div>




</body>
</html>