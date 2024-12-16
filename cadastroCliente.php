<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
 <?php
 
    @session_start();

    if(isset($_SESSION['msg'])){
        echo '<p class="teste">'.$_SESSION['msg'].'</p>';
        unset($_SESSION['msg']);
    }
?>

<div class="tudo">
    <div class="centro">
        <form action="cadastroCliente.act.php" method="post" enctype="multipart/form-data">

            <p><label>NOME:</label>
                <input type="text" name="nome">
            </p>
            <p><label>EMAIL:</label>
                <input type="text" name="email">
            </p>
            <p><label>SENHA:</label>
                <input type="password" name="senha">
            </p>
            <p><label>FOTO:</label>
                <input type="file" name="foto" style="color:transparent;">
            </p>
            <p>
                <input type="submit" name="enviar" value="enviar" id="btn_enviar">
               
            </p>
 
        </form>
    </div>


    
</div>

<script>

let enviar = document.querySelector("#btn_enviar");

enviar.addEventListener('click',()=>{

alert("Registro enviado com sucesso!");


});

</script>    


</body>
</html>