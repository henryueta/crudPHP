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
        <form action="login.act.php" method="post">

            <p><label>EMAIL:</label>
                <input type="text" name="email">
            </p>
            <p><label>SENHA:</label>
                <input type="password" name="senha">
            </p>
            <p>
                <input type="submit" name="enviar" value="enviar" id="btn_enviar">
               
            </p>
 
        </form>
    </div>


    
</div>

</body>
</html>