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

require('connect.php');

include('menu.php');

$clientes = mysqli_query($con, "Select * from `tb_clientes`");
echo "<div class=cardClientes>";
while($cliente = mysqli_fetch_assoc($clientes)){
    echo "<div class=card>";

    echo "<img src= $cliente[foto]>";

    echo "<p>Nome: $cliente[nome]</p>";
    echo "<p>Email: $cliente[email]</p>";
    echo "<p>Código: $cliente[codigo]</p>";

    echo "<a href=editarCliente.php?cod=$cliente[codigo]>Editar<a/>";
    echo "<a href=javascript:excluir($cliente[codigo])>Excluir</a>";
    echo "</p>";
    echo "</div>";
}
echo "</div>";

?>

<script>
    function excluir(codigo){
        let resposta = confirm("Deseja excluir o registro "+codigo+"?");
        if(resposta == true){
            window.location = "excluirCliente.php?cod="+codigo;
        }

    }

</script>

</body>
</html>